$(function() {
    'use strict';

    $('#contenido').summernote({
        height: 300
    })




    $('#formulario-publicacion').submit(function(evento){
        evento.preventDefault();

        let action = $(this).attr('action');

        // let datos = $("#formulario-publicacion").serializeArray();

        let datos = new FormData(this);

        $.ajax(
            {
                url:action,
                type: 'POST',
                data: datos,
                contentType: false,
                processData: false,
                cache: false

            }
        ).done(function(respuesta){

            console.log(respuesta);
            

        })
        .fail(function(respuesta){
            alert('Error al guardar la publicación');

        })

    });


});