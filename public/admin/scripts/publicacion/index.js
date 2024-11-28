$(function(){
    'use strict';



    let tablaPublicaciones = $("#publicaciones-tabla").DataTable({
        "processing": true,
        "lengthChange": false,
        "language": {
            "url": "/assets/idioma/Spanish.json"
        },
        "ajax" : {
            "url": "/admin/publicacion",
            'type': 'GET',
            "dataSrc": "",

        },
        columns:[
            { data: null,
                render:function(data, type,row,meta){
                    return meta.row + 1;
                }
            },
            { data: 'imagen',
                render: function(data){

                    if(data){
                        return `<img src="${window.location.origin}/subidas/imagenes/${data}" >`;
                    }else{
                        return '<small> Sin imagen</small>';
                    }
                    
                }
            },
            { data: 'titulo'},
            { data: "username"},
            { data: "categoria"},
            { data: 'creado_el',
                render: function(data){
                    return moment(data).format('LLL');
                }
            },
            { data: "publicado_el",
                render: function(data){
                    if(data){
                        return moment(data).format('LLL');
                    }else{
                        return '';
                    }
                }
            },
            { data: "estado_publicacion"},
            { data: "id_publicacion",
                render: function(id_publicacion){

                    return /*html*/`
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item text-info" target="_blank" href="${window.location.origin}/posts/${id_publicacion}">Ver Publicación</a>
                            <a class="dropdown-item text-warning" href="${window.location.origin}/admin/publicacion/${id_publicacion}/edit">Editar publicación</a>
                            <a class="dropdown-item text-danger boton-eliminar" href="#" data-id="${id_publicacion}">Eliminar publicación</a>
                        </div>
                    </div>`;
                }
            },
        ]

    })
    .on('click', '.boton-eliminar',function(evento){

        const idPublicacion = $(this).data('id')
        
        
        let confirmar = confirm("Esta seguro de Eliminar el registro : "+idPublicacion);

        if(confirmar != true){
            return;
        }


        $.ajax({
            url: window.location.origin + "/admin/publicacion/"+idPublicacion,
            type: "DELETE",
            // dataType: "json",
        })
        .done(function(respuesta){
            console.log(respuesta);


            const mensaje = respuesta.mensaje;

            
            Swal.fire({
                icon: "success",
                title: "Exito!!",
                text: mensaje,
            });

            tablaPublicaciones.ajax.reload();
        })
        .fail(function(error){
            const mensaje = error.responseJSON.mensaje;

            Swal.fire({
                icon: "error",
                title: mensaje,
                text: "Something went wrong!",
            });

        })


    })




})