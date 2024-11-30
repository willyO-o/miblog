
$(function () {

    'use strict';


    let tablaCategorias = $("#tabla-categoria").DataTable({
        "processing": true,
        "lengthChange": false,
        "language": {
            "url": "/assets/idioma/Spanish.json"
        },
        "ajax": {
            "url": "/admin/categoria",
            'type': 'GET',
            "dataSrc": "",
        },
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            { data: 'categoria' },
            { data: 'descripcion_categoria' },
            {
                data: 'estado_categoria',
                render: function (data) {
                    if (data == "ACTIVO") {
                        return `<span class="text-success">${data}</span>`
                    } else {
                        return `<span class="text-danger">${data}</span>`
                    }
                }
            },
            {
                data: 'id_categoria',
                render: function (id_categoria) {

                    return /*html*/`
                <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-warning" href="${window.location.origin}/admin/categoria/${id_categoria}/edit">Editar categoria</a>
                        <a class="dropdown-item text-danger boton-eliminar-categoria" href="#" data-id="${id_categoria}">Eliminar categoria</a>
                    </div>
                </div>`;
                }
            },

        ]

    })
        .on('click', '.boton-eliminar-categoria', function (evento) {
            evento.preventDefault();

            const confirmacion = confirm('¿Estas seguro de eliminar la categoria?');

            if (confirmacion == false) {
                return;
            }

            const idCategoria = $(this).data('id');

            $.ajax({
                url: window.location.origin + "/admin/categoria/" + idCategoria,
                type: "DELETE",
                // dataType: "json",
            })
                .done(function (respuesta) {
                    console.log(respuesta);


                    const mensaje = respuesta.mensaje;


                    Swal.fire({
                        icon: "success",
                        title: "Exito!!",
                        text: mensaje,
                    });

                    tablaCategorias.ajax.reload();
                })
                .fail(function (error) {
                    const mensaje = error.responseJSON.mensaje;

                    Swal.fire({
                        icon: "error",
                        title: mensaje,
                        text: "Something went wrong!",
                    });

                })


        })


})