<?php

namespace App\Repository;

use App\Entity\Pasien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Pasien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pasien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pasien[]    findAll()
 * @method Pasien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PasienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pasien::class);
    }

    // /**
    //  * @return Pasien[] Returns an array of Pasien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pasien
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
