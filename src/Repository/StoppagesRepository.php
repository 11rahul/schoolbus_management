<?php

namespace App\Repository;

use App\Entity\Stoppages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Stoppages|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stoppages|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stoppages[]    findAll()
 * @method Stoppages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StoppagesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Stoppages::class);
    }

    // /**
    //  * @return Stoppages[] Returns an array of Stoppages objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Stoppages
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
