<?php

namespace App\Repository;

use App\Entity\TSituation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TSituation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TSituation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TSituation[]    findAll()
 * @method TSituation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TSituationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TSituation::class);
    }

    // /**
    //  * @return TSituation[] Returns an array of TSituation objects
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
    public function findOneBySomeField($value): ?TSituation
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
