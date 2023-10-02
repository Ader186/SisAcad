<?php
	class conexion{
		private static $instancia;
		private $servidor;
		private $usuario;
		private $contrasena;
		private $basedatos;
		public $conexion;
	
		private function __construct() {
			$this->servidor = "localhost";
			$this->usuario = "root";
			$this->contrasena = "";
			$this->basedatos = "sistemacurso";
	
			$this->conectar();
		}
	
		public static function getInstance() {
			if (self::$instancia === null) {
				self::$instancia = new self();
			}
			return self::$instancia;
		}
	
		private function conectar() {
			$this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->basedatos);
			$this->conexion->set_charset("utf8");
		}
	
		public function cerrar() {
			$this->conexion->close();
		}
	}
	
?> 