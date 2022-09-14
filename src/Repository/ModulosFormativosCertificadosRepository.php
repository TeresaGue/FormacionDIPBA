<?php

namespace App\Repository;

use App\Entity\ModulosFormativosCertificados;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModulosFormativosCertificados>
 *
 * @method ModulosFormativosCertificados|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModulosFormativosCertificados|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModulosFormativosCertificados[]    findAll()
 * @method ModulosFormativosCertificados[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModulosFormativosCertificadosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModulosFormativosCertificados::class);
    }

    public function add(ModulosFormativosCertificados $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModulosFormativosCertificados $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModulosFormativosCertificados[] Returns an array of ModulosFormativosCertificados objects
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

//    public function findOneBySomeField($value): ?ModulosFormativosCertificados
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
