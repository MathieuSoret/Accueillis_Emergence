<?php

namespace App\Repository;

use App\Entity\TSante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TSante|null find($id, $lockMode = null, $lockVersion = null)
 * @method TSante|null findOneBy(array $criteria, array $orderBy = null)
 * @method TSante[]    findAll()
 * @method TSante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TSanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TSante::class);
    }

    // /**
    //  * @return TSante[] Returns an array of TSante objects
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
    public function findOneBySomeField($value): ?TSante
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
