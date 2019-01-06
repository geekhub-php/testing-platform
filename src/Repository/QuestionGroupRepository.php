<?php

namespace App\Repository;

use App\Entity\QuestionGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuestionGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionGroup[]    findAll()
 * @method QuestionGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionGroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuestionGroup::class);
    }

    // /**
    //  * @return QuestionGroup[] Returns an array of QuestionGroup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionGroup
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
