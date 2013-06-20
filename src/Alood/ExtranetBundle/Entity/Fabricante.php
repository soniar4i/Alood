<?php
namespace Alood\ExtranetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @ORM\Entity
**/

class Fabricante implements UserInterface{
	/**
	* @ORM\Id
	* @ORM\Column(type="string", length=100)
	**/
	protected $usuario;
	
	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $nombre;
	
	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $password;
	
	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $email;
	
	/**
	* @ORM\Column(type="string", length=100, nullable=true)
	**/
	protected $telefono;
	
	/**
	* @ORM\OneToMany(targetEntity="Alood\ExtranetBundle\Entity\Producto", mappedBy="fabricante", cascade={"all"}) 
	**/
	protected $productos;
	
	
	public function getUsuario() { return $this->usuario; }
	public function getNombre() { return $this->nombre; }
	public function getEmail() { return $this->email; }
	public function getTelefono() { return $this->telefono; }
	public function getPassword() { return $this->password; }
	public function getProductos() { return $this->productos; }
	
	public function setUsuario($item) {
		if (null === $item)  {
			return; 
		}else{
			$this->usuario = $item;
		}
	}
	public function setNombre($item) {
		if (null === $item)  {
			return; 
		}else{
			$this->nombre = $item;
		}
	}
	public function setEmail($item) { $this->email = $item; }
	public function setTelefono($item) { $this->telefono = $item; }
	public function setPassword($item) 
	{
		if (null === $item)  {
			return; 
		}else{
			$this->password = $item;
		}
	}
	public function setProductos($item) { $this->productos = $item; }
	
	
	public function __toString(){
		return $this->usuario."";
	}
	
	public function __construct(){
		$this->productos = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	function eraseCredentials(){}
		
	function getRoles()
	{
		return array('ROLE_USER');
	}
	public function getSalt()
	{
		return ''; 
	}
	
	function getUsername()
	{
		return $this->getUsuario();
	}
}