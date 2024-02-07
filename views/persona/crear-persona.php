<?php
    require "../template/header.php";
?>    
<main class="container">
    <h1 class= "text-center"> Crear persona </h1>
        <a href="<?=BASE_URL?>/views/persona"> Lista Personas </a>
         <br>
         </br>  
         <form id="FrmRestro">
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombres" required>
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="txtApellido" name="txtApelldio" placeholder="Apellidos" required>
            </div>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Numero de Telefono" required>
            </div>
            <div class="mb-3">
                <label for="txtEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Correo Electronico" required>
            </div>
          
            <button type="submit" class="btn btn-info"><i class="fa-regular fa-floppy-disk"></i> Guardar</button>
</form>
         
</main>
<?php
    require "../template/footer.php";
?>