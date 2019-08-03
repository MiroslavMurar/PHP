<?php

namespace App\Repository;

use App\Entity\OrderrForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrderrForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderrForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderrForm[]    findAll()
 * @method OrderrForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderrFormRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrderrForm::class);
    }

    // /**
    //  * @return OrderrForm[] Returns an array of OrderrForm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrderrForm
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
