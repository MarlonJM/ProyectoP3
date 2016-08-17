<?php
	/**
	* 
	*/
	class Conectar
	{
		public $username = 'root';
		public $password = '';
		public $hostname = 'localhost';
		public $database = 'proyecto';
		
		function __construct()
		{

		}

		public function getUsername() {
			return $this->username;
		}

		public function getPassword() {
			return $this->password;
		}

		public function getHostname() {
			return $this->hostname;
		}

		public function getDatabase() {
			return $this->database;
		}

		public function conectar() {
			try{
				$conexion = mysqli_connect(
					$this->getHostname(),
					$this->getUsername(),
					$this->getPassword(),
					$this->getDatabase()
				);

				if (mysqli_connect_error()) {
					throw new Exception("Falló la conexión: %s\n", mysqli_connect_error());
    			}

				return $conexion;
			} catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}
		}

	}