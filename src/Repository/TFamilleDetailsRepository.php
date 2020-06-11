<?php

namespace App\Repository;

use App\Entity\TFamilleDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TFamilleDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method TFamilleDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method TFamilleDetails[]    findAll()
 * @method TFamilleDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TFamilleDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TFamilleDetails::class);
    }

    // /**
    //  * @return TFamilleDetails[] Returns an array of TFamilleDetails objects
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
    public function findOneBySomeField($value): ?TFamilleDetails
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
