<?php
    require "../template/header.php";
?>    
<main class="container">
    <h1 class= "text-center" >Lista de personas</h1>
        <a href="crear-persona.php" class= "btn btn-success" ><i class="fa-regular fa-square-plus"></i>  Crear Persona </a>
            <table id="tblPersonas" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody id= "tblBodyPersonas">
                   <!--<tr> 
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>627142536</td>
                    <td>markotto@gmail.com</td>
                    <td>
                    <a href="<?= BASE_URL?>views/persona/editar-persona.php?p=1" class="btn btn-outline-primary btn-sm" title=" Editar registro "><i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <button class="btn btn-outline-danger btn-sm" title=" Eliminar registro " onclick="fntDeletePersona(1)"><i class="fa-regular fa-trash-can"></i>

                    </button>
                    </tr> -->
                </tbody>
            </table>
</main>
<?php
    require "../template/footer.php";
?>
<script src="../template/js/functions-persona.js"></script>
