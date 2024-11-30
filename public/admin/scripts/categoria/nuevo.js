$(function () {
    'use strict';



    $('#formulario-categoria').submit(function (evento) {
        evento.preventDefault();

        let datos = $(this).serializeArray();

        let action = $(this).attr('action');


        $.post(action, datos)
            .done(function (respuesta) {
                // status code 200 201 ...


                const mensaje = respuesta.mensaje;

                Swal.fire({
                    icon: "success",
                    title: "Registro Exitoso",
                    text: mensaje,
                });

                setTimeout(() => {
                    window.location.href = window.location.origin + '/admin/categoria'
                }, 2000);




            })
            .fail(function (error) {
                //status code 400 401 500 ...

                const mensaje = respuesta.responseJSON.mensaje;

                Swal.fire({
                    icon: "error",
                    title: mensaje,
                    text: "Something went wrong!",
                });
            });


    })


    $('#formulario-editar-categoria').submit(function (evento) {
        evento.preventDefault();

        let datos = $(this).serializeArray();

        let action = $(this).attr('action');


        $.post(action, datos)
            .done(function (respuesta) {

                const mensaje = respuesta.mensaje;

                Swal.fire({
                    icon: "success",
                    title: "Actualizacion Exitosa",
                    text: mensaje,
                });

                setTimeout(() => {
                    window.location.href = window.location.origin + '/admin/categoria'
                }, 2000);




            })
            .fail(function (error) {
                //status code 400 401 500 ...

                const mensaje = respuesta.responseJSON.mensaje;

                Swal.fire({
                    icon: "error",
                    title: mensaje,
                    text: "Something went wrong!",
                });
            });


    })


})