let configuracionesIniciales = {

    /**
     * Inicializador del script
     */
    init: function() {
        $('.sidenav').sidenav(); // Confiugracion de menu para vista mobil
        $('select').formSelect(); // Configuracion listas desplegables formulario
        configuracionesIniciales.autocompletar();
    },

    /**
     * Esta funcion retorna el path que llama a mi controlador de Symfony que retorna los Json de busqueda
     */
    obtenerPathRaiz: function() {
        return url_search;
    },

    /**
     * Muestra los datos en la lista despleagable del autcomplete
     */
    mostrarDatos: function(tareas) {
        let titulos = {};
        for(let tarea of tareas) {
            titulos[tarea.titulo] = null;
        }
        $('input.autocomplete').autocomplete({
            data: titulos,
            limit: 5,
            onAutocomplete: function(val) {
                var tarea = tareas.find(o => o.titulo == val);
                var url = tarea.url;
                location.href = url
            }
        });  
        $('.autocomplete').autocomplete('open'); 
    },

    /**
     * Realiza la peticion ajax al controlador para obtener la respuesa
     */
    realizarPeticion: function(value) {
        $.ajax({
            type: "GET",
            url: configuracionesIniciales.obtenerPathRaiz(),
            data: {
                'consulta' : value
            },
            dataType: "text",
            success: function(response){
                var tareas = JSON.parse(response).entities;
                configuracionesIniciales.mostrarDatos(tareas);
                
                
            }
        });
    },

    /**
     * Funcion principal de autcompletado, en ella se configura el evento de tecla
     * y validaciones para realizar busuqedas.
     */
    autocompletar: function() {
        let searchRequest = null;
        let minlength = 3; // Despues de 3 caracteres, empezamos a buscar
        $("#autocomplete-input").keyup(function() {
            let value = $(this).val();
            if (value.length >= minlength ) {
                if (searchRequest != null) {
                    searchRequest.abort();
                }
                configuracionesIniciales.realizarPeticion(value);
                
            }
        });
    }
}

$( document ).ready( configuracionesIniciales.init );