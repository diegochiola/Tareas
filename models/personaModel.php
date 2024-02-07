<?php
    require_once"../lib/conexion.php"; //llamamos al archivo conexion
    class PersonaModel{
        private $conexion;
        function __construct(){
            //instanciamos la clase
            $this->conexion= new Conexion();
            $this->conexion= $this->conexion->conect();
            //
        }
        public function getPersonas(){ //listado de personas
            $rs= $this->conexion->query("CAL select_personas()");
            $rs = $rs->fetch_fields();
            return $rs;
        }
    
    }
   
?>