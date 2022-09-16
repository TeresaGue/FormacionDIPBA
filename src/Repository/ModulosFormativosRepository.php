<?php

namespace App\Repository;

use App\Entity\ModulosFormativos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModulosFormativos>
 *
 * @method ModulosFormativos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModulosFormativos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModulosFormativos[]    findAll()
 * @method ModulosFormativos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModulosFormativosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModulosFormativos::class);
    }

    public function add(ModulosFormativos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModulosFormativos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModulosFormativos[] Returns an array of ModulosFormativos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ModulosFormativos
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
