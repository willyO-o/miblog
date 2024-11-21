<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PublicacionModel;

class Publico extends BaseController
{
    protected PublicacionModel  $publicacionModel;

    public function __construct()
    {
        $this->publicacionModel = new PublicacionModel();
    }

    public function index()
    {

        $listado = $this->publicacionModel->orderBy('publicado_el','DESC')->findAll(10);

        $datos = [
            'publicaciones' => $listado,

        ];

        return view('blog/inicio', $datos);
    }

    public function sobreMi()
    {
        return view('blog/sobreMi');
    }

    public function contacto()
    {
        return view('blog/contacto');
    }


    public function publicacion($idPublicacion)
    {

        $publicacion = $this->publicacionModel->find($idPublicacion);

        if(empty($publicacion)){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Registro no Encontrado');
        }


        $datos = [
            'publicacion' => $publicacion,
        ];

        return view('blog/publicacion', $datos);
        
    }
}
