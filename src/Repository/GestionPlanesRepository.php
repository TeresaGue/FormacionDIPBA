<?php

namespace App\Repository;

use App\Entity\GestionPlanes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GestionPlanes>
 *
 * @method GestionPlanes|null find($id, $lockMode = null, $lockVersion = null)
 * @method GestionPlanes|null findOneBy(array $criteria, array $orderBy = null)
 * @method GestionPlanes[]    findAll()
 * @method GestionPlanes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GestionPlanesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GestionPlanes::class);
    }

    public function add(GestionPlanes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GestionPlanes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GestionPlanes[] Returns an array of GestionPlanes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GestionPlanes
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
