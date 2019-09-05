<?php

namespace App\Repository;

use App\Entity\Kunjungan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Kunjungan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kunjungan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kunjungan[]    findAll()
 * @method Kunjungan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KunjunganRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kunjungan::class);
    }

    // /**
    //  * @return Kunjungan[] Returns an array of Kunjungan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kunjungan
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
