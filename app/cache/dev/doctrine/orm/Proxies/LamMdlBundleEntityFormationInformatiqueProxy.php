<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class LamMdlBundleEntityFormationInformatiqueProxy extends \Lam\MdlBundle\Entity\FormationInformatique implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setObjectif($objectif)
    {
        $this->__load();
        return parent::setObjectif($objectif);
    }

    public function getObjectif()
    {
        $this->__load();
        return parent::getObjectif();
    }

    public function setPrerequis($prerequis)
    {
        $this->__load();
        return parent::setPrerequis($prerequis);
    }

    public function getPrerequis()
    {
        $this->__load();
        return parent::getPrerequis();
    }

    public function setPublic($public)
    {
        $this->__load();
        return parent::setPublic($public);
    }

    public function getPublic()
    {
        $this->__load();
        return parent::getPublic();
    }

    public function setLogo($logo)
    {
        $this->__load();
        return parent::setLogo($logo);
    }

    public function getLogo()
    {
        $this->__load();
        return parent::getLogo();
    }

    public function setNbPlace($nbPlace)
    {
        $this->__load();
        return parent::setNbPlace($nbPlace);
    }

    public function getNbPlace()
    {
        $this->__load();
        return parent::getNbPlace();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'Titre', 'Objectif', 'Public', 'Prerequis', 'nbPlace', 'Logo');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}