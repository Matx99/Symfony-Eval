<?php

namespace App\Repository;

use App\Entity\Litigation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Litigation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Litigation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Litigation[]    findAll()
 * @method Litigation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LitigationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Litigation::class);
    }

    // /**
    //  * @return Litigation[] Returns an array of Litigation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Litigation
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
