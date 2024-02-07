<?php
    require_once "../models/personaModel.php";

    //validaciones de acciones
    $option= $_REQUEST['op'];
    if($option== "listregistros"){
        echo "mostrar listado de personas";
    }
    if($option== "registro"){
        echo "Registrar persona";
    }
    if($option== "verregistro"){
        echo "Ver a una persona";
    }
    if($option== "actualizar"){
        echo "Actualizar una persona";
    }
    if($option== "eliminar"){
        echo "Eliminar persona";
    }




?>