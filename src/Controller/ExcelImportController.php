<?php
namespace App\Controller;

use App\Entity\ImportedFile;
use App\Form\UploadExcelType;
use App\Repository\ImportedFileRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExcelImportController extends AbstractController
{
    private $em;
    private $repo;

    public function __construct(EntityManagerInterface $em, ImportedFileRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }

    #[Route('/import-excel', name: 'import_excel')]
    public function importExcel(Request $request): Response
    {
        $form = $this->createForm(UploadExcelType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try{
                // Récupérer le fichier uploadé
            $file = $form->get('excelFile')->getData();

            // Générer un nom unique et déplacer le fichier
            $fileName = uniqid() . '.' . $file->guessExtension();
            
            // Déplacer le fichier dans le dossier défini par le paramètre
            // upload_directory est defini dans le service.yaml
            $uploadDirectory = $this->getParameter('upload_directory');
            $filePath = $uploadDirectory . '/' . $fileName;
            $file->move($uploadDirectory, $fileName);

            // Charger le fichier Excel avec PHPSpreadsheet
            $spreadsheet = IOFactory::load($filePath);
            $sheet = $spreadsheet->getActiveSheet();
            $data = $sheet->toArray();

            // Traiter les données (exemple : insérer dans la base de données)
            foreach ($data as $key => $row) {
                if ($key === 0) continue; // Ignorer la première ligne (en-tête)
                
                $line = new ImportedFile();
                $line->setBusinessAccount($row[0]); 
                $line->setEventAccount($row[1]); 
                $line->setAccountLastEvent($row[2]);
                $line->setFileNumber($row[3]);
                $line->setCivility($row[4]);
                $line->setCurrentVehicleOwner($row[5]);
                $line->setName($row[6]);
                $line->setFirstName($row[7]);
                $line->setNumberNameRoad($row[8]);
                $line->setadditionalAddressOne($row[9]);
                $line->setZipCode($row[10]);
                $line->setCity($row[11]);
                $line->setHomePhone($row[12]);
                $line->setCellPhone($row[13]);
                $line->setJobPhone($row[14]);
                $line->setEmail($row[15]);
                $line->setReleaseDate(new \DateTime($row[16]));  
                $line->setBuyDate(new \DateTime($row[17]));
                $line->setLastEventDate(new \DateTime($row[18]));
                $line->setBrand($row[19]);
                $line->setModel($row[20]);
                $line->setVersion($row[21]);
                $line->setVin($row[22]);
                $line->setRegistration($row[23]);
                $line->setProspectType($row[24]);
                $line->setMileage($row[25]);
                $line->setEnergy($row[26]);
                $line->setVNSeller($row[27]);
                $line->setVOSeller($row[28]);
                $line->setBillingComment($row[29]);
                $line->setVNVOType($row[30]);
                $line->setFileNumberVNVO($row[31]);
                $line->setVNSalesIntermediary($row[32]);
                $line->setEventDate(new \DateTime($row[33]));
                $line->setOriginEvent($row[34]);
                $this->em->persist($line);
            }
            $this->em->flush();

            // Supprimer le fichier temporaire
            unlink($filePath);

            // Le message de succès
            $this->addFlash('success', 'Fichier Excel importé avec succès !');
            return $this->redirectToRoute('list');
            }catch(\Exception $e){
                // Le message d'erreur
                $this->addFlash('error', 'Il y a eu une erreur !');
                return $this->redirectToRoute('import_excel');
            }
            
        }

        return $this->render('excel_import/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/list', name: 'list')]
    public function index(Request $request){
        $data = $this->repo->findAll();
        
        return $this->render('excel_import/index.html.twig', [
            "data"=> $data,
        ]);
    }

}