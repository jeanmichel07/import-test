<?php

namespace App\Repository;

use App\Entity\ImportedFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImportedFile>
 *
 * @method ImportedFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImportedFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImportedFile[]    findAll()
 * @method ImportedFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImportedFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImportedFile::class);
    }

//    /**
//     * @return ImportedFile[] Returns an array of ImportedFile objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImportedFile
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
