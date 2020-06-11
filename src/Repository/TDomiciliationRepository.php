<?php

namespace App\Repository;

use App\Entity\TDomiciliation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TDomiciliation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TDomiciliation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TDomiciliation[]    findAll()
 * @method TDomiciliation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TDomiciliationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TDomiciliation::class);
    }

    // /**
    //  * @return TDomiciliation[] Returns an array of TDomiciliation objects
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
    public function findOneBySomeField($value): ?TDomiciliation
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
