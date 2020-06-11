<?php

namespace App\Repository;

use App\Entity\TRessources;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TRessources|null find($id, $lockMode = null, $lockVersion = null)
 * @method TRessources|null findOneBy(array $criteria, array $orderBy = null)
 * @method TRessources[]    findAll()
 * @method TRessources[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TRessourcesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TRessources::class);
    }

    // /**
    //  * @return TRessources[] Returns an array of TRessources objects
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
    public function findOneBySomeField($value): ?TRessources
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
