<?php

namespace App\Repository;

use App\Entity\AnswerGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AnswerGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnswerGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnswerGroup[]    findAll()
 * @method AnswerGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnswerGroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AnswerGroup::class);
    }

    // /**
    //  * @return AnswerGroup[] Returns an array of AnswerGroup objects
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
    public function findOneBySomeField($value): ?AnswerGroup
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
