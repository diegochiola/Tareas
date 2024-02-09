//alert("Hola bebeee");

async function getPersona(){ //funcion asincrona para realizar peticiones
    try{
        let resp = await fetch(base_url + "controllers/persona.php?op=listaregistros");
        json = await resp.json();
        //validacion
        if (json.status){ //si estatus es verdadero...
            let data = json.data;
            //recorrer variable
            data.foreach((item)=>{
                let newtr = dociment.createElement("tr");
                newtr.id= "row_"+ item.idpersona; //agregamos el id
                newtr.innerHTML = ` <tr>
                                    <th scope="row">${item.idpersona}</th>
                                    <td>${item.nombre}</td>
                                    <td>${item.apellido}</td>
                                    <td>${item.telefono}</td>
                                    <td>${item.email}</td>
                                    <td>{item.options}</td>`;
                document.querySelector("#tblBodyPersonas").appendChild(newtr);
                //aqui arriva se coloca el id, el contenido y al elemento de la tabla se le coloca el tr
            });
        }
        console.log(json);
    }catch(err){
        console.log("Ocurrió un ERROR: "+err);
    }
}
getPersona();