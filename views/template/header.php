<?php
    require_once "../../config/config.php";
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="<?= BASE_URL ?>assets/css/bootstrap.min.css"> <! -- importar archivo de estilos -->
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <title>Listado de Personas</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL ?>">Sistema de gestion de Tareas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Inicio</a>
            </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Persona
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ver Persona</a></li>
            <li><a class="dropdown-item" href="#">Registrar Persona</a></li>
            <li><a class="dropdown-item" href="#">Eliminar Persona</a></li>
          </ul>
        </li> 
        </ul>
        <form  id= "frmSearch" class= "d-flex">
            <input class= "form-control me-2" type="search" id= "txtBuscar" name= "txtBuscar" placeholder= "Buscar" >
                <burron class = "btn btn-outline-success" type="submit"> Buscar </burron>
        </form>
        </div>
    </div>
    </nav>
    </header>