<?php

namespace App\Repository;

use App\Entity\RequisitosCriteriosPlan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RequisitosCriteriosPlan>
 *
 * @method RequisitosCriteriosPlan|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequisitosCriteriosPlan|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequisitosCriteriosPlan[]    findAll()
 * @method RequisitosCriteriosPlan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequisitosCriteriosPlanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequisitosCriteriosPlan::class);
    }

    public function add(RequisitosCriteriosPlan $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RequisitosCriteriosPlan $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RequisitosCriteriosPlan[] Returns an array of RequisitosCriteriosPlan objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RequisitosCriteriosPlan
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
