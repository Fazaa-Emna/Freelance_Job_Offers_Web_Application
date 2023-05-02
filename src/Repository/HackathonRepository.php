<?php

namespace App\Repository;

use App\Entity\Hackathon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hackathon>
 *
 * @method Hackathon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hackathon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hackathon[]    findAll()
 * @method Hackathon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HackathonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hackathon::class);
    }

    public function save(Hackathon $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Hackathon $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findHackathons($id): Hackathon
    {
        return $this->createQueryBuilder('h')
            ->where('h.event.eventId = :idc')
            ->setParameter('idc', $id)
            ->getQuery()
            ->getOneOrNullResult() ;
    }

    public function search(string $eventName): array
    {
        $qb = $this->createQueryBuilder('h')
            ->join('h.event', 'e')
            ->where('e.eventName LIKE :eventName')
            ->setParameter('eventName', '%' . $eventName . '%');

        return $qb->getQuery()->getResult();
    }


}
