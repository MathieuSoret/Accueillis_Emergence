<?php

namespace App\Repository;

use App\Entity\TAccueillisExportErrors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TAccueillisExportErrors|null find($id, $lockMode = null, $lockVersion = null)
 * @method TAccueillisExportErrors|null findOneBy(array $criteria, array $orderBy = null)
 * @method TAccueillisExportErrors[]    findAll()
 * @method TAccueillisExportErrors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TAccueillisExportErrorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TAccueillisExportErrors::class);
    }

    // /**
    //  * @return TAccueillisExportErrors[] Returns an array of TAccueillisExportErrors objects
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
    public function findOneBySomeField($value): ?TAccueillisExportErrors
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
