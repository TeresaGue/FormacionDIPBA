<?php

namespace App\Repository;

use App\Entity\CertificadosProfesionalidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CertificadosProfesionalidad>
 *
 * @method CertificadosProfesionalidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method CertificadosProfesionalidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method CertificadosProfesionalidad[]    findAll()
 * @method CertificadosProfesionalidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CertificadosProfesionalidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CertificadosProfesionalidad::class);
    }

    public function add(CertificadosProfesionalidad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CertificadosProfesionalidad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CertificadosProfesionalidad[] Returns an array of CertificadosProfesionalidad objects
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

//    public function findOneBySomeField($value): ?CertificadosProfesionalidad
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
