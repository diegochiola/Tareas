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
            $arrayRegistros= array();
            $rs= $this->conexion->query("SELECT * FROM tabla_personas");
            while($obj = $rs->fetch_object()){
                array_push($arrayRegistros, $obj);
            }
            return $arrayRegistros;
        }
    
    }
   
?>