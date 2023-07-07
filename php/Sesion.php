<?php
    class Sesion {

        function __construct() {
            session_start();
        }

        public function setIDU($ID,$valor) {
            $_SESSION[$ID] = $valor;
        }

        public function getIDU($ID) {
            $valor = false;
            if (isset($_SESSION[$ID]))
                $valor = $_SESSION[$ID];
            return $valor;
        }

        public function borrar($ID) {
        unset($_SESSION[$ID]);
        }
    }
?>