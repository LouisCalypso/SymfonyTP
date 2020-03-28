<?php

namespace App\Repository;

use App\Entity\ArticleDoctrine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ArticleDoctrine|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleDoctrine|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleDoctrine[]    findAll()
 * @method ArticleDoctrine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleDoctrineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleDoctrine::class);
    }

    public function findLast($count) {
        $qb = $this->createQueryBuilder("article_doctrine")->orderBy('article_doctrine.createdAt', 'DESC')->setMaxResults( $count );
            return   $qb->getQuery()
                        ->getResult();
    }

    // /**
    //  * @return ArticleDoctrine[] Returns an array of ArticleDoctrine objects
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
    public function findOneBySomeField($value): ?ArticleDoctrine
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
