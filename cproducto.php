<?php
class Producto{
	private $id_producto;
	protected $nombre;
	private $precio;
	private $cantidad;
	
	public function __construct($id,$nom,$pre,$can){
		$this->id_producto=$id;
		$this->nombre=$nom;
		$this->precio=$pre;
		$this->cantidad=$can;
	}
	public function get_id(){
		return $this->id_producto;
	}
	public function set_id($id){
		$this->id_producto=$id;
	}
	function get_nombre(){
		return $this->nombre;
	}
	function set_nombre($nombre){
		$this->nombre=$nombre;
	}
	public function get_precio(){
		return $this->precio;
	}
	public function set_precio($precio){
		$this->precio=$precio;
	}
	public function get_cantidad(){
		return $this->cantidad;
	}
	public function set_cantidad($cantidad){
		$this->cantidad=$cantidad;
	}
}
?>