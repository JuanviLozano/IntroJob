<?php

namespace AppBundle\Repository;

/**
 * Usu_informacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Usu_informacionRepository extends \Doctrine\ORM\EntityRepository
{
    public function findById($id) {
        $result = $this->getEntityManager()
            ->createQuery('SELECT i
                               FROM AppBundle:Usu_informacion i
                               WHERE :id = i.usuario')
            ->setParameter('id', $id);

        return $result->getResult();
    }
}
