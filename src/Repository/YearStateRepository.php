<?php

namespace App\Repository;

use App\Entity\YearState;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method YearState|null find($id, $lockMode = null, $lockVersion = null)
 * @method YearState|null findOneBy(array $criteria, array $orderBy = null)
 * @method YearState[]    findAll()
 * @method YearState[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YearStateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YearState::class);
    }

    // /**
    //  * @return YearState[] Returns an array of YearState objects
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
    public function findOneBySomeField($value): ?YearState
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
