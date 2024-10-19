
ElegirOpcion();

function ElegirOpcion() {
    document.addEventListener('DOMContentLoaded', function() {
        let opcion = document.getElementById('opciones');
    
        document.getElementById('btnModificar').addEventListener('click', function() {
            let animal = opcion.value;
            if (animal) {
                window.location.href = `ModificarCategoria/${animal}`;
            } else {
                alert('Por favor, selecciona una categoría.');
            }
        });
    
        document.getElementById('btnEliminar').addEventListener('click', function() {
            let animal = opcion.value;
            if (animal) {
                window.location.href = `EliminarCategoria/${animal}`;
            } else {
                alert('Por favor, selecciona una categoría.');
            }
        });
    });
    
}


