<?php

namespace App\Repository;

use App\Entity\TActivite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TActivite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TActivite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TActivite[]    findAll()
 * @method TActivite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TActivite::class);
    }

    // /**
    //  * @return TActivite[] Returns an array of TActivite objects
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
    public function findOneBySomeField($value): ?TActivite
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
