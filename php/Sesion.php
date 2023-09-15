<?php
    class Sesion {

        function __construct() {
            session_start();
        }

        public function setCorreo($numero,$valor) {
            $_SESSION[$numero] = $valor;
        }

        public function getCorreo() {
            $valor = false;
            for($i=0; COUNT($_SESSION);$i++){
                if (isset($_SESSION[$i]))
                    $valor = $_SESSION[$i];
                }
            return $valor;
        }

        public function setDireccion($dir,$valor) {
            $_SESSION[$dir] = $valor;
        }

        public function getDireccion($dir) {
            $valor = false;
            if (isset($_SESSION[$dir]))
                $valor = $_SESSION[$dir];
            return $valor;
        }

        public function setTelefono($tel,$valor) {
            $_SESSION[$tel] = $valor;
        }

        public function getTelefono($tel) {
            $valor = false;
            if (isset($_SESSION[$tel]))
                $valor = $_SESSION[$tel];
            return $valor;
        }

        public function setRol($rol,$valor){
            $_SESSION[$rol] = $valor;
        }

        public function getRol($rol){
            $valor = false;
            if (isset($_SESSION[$rol]))
                $valor = $_SESSION[$rol];
            return $valor;
        }

        public function setProducto($IDP,$cantidad) {
            $_SESSION[$IDP] = $cantidad;
        }

        public function getProducto($IDP) {
            $valor = false;
            if (isset($_SESSION[$IDP]))
                $valor = $IDP;
            return $valor;
        }

        public function borrarProducto($IDP) {
            unset($_SESSION[$IDP]);
            }

        public function borrar($ID) {
        unset($_SESSION[$ID]);
        }
    }
?>