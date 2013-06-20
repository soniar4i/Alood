<?php
namespace Alood\ExtranetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
*
* Alood\ExtranetBundle\Entity\Producto 
* @ORM\Entity(repositoryClass="Alood\ExtranetBundle\Entity\ProductoRepository")
**/

class Producto {
	/**
	* @ORM\Id
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $barcode;
	
	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $nombre;
	
	/**
	* @ORM\Column(type="string", length=255, nullable=true)
	*@Assert\Image(maxSize = "500k")
	**/
	protected $foto;
	
	/**
	* @ORM\Column(type="datetime")
	**/
	protected $fechaRevision;
	
	/**
	* @ORM\Column(type="integer")
	* @Assert\NotBlank(message="No puede estar vacío")
	**/
	protected $calorias;
	
	/**
	* @ORM\Column(type="integer")
	**/
	protected $puntos;
	
	/**
	* @ORM\Column(type="integer")
	**/
	protected $valoraciones;
	
	/**
	* @ORM\ManyToMany(targetEntity="Alood\BackBundle\Entity\Alergeno", inversedBy="productos")
	* @ORM\JoinTable(name="AlergenosProductos",
	*      joinColumns={@ORM\JoinColumn(name="producto_barcode", referencedColumnName="barcode")},
	*      inverseJoinColumns={@ORM\JoinColumn(name="alergeno_id", referencedColumnName="id")}
	*      )
	**/
	
	protected $alergenos;
	
	/**
	* @ORM\OneToMany(targetEntity="Alood\BackBundle\Entity\Comentario", mappedBy="producto", cascade={"persist"})
	**/
	protected $comentarios;
	
	/**
	* @ORM\ManyToOne(targetEntity="Alood\ExtranetBundle\Entity\Fabricante", inversedBy="productos", cascade={"all"})
	* @ORM\JoinColumn(name="fabricante_id", referencedColumnName="usuario")
	**/
	protected $fabricante;
	
	
	public function getBarcode() { return $this->barcode; }
	public function getNombre() { return $this->nombre; }
	public function getFoto() { return $this->foto; }
	public function getFile() { return $this->foto; }
	public function getRevision() { return $this->fechaRevision; }
	public function getCalorias() { return $this->calorias; }
	public function getPuntos() { return $this->puntos; }
	public function getValoraciones() { return $this->valoraciones; }
	public function getAlergenos() { return $this->alergenos; }
	public function getComentarios() { return $this->comentarios; }
	public function getFabricante() { return $this->fabricante; }
	
	public function setBarcode($item) { 
		if (null === $item)  {
			return; 
		}else{
			$this->barcode = $item;
		}
	}
	public function setNombre($item) { $this->nombre = $item; }
	public function setFoto($item) { $this->foto = $item; }
	public function setFile($item) { $this->foto = $item; }
	public function setRevision() { $this->fechaRevision = new \DateTime(); }
	public function setCalorias($item) { $this->calorias = $item; }
	public function setPuntos($item) {
		if (null === $item)  {
			$this->puntos = 0; 
		}else{
			$this->puntos = $item;
		}}
	public function setValoraciones($item) {
		if (null === $item)  {
			$this->valoraciones = 0; 
		}else{
			$this->valoraciones = $item;
		}}
	public function setAlergenos(ArrayCollection $alergenos) { $this->alergenos = $alergenos; }
	public function setComentarios(ArrayCollection $comentarios) { $this->comentarios = $comentarios; }
	public function setFabricante($item) { $this->fabricante = $item; }
	
	public function addComentario($item){
		$this->comentario = $item;
	}
	
	public function __toString(){
		return $this->barcode."";
	}
	
	public function __construct(){
		$this->fechaRevision = new \DateTime();
		$this->alergenos = new ArrayCollection();
		$this->comentarios = new ArrayCollection();
	}
	
	public function subirFoto($directorioDestino){
		if (null === $this->foto) {
			return;
		}else{
			$nombreArchivoFoto = uniqid('alood-').'-foto1.jpg';
			$this->foto->move($directorioDestino, $nombreArchivoFoto);
			$this->setFoto($nombreArchivoFoto);
		}
	}
	  
  	public function prePersist($product) {
	    if (null === $this->foto) {
	        return;
	    }else{
	    	$this->subirFoto($product);
	    }
  	}
	
}