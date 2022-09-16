<?php

namespace App\Repository;

use App\Entity\ItinerariosFormativos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ItinerariosFormativos>
 *
 * @method ItinerariosFormativos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItinerariosFormativos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItinerariosFormativos[]    findAll()
 * @method ItinerariosFormativos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItinerariosFormativosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItinerariosFormativos::class);
    }

    public function add(ItinerariosFormativos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ItinerariosFormativos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ItinerariosFormativos[] Returns an array of ItinerariosFormativos objects
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

//    public function findOneBySomeField($value): ?ItinerariosFormativos
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
