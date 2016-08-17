<?php

    class Sesion extends Conectar
    {

        public $resultado = array();

        public function verificarUserPass($user, $pass) {
            try {
                $sql = "SELECT * FROM usuario WHERE usuario = '" . $user . "' AND clave = '" . $pass ."'";
                $query = mysqli_query(self::conectar(),$sql);

                while ($queryData = mysqli_fetch_assoc($query)) {
                    $this->resultado = $queryData;
                }
                return $this->resultado;
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }

        public function validarLogin($user, $pass) {

            $result = $this->verificarUserPass($user,$pass);

            if(!empty($result)){

                session_start();

                $_SESSION['id_persona'] = $result['id_persona'];
                $_SESSION['usuario'] = $result['usuario'];
                $_SESSION['clave'] = $result['clave'];

                //agregar url de la pagina editar portafolio
                //header("location: ver-session-prueba.php?right");
                header("location: portafolioEdit.php?id=" .$_SESSION['id_persona']);

            }else{
                header("Location: login.php?error=datos-incorrectos");
            }

        }

        public function cierreSesion() {
            session_start();
            session_destroy();
            header("Location: index.php");
        }

    }