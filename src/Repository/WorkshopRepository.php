<?php

namespace App\Repository;

use App\Entity\Workshop;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Workshop|null find($id, $lockMode = null, $lockVersion = null)
 * @method Workshop|null findOneBy(array $criteria, array $orderBy = null)
 * @method Workshop[]    findAll()
 * @method Workshop[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkshopRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Workshop::class);
    }

    public function save(Workshop $workshop, bool $flush = false): void
    {
        $this->getEntityManager()->persist($workshop);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findWorkshops($id): Workshop
    {
        return $this->createQueryBuilder('w')
            ->where('w.event.eventId = :idc')
            ->setParameter('idc', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function remove(Workshop $workshop, bool $flush = false): void
    {
        $this->getEntityManager()->remove($workshop);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function search(string $query): array
    {
        $qb = $this->createQueryBuilder('w');

        $qb->where('w.event.eventName LIKE :query')

            ->setParameter('query', '%' . $query . '%');

        return $qb->getQuery()->getResult();
    }
}
