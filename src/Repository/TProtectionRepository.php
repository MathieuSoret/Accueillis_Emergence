<?php

namespace App\Repository;

use App\Entity\TProtection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TProtection|null find($id, $lockMode = null, $lockVersion = null)
 * @method TProtection|null findOneBy(array $criteria, array $orderBy = null)
 * @method TProtection[]    findAll()
 * @method TProtection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TProtectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TProtection::class);
    }

    // /**
    //  * @return TProtection[] Returns an array of TProtection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TProtection
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
