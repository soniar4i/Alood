<?php

namespace Alood\ExtranetBundle\Entity;
use Doctrine\ORM\EntityRepository;
use Alood\ExtranetBundle\Entity\Producto;



class ProductoRepository extends EntityRepository{
	
	public function queryTodosLosProductos($usuario)
	{
		$em = $this->getEntityManager();
		$consulta = $em->createQuery('
		SELECT p FROM ExtranetBundle:Producto p WHERE p.fabricante = :fabricante ORDER BY p.nombre ASC');
		$consulta->setParameter('fabricante', $usuario);
		return $consulta;
    }
	
	public function findProducto($barcode) {
		$em = $this->getEntityManager();
		$consulta = $em->createQuery('
				SELECT p, l, c
		        FROM ExtranetBundle:Producto p
				LEFT JOIN p.alergenos l
				LEFT JOIN p.comentarios c
		        WHERE p.barcode = :barcode
		        ');
		$consulta->setParameter('barcode', $barcode);
		return $consulta->getOneOrNullResult();
	}
	
	public function eliminarProducto($barcode){
		$em = $this->getEntityManager();
		$consulta = $em->createQuery('
				SELECT p, l, c
		        FROM ExtranetBundle:Producto p
				LEFT JOIN p.alergenos l
				LEFT JOIN p.comentarios c
		        WHERE p.barcode = :barcode
		        ');
		$consulta->setParameter('barcode', $barcode);
		return $consulta;
	}
	
}
?>