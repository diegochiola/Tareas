
//crear funcion
function fntDeletePersona(id){
    //alerta descargada de https://sweetalert.js.org/guides/
swal({
    title: "Realmente quiere eliminar el Registro?",
    text: "",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Registro Eliminado", {
        icon: "success",
      });
    } else {
      swal("Se canceló la acción");
    }
  });
}

