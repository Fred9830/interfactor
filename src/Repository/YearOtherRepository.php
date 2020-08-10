<?php

namespace App\Repository;

use App\Entity\YearOther;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method YearOther|null find($id, $lockMode = null, $lockVersion = null)
 * @method YearOther|null findOneBy(array $criteria, array $orderBy = null)
 * @method YearOther[]    findAll()
 * @method YearOther[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YearOtherRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YearOther::class);
    }

    // /**
    //  * @return YearOther[] Returns an array of YearOther objects
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
    public function findOneBySomeField($value): ?YearOther
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
