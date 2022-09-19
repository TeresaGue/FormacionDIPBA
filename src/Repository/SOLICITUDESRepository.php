<?php

namespace App\Repository;

use App\Entity\SOLICITUDES;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SOLICITUDES>
 *
 * @method SOLICITUDES|null find($id, $lockMode = null, $lockVersion = null)
 * @method SOLICITUDES|null findOneBy(array $criteria, array $orderBy = null)
 * @method SOLICITUDES[]    findAll()
 * @method SOLICITUDES[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SOLICITUDESRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SOLICITUDES::class);
    }

    public function add(SOLICITUDES $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SOLICITUDES $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SOLICITUDES[] Returns an array of SOLICITUDES objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SOLICITUDES
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
