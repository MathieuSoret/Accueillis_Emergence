<?php

namespace App\Repository;

use App\Entity\TPresentsFamille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TPresentsFamille|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPresentsFamille|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPresentsFamille[]    findAll()
 * @method TPresentsFamille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPresentsFamilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPresentsFamille::class);
    }

    // /**
    //  * @return TPresentsFamille[] Returns an array of TPresentsFamille objects
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
    public function findOneBySomeField($value): ?TPresentsFamille
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
