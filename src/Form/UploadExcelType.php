<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;

class UploadExcelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('excelFile', FileType::class, [
                'label' => 'Fichier Excel',
                'attr'=> [
                    'class'=>'form-control'
                ],
                'required' => true,
                'constraints' => [
                    new File([
                        'maxSize' => '10m', // Limite à 10 Mo
                        'mimeTypes' => [
                            'application/vnd.ms-excel', // .xls
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // .xlsx
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader un fichier Excel valide (.xls ou .xlsx)',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Importer',
                'attr'=> [
                    'class'=>'btn btn-primary'
                ]
            ]);
    }
}