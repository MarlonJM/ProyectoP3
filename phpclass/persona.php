<?php 
/**
* 
*/
class Persona extends Conectar{
	
	function __construct(){
		# code...
	}

	public $resultado = array();

    public function getPersonas() {
        try {

            $sql = 'SELECT p.*, `e`.`descripcion` FROM  `persona` p INNER JOIN `enfasis` e ON `p`.`id_enfasis` = `e`.`id_enfasis`';
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                array_push($this->resultado, $queryData);
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getPersona($Id) {
        try {
            $sql = "SELECT p.*, `e`.`descripcion` FROM  `persona` p INNER JOIN `enfasis` e ON `p`.`id_enfasis` = `e`.`id_enfasis` WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado = $queryData;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
    
    public function getTelefono($Id) {
        try {
            $sql = "SELECT * FROM telefono t WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                array_push($this->resultado, $queryData);
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getEstudios($Id) {
        try {
            $sql = "SELECT * FROM estudios e WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                array_push($this->resultado, $queryData);
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getProyectos($Id) {
        try {
            $sql = "SELECT * FROM proyecto p WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                array_push($this->resultado, $queryData);
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getGaleria($Id) {
        try {
            $sql = "SELECT * FROM galeria g WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                array_push($this->resultado, $queryData);
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }       

    public function getPasatiempos($Id) {
        try {
            $sql = "SELECT * FROM pasatiempo p WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                array_push($this->resultado, $queryData);
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }    

    // public function updatePersona($id,$nombre, $apellido1, $apellido2, $fechaNacimiento)
    // {
    //     if ($id != '' && $nombre != '' && $apellido1 != '' && $apellido2 != '' && $fechaNacimiento != '' ) {
    //         try {
    //             $sql = "UPDATE persona SET `nombre`='" . $nombre ."', `apellido1`='" . $apellido1 ."', `apellido2`='" . $apellido2 ."', `fechaNacimiento` ='".$fechaNacimiento."' WHERE `id`=" . $id ;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    // public function updateEnfasis($id,$descripcion)
    // {
    //     if ($id != '' && $descripcion != '' ) {
    //         try {
    //             $sql = "UPDATE enfasis e SET `descripcion`='" . $descripcion ."' WHERE id_enfasis = ".$id;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    // public function updateTelefono($id,$telefono)
    // {
    //     if ($id != '' && $telefono != '' ) {
    //         try {
    //             $sql = "UPDATE telefono SET `telefono`='" . $telefono ."' WHERE id_telefono = ".$id;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    // public function updateEstudios($id,$descripcion)
    // {
    //     if ($id != '' && $descripcion != '' ) {
    //         try {
    //             $sql = "UPDATE estudios  SET `descripcion`='" . $descripcion ."' WHERE id_estudio = ".$id;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    // public function updateProyecto($id,$descripcion,$nombre,$img)
    // {
    //     if ($id != '' && $descripcion != '' && $nombre != '' && $img != '' ) {
    //         try {
    //             $sql = "UPDATE proyecto SET `descripcion`='" . $descripcion ."',`nombre` ='".$nombre. 
    //             "', `img` ='".$img."'WHERE id_proyecto = ".$id;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    // public function updateGaleria($id,$img)
    // {
    //     if ($id != '' && $img != '' ) {
    //         try {
    //             $sql = "UPDATE galeria SET `img`='" . $img ."' WHERE id_galeria = ".$id;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    // public function updatePasatiempo($id,$descripcion)
    // {
    //     if ($id != '' && $descripcion != '' ) {
    //         try {
    //             $sql = "UPDATE pasatiempo SET `descripcion`='" . $descripcion ."', `img`='".$img.
    //             "' WHERE id_pasatiempo = ".$id;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    // public function updateUsuario($id,$usuario,$pass)
    // {
    //     if ($id != '' && $usuario != '' && $pass != '' ) {
    //         try {
    //             $sql = "UPDATE usuario SET `usuario`='" . $usuario ."', `clave`='".$pass.
    //             "' WHERE id_persona = ".$id;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //             exit;
    //         }
    //     }
    // }

    public function InsertarPersona($nombre, $primerapellido,$correo){
        if($nombre != ' ' && $primerapellido != ' '&& $correo != ' '){
            try {
                $sql= "INSERT INTO persona (nombre, apellido1, correo) VALUES ('".$nombre ."','".$primerapellido."','".$correo ."')";
                return $query=mysqli_query($this->conectar(),$sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
        }
    }

    public function InsertarUsuario($usuario, $clave, $id_persona){
        if($usuario != ' ' && $clave != ' ' && $id_persona != ' '){
            try {
                $sql= "INSERT INTO usuario (usuario,clave,id_persona) VALUES ('".$usuario ."','".$clave."','".$id_persona."')";
                return $query=mysqli_query($this->conectar(),$sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
        }
    }



}