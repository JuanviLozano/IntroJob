<?php

namespace AppBundle\Repository;

/**
 * Usu_idiomaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Usu_idiomaRepository extends \Doctrine\ORM\EntityRepository
{
    public function findById($id) {
        $result = $this->getEntityManager()
            ->createQuery('SELECT i
                                           FROM AppBundle:Usu_idioma i
                                           WHERE :id = i.usuario')
            ->setParameter('id', $id);

        return $result->getResult();
    }
}
