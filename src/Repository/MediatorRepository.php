<?php

namespace App\Repository;

use App\Entity\Mediator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mediator|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mediator|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mediator[]    findAll()
 * @method Mediator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediatorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mediator::class);
    }

    // /**
    //  * @return Mediator[] Returns an array of Mediator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mediator
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
