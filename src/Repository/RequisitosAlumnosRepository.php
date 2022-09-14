<?php

namespace App\Repository;

use App\Entity\RequisitosAlumnos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RequisitosAlumnos>
 *
 * @method RequisitosAlumnos|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequisitosAlumnos|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequisitosAlumnos[]    findAll()
 * @method RequisitosAlumnos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequisitosAlumnosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequisitosAlumnos::class);
    }

    public function add(RequisitosAlumnos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RequisitosAlumnos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RequisitosAlumnos[] Returns an array of RequisitosAlumnos objects
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

//    public function findOneBySomeField($value): ?RequisitosAlumnos
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
