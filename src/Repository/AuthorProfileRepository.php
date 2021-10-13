<?php

namespace App\Repository;

use App\Entity\AuthorProfile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AuthorProfile|null find($id, $lockMode = null, $lockVersion = null)
 * @method AuthorProfile|null findOneBy(array $criteria, array $orderBy = null)
 * @method AuthorProfile[]    findAll()
 * @method AuthorProfile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorProfileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AuthorProfile::class);
    }

    // /**
    //  * @return AuthorProfile[] Returns an array of AuthorProfile objects
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

    /*
    public function findOneBySomeField($value): ?AuthorProfile
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
