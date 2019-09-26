<?php

namespace App\Repository;

use App\Entity\Annoncement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Annoncement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annoncement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annoncement[]    findAll()
 * @method Annoncement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnoncementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annoncement::class);
    }

    // /**
    //  * @return Annoncement[] Returns an array of Annoncement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    /**
     * @param $value
     * @return void returns an array of Annoncement objects
     */

    public function findByAnnonces($value){
        return $this->createQueryBuilder('annoncement')
            ->setMaxResults($value)
            ->getQuery()
            ->getResult();


    }

    /*
    public function findOneBySomeField($value): ?Annoncement
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
