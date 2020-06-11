<?php

namespace App\Repository;

use App\Entity\TSessionDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TSessionDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method TSessionDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method TSessionDetails[]    findAll()
 * @method TSessionDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TSessionDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TSessionDetails::class);
    }

    // /**
    //  * @return TSessionDetails[] Returns an array of TSessionDetails objects
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
    public function findOneBySomeField($value): ?TSessionDetails
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
