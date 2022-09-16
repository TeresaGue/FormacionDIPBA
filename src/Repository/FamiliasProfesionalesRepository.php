<?php

namespace App\Repository;

use App\Entity\FamiliasProfesionales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FamiliasProfesionales>
 *
 * @method FamiliasProfesionales|null find($id, $lockMode = null, $lockVersion = null)
 * @method FamiliasProfesionales|null findOneBy(array $criteria, array $orderBy = null)
 * @method FamiliasProfesionales[]    findAll()
 * @method FamiliasProfesionales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FamiliasProfesionalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FamiliasProfesionales::class);
    }

    public function add(FamiliasProfesionales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FamiliasProfesionales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FamiliasProfesionales[] Returns an array of FamiliasProfesionales objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FamiliasProfesionales
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
