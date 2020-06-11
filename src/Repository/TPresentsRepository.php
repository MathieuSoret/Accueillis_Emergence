<?php

namespace App\Repository;

use App\Entity\TPresents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TPresents|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPresents|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPresents[]    findAll()
 * @method TPresents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPresentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPresents::class);
    }

    // /**
    //  * @return TPresents[] Returns an array of TPresents objects
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
    public function findOneBySomeField($value): ?TPresents
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
