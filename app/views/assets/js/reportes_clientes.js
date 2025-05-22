//Almacenar en una variable 
// All = todo
// querySelectorAll -> Significa selecionar todos los ID que tienen ese BOTON
const btnEditar = document.querySelectorAll("#btnEditar");
const btnEliminar = document.querySelectorAll("#btnEliminar");

//Ahora consulto con un forEach, para saber cuantos botones hay con ese ID
btnEditar.forEach(botonsito => {
    //Luego a todos los botones le hago una accion de escucha
    botonsito.addEventListener('click', function(){
        //  alert("Este boton es de editar")
         $('#modalEditar').modal('show') //Jquery codigo Modal
         const inputDNI = document.getElementById("dni");
         const inputNombre = document.getElementById("nombre");
         const inputApellido= document.getElementById("apellido");
         const inputCorreo = document.getElementById("email");
         inputDNI.value = botonsito.dataset.dni;
         inputNombre.value = botonsito.dataset.name;
         inputApellido.value = botonsito.dataset.lastname;
         inputCorreo.value = botonsito.dataset.correo;
    });
});

//Ahora consulto con un forEach, para saber cuantos botones hay con ese ID
btnEliminar.forEach(botonsito => {
    //Luego a todos los botones le hago una accion de escucha
    botonsito.addEventListener('click', function(){
         $('#modalEliminar').modal('show') //Jquery codigo
         //Almacenamos en una variable llamada INPUTDNI
         const inputDNI = document.getElementById("id_cliente");
         const dni_de_persona = botonsito.dataset.dni;
         //Guardo el dni de la persona en elemento del html de INPUT DNI
         inputDNI.value = dni_de_persona;
        //  alert(dni_de_persona + " ___ " + inputDNI)
    });
});

/// boton de confirmar eliminacion del modal
const btnEliminarConfirmar = document.querySelector("#btnEliminarCliente");
btnEliminarConfirmar.addEventListener('click', function(){
      const inputDNI = document.getElementById("id_cliente").value;
   // ============== INICIO DE AJAX CON JQUERY ======================== //
            $.ajax({
                url: '../controllers/ClienteEliminarController.php',
                type: 'POST',
                data: {dni_c : inputDNI},
                success: function(respuesta){
                    if(respuesta === "yes"){
                        alert("ELIMINACION CORRECTA");
                    }else{
                        alert("ELIMINACION INCORRECTA");
                    }
                }
            })
            window.location.reload(); // CON ESTO SE ACTUALIZA LA PAGINA COMPLETA
        // ============== FINAL DE AJAX CON JQUERY ======================== //
})

//boton de confirmar actualizacion del modal
const btnActualizarConfirmar = document.querySelector("#btnEditarCliente");
btnActualizarConfirmar.addEventListener('click', function(){
    alert("ACTUALIZACION EN PROCESO");
})