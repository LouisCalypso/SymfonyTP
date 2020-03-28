<?php

namespace App\Repository;

use App\Entity\ArticlePhp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ArticlePhp|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticlePhp|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticlePhp[]    findAll()
 * @method ArticlePhp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticlePhpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticlePhp::class);
    }

    // /**
    //  * @return ArticlePhp[] Returns an array of ArticlePhp objects
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
    public function findOneBySomeField($value): ?ArticlePhp
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
