<?php
namespace Alood\BackBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;


/**
* @ORM\Entity
**/

class Usuario{
	
	/**
	* @ORM\Id
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $user;
	
	/**
	* @ORM\Column(type="string", length=255, unique=true)
	**/
	protected $email;
	
	/**
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $password;
	
	/**
	* @ORM\ManyToMany(targetEntity="Alood\BackBundle\Entity\Alergeno", inversedBy="usuarios")
	* @ORM\JoinTable(name="UsuariosProductos",
     *      joinColumns={@ORM\JoinColumn(name="usuario_user", referencedColumnName="user")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="alergeno_id", referencedColumnName="id")}
     *      )
	**/
	protected $alergenos;
	
	/**
	* @ORM\OneToMany(targetEntity="Alood\BackBundle\Entity\Comentario", mappedBy="usuarios", cascade={"all"})
	**/
	protected $comentarios;
	
	
	public function getEmail() { return $this->email; }
	public function getPassword() { return $this->password; }
	public function getUser() { return $this->user; }
	public function getAlergenos() { return $this->alergenos; }
	public function getComentarios() { return $this->comentarios; }
	
	public function setEmail($item) { $this->email = $item; }
	public function setPassword($item) 
	{
		if (null === $item)  {
			return; 
		}else{
			$this->password = $item;
		}
	}
	
	public function setUser($item) { $this->user = $item; }
	public function setAlergenos(ArrayCollection $alergenos) { $this->alergenos = $alergenos; }
	public function setComentarios($item) { $this->comentarios = $item; }
	
	public function __toString(){
		return $this->getUser();
	}
}
