<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FormationSportRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormationSportRepository extends EntityRepository
{
    public function contenuFormationSport($num)
    {
    $query = $this->_em->createQuery("SELECT fs.Titre, fs.Objectif,fs.nbPlace,fs.Logo FROM LamMdlBundle:FormationSport fs  where fs.id='$num'");
    $resultats = $query->getResult();
    return $resultats;
  }
    
}