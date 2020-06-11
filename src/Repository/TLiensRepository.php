<?php

namespace App\Repository;

use App\Entity\TLiens;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TLiens|null find($id, $lockMode = null, $lockVersion = null)
 * @method TLiens|null findOneBy(array $criteria, array $orderBy = null)
 * @method TLiens[]    findAll()
 * @method TLiens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TLiensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TLiens::class);
    }

    // /**
    //  * @return TLiens[] Returns an array of TLiens objects
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
    public function findOneBySomeField($value): ?TLiens
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
