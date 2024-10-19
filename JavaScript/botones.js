
ElegirOpcion();

function ElegirOpcion() {
    let opcion = document.getElementById('animal');

    document.getElementById('btnModificar').addEventListener('click', function() {
        let animal = opcion.value;
        //redireccion = `modificarCat/${animal}`; 
    });

    document.getElementById('btnEliminar').addEventListener('click', function() {
        let animal = opcion.value;
        //redireccion = `eliminarCat/${animal}`; 
        window.location.href = `eliminarCat/${animal}`
    });

}


