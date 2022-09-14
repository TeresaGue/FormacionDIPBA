<?php

namespace App\Repository;

use App\Entity\ItinerarioFormativos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ItinerarioFormativos>
 *
 * @method ItinerarioFormativos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItinerarioFormativos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItinerarioFormativos[]    findAll()
 * @method ItinerarioFormativos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItinerarioFormativosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItinerarioFormativos::class);
    }

    public function add(ItinerarioFormativos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ItinerarioFormativos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ItinerarioFormativos[] Returns an array of ItinerarioFormativos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ItinerarioFormativos
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
