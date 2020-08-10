<?php

namespace App\Repository;

use App\Entity\YearMemory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method YearMemory|null find($id, $lockMode = null, $lockVersion = null)
 * @method YearMemory|null findOneBy(array $criteria, array $orderBy = null)
 * @method YearMemory[]    findAll()
 * @method YearMemory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YearMemoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YearMemory::class);
    }

    // /**
    //  * @return YearMemory[] Returns an array of YearMemory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('y.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?YearMemory
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
