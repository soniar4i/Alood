<?php
namespace Alood\BackBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
**/

class Comentario{
	
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	**/
	protected $id;
	
	/**
	* @ORM\Column(type="integer", nullable=true)
	**/
	protected $puntuacion;
	
	/**
	* @ORM\Column(type="string", length=255, nullable=true)
	**/
	protected $texto;
	
	/**
	* @ORM\ManyToOne(targetEntity="Alood\ExtranetBundle\Entity\Producto", inversedBy="comentarios")
	* @ORM\JoinColumn(name="producto_id", referencedColumnName="barcode")
	**/
	protected $producto;
	
	/**
	* @ORM\ManyToOne(targetEntity="Alood\BackBundle\Entity\Usuario", inversedBy="comentarios")
	* @ORM\JoinColumn(name="usuario_id", referencedColumnName="user")
	**/
	protected $usuarios;
	
	
	public function getId() { return $this->id; }
	public function getPuntuacion() { return $this->puntuacion; }
	public function getTexto() { return $this->texto; }
	public function getProducto() { return $this->producto; }
	public function getUsuarios() { return $this->usuarios; }
	
	
	public function setPuntuacion($item) { $this->puntuacion = $item; }
	public function setTexto($item) { $this->texto = $item; }
	public function setProducto($item) { $this->producto = $item; }
	public function setUsuarios($item) { $this->usuarios = $item; }
	
	
	public function __toString(){
		return $this->id."";
	}
}