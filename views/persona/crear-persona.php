<?php
    require "../template/header.php";
?>    
<main class="container">
    <h1 class= "text-center" >Lista de personas</h1>
        <a href="crear.php" class= "btn btn-success" > Crear Persona</a>
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
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>627142536</td>
                    <td>markotto@gmail.com</td>
                    <td>
                    <a href="" class="btn btn-outline-primary btn-sm" title="Editar registro">
                        <i class="fa-light fa-user-pen"></i>
                    </a>
                    <button class="btn btn-outline-danger btn-sm" title="Eliminar registro">
                        <i class="fa-regular fa-trash"></i>
                    </button>
                    </tr>
                </tbody>
            </table>
</main>
<?php
    require "../template/footer.php";
?>
