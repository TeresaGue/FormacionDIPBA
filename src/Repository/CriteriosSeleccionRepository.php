<?php

namespace App\Repository;

use App\Entity\CriteriosSeleccion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CriteriosSeleccion>
 *
 * @method CriteriosSeleccion|null find($id, $lockMode = null, $lockVersion = null)
 * @method CriteriosSeleccion|null findOneBy(array $criteria, array $orderBy = null)
 * @method CriteriosSeleccion[]    findAll()
 * @method CriteriosSeleccion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CriteriosSeleccionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CriteriosSeleccion::class);
    }

    public function add(CriteriosSeleccion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CriteriosSeleccion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CriteriosSeleccion[] Returns an array of CriteriosSeleccion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CriteriosSeleccion
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
