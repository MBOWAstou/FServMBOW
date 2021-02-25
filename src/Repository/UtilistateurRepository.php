<?php

namespace App\Repository;

use App\Entity\Utilistateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Utilistateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilistateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilistateur[]    findAll()
 * @method Utilistateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilistateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilistateur::class);
    }

    // /**
    //  * @return Utilistateur[] Returns an array of Utilistateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Utilistateur
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
