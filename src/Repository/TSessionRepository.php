<?php

namespace App\Repository;

use App\Entity\TSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method TSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method TSession[]    findAll()
 * @method TSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TSession::class);
    }

    // /**
    //  * @return TSession[] Returns an array of TSession objects
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
    public function findOneBySomeField($value): ?TSession
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
