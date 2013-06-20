<?php
namespace Alood\BackBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
**/

class Alergeno{
	
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	**/
	protected $id;
	
	/**
	* @ORM\Column(type="string", length=255)
	**/
	protected $nombre;
	
	/**
	* @ORM\ManyToMany(targetEntity="Alood\ExtranetBundle\Entity\Producto", mappedBy="alergenos") 
	**/
	protected $productos;
	
	/**
	* @ORM\ManyToMany(targetEntity="Alood\BackBundle\Entity\Usuario", mappedBy="alergenos")
	**/
	protected $usuarios;
	
	
	public function getId() { return $this->id; }
	public function getNombre() { return $this->nombre; }
	public function getProductos() { return $this->productos; }
	public function getUsuarios() { return $this->usuarios; }
	
	public function setNombre($item) { $this->nombre = $item; }
	public function setProductos($item) { $this->productos = $item; }
	public function setUsuarios($item) { $this->usuarios = $item; }
	
	
	public function __toString(){
		return $this->nombre."";
	}
}

