<?php

namespace App\Repository;

use App\Entity\TPrescripteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TPrescripteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method TPrescripteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method TPrescripteur[]    findAll()
 * @method TPrescripteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPrescripteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPrescripteur::class);
    }

    // /**
    //  * @return TPrescripteur[] Returns an array of TPrescripteur objects
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
    public function findOneBySomeField($value): ?TPrescripteur
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
