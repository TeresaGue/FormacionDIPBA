<?php

namespace App\Repository;

use App\Entity\GruposProfesionales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GruposProfesionales>
 *
 * @method GruposProfesionales|null find($id, $lockMode = null, $lockVersion = null)
 * @method GruposProfesionales|null findOneBy(array $criteria, array $orderBy = null)
 * @method GruposProfesionales[]    findAll()
 * @method GruposProfesionales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GruposProfesionalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GruposProfesionales::class);
    }

    public function add(GruposProfesionales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GruposProfesionales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GruposProfesionales[] Returns an array of GruposProfesionales objects
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

//    public function findOneBySomeField($value): ?GruposProfesionales
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
