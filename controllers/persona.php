<?php
    require_once "../models/personaModel.php";

    // Validaciones de acciones
    $option = $_REQUEST['op'];
    $objetoPersona = new PersonaModel();
    if($option == "listaregistros"){
        $arrayResponse = array('status'=>false, 'data'=>"");
        $arrayPersona = $objetoPersona->getPersonas();
        if(!empty($arrayPersona)){
            for($i=0; $i<count($arrayPersona); $i++){
                $idpersona= $arrayPersona[$i]->idpersona;
                $options= ' <a href="'.BASE_URL.'views/persona/editar-persona.php?p='.$idpersona.'" class="btn btn-outline-primary btn-sm" title=" Editar registro "><i class="fa-regular fa-pen-to-square"></i></a>
                <button class="btn btn-outline-danger btn-sm" title=" Eliminar registro " onclick="fntDeletePersona('.$idpersona.')"><i class="fa-regular fa-trash-can"></i></button>';
                $arrayPersona[$i]->options = $options;
            }
            $arrayResponse['status']= true;
            $arrayResponse['data']= $arrayPersona;
        }
        echo json_encode($arrayResponse); //recopila la info en formato json
        die();
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
    die();

?>