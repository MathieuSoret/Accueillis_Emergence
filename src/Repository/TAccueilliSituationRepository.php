<?php

namespace App\Repository;

use App\Entity\TAccueilliSituation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TAccueilliSituation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TAccueilliSituation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TAccueilliSituation[]    findAll()
 * @method TAccueilliSituation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TAccueilliSituationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TAccueilliSituation::class);
    }

    // /**
    //  * @return TAccueilliSituation[] Returns an array of TAccueilliSituation objects
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
    public function findOneBySomeField($value): ?TAccueilliSituation
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
