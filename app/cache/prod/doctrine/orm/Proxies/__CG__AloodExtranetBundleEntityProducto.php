<?php

namespace Proxies\__CG__\Alood\ExtranetBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Producto extends \Alood\ExtranetBundle\Entity\Producto implements \Doctrine\ORM\Proxy\Proxy
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

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getBarcode()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["barcode"];
        }
        $this->__load();
        return parent::getBarcode();
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function getFoto()
    {
        $this->__load();
        return parent::getFoto();
    }

    public function getRevision()
    {
        $this->__load();
        return parent::getRevision();
    }

    public function getCalorias()
    {
        $this->__load();
        return parent::getCalorias();
    }

    public function getPuntos()
    {
        $this->__load();
        return parent::getPuntos();
    }

    public function getValoraciones()
    {
        $this->__load();
        return parent::getValoraciones();
    }

    public function getAlergenos()
    {
        $this->__load();
        return parent::getAlergenos();
    }

    public function getComentarios()
    {
        $this->__load();
        return parent::getComentarios();
    }

    public function getFabricante()
    {
        $this->__load();
        return parent::getFabricante();
    }

    public function setBarcode($item)
    {
        $this->__load();
        return parent::setBarcode($item);
    }

    public function setNombre($item)
    {
        $this->__load();
        return parent::setNombre($item);
    }

    public function setFoto($item)
    {
        $this->__load();
        return parent::setFoto($item);
    }

    public function setRevision($item)
    {
        $this->__load();
        return parent::setRevision($item);
    }

    public function setCalorias($item)
    {
        $this->__load();
        return parent::setCalorias($item);
    }

    public function setPuntos($item)
    {
        $this->__load();
        return parent::setPuntos($item);
    }

    public function setValoraciones($item)
    {
        $this->__load();
        return parent::setValoraciones($item);
    }

    public function setAlergenos(\Doctrine\Common\Collections\ArrayCollection $alergenos)
    {
        $this->__load();
        return parent::setAlergenos($alergenos);
    }

    public function setComentarios($item)
    {
        $this->__load();
        return parent::setComentarios($item);
    }

    public function setFabricante($item)
    {
        $this->__load();
        return parent::setFabricante($item);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function subirFoto($directorioDestino)
    {
        $this->__load();
        return parent::subirFoto($directorioDestino);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'barcode', 'nombre', 'foto', 'fechaRevision', 'calorias', 'puntos', 'valoraciones', 'alergenos', 'comentarios', 'fabricante');
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
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}