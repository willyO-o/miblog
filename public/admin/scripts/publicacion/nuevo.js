$(function () {
    'use strict';





    $('#contenido').summernote({
        height: 300
    })




    $('#formulario-publicacion').submit(function (evento) {
        evento.preventDefault();

        let action = $(this).attr('action');

        // let datos = $("#formulario-publicacion").serializeArray();

        let datos = new FormData(this);

        $.ajax(
            {
                url: action,
                type: 'POST',
                data: datos,
                contentType: false,
                processData: false,
                cache: false

            }
        ).done(function (respuesta) {
            // 200  201


            const mensaje = respuesta.mensaje;

            
            Swal.fire({
                icon: "success",
                title: "Registro Exitoso",
                text: mensaje,
            });

            setTimeout(() => {
                window.location.href = window.location.origin + '/admin/publicacion'
            }, 2000);


        })
            .fail(function (respuesta) {
                // 400 500
                

                const mensaje = respuesta.responseJSON.mensaje;

                Swal.fire({
                    icon: "error",
                    title: mensaje,
                    text: "Something went wrong!",
                });



            })

    });


    $('#formulario-editar-publicacion').submit(function (evento) {
        evento.preventDefault();


        let action = $(this).attr('action');

        let datos = new FormData(this);

        $.ajax(
            {
                url: action,
                type: 'POST',
                data: datos,
                contentType: false,
                processData: false,
                cache: false

            }
        ).done(function (respuesta) {
            // 200  201
            console.log(respuesta);

            const mensaje = respuesta.mensaje;

            
            Swal.fire({
                icon: "success",
                title: "Actualización Exitosa",
                text: mensaje,
            });

            setTimeout(() => {
                window.location.href = window.location.origin + '/admin/publicacion'
            }, 2000);



        })
            .fail(function (respuesta) {
                // 400 500
                console.log(respuesta);

                const mensaje = respuesta.responseJSON.mensaje;

                Swal.fire({
                    icon: "error",
                    title: mensaje,
                    text: "Something went wrong!",
                });



            })

    });



});