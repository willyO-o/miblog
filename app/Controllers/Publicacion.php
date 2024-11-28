<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoriaModel;
use App\Models\PublicacionModel;
use CodeIgniter\HTTP\RequestInterface;

class Publicacion extends BaseController
{

    protected  CategoriaModel $categoriaModel;
    protected PublicacionModel $publicacionModel;

    public function __construct()
    {
        $this->categoriaModel = new CategoriaModel();
        $this->publicacionModel = new PublicacionModel();
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {

        if ($this->request->isAJAX()) {

            $listadoPublicaciones = $this->publicacionModel->listarPublicaciones();


            return $this->response->setJSON($listadoPublicaciones);
        }



        return view('admin/publicacion/index');
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        $data = [
            'categorias' => $this->categoriaModel->where('estado_categoria', 'ACTIVO')->findAll()
        ];

        return view('admin/publicacion/nuevo', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {


        $reglasValidacion = $this->publicacionModel->getValidationRules();
        $mensajesValidacion = $this->publicacionModel->getValidationMessages();

        $resultadoValidacion =  $this->validate($reglasValidacion, $mensajesValidacion);

        if ($resultadoValidacion == false) {

            $respuesta = [
                'mensaje' => "Campos Incorrectos",
                'errores' => $this->validator->getErrors()
            ];

            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON($respuesta);
        }


        $datos = $this->request->getPost();

        $imagen =  $this->request->getFile('imagen');

        $datos['imagen'] = $imagen->getRandomName();


        $directorioDestino = ROOTPATH . 'public/subidas/imagenes';


        if (is_dir($directorioDestino) == false) {
            mkdir($directorioDestino, 0777, true);
        }

        $imagen->move($directorioDestino, $datos['imagen']);

        //agregar id del autor o usuario
        $datos['id_autor'] = auth()->id();

        if ($datos['estado_publicacion'] == 'PUBLICADO') {
            $datos['publicado_el'] = date('Y-m-d H:i:s', now());
        }


        $idPublicacion = $this->publicacionModel->insert($datos);

        if (is_numeric($idPublicacion) == false) {
            $respuesta = [
                'mensaje' => "Error al Registrar la Publicación, Verifique e intente nuevamente.",
            ];

            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON($respuesta);
        }


        $respuesta = [
            'mensaje' => "Publicación Registrada Correctamente.",
            'id_publicacion' => $idPublicacion
        ];

        return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)->setJSON($respuesta);
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $publicacion = $this->publicacionModel->find($id);

        // dd($publicacion);

        if (empty($publicacion)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Registro no Enctrado");
        }


        $data = [
            'categorias' => $this->categoriaModel->where('estado_categoria', 'ACTIVO')->findAll(),
            'publicacion' => $publicacion
        ];

        return view('admin/publicacion/editar',$data);

    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        echo "update: ".$id;
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $publicacion = $this->publicacionModel->find($id);

        if (empty($publicacion)) {
            $respuesta = [
                'mensaje' => "Publicación no encontrada."
            ];

            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON($respuesta);
        }


        $this->publicacionModel->delete($id);

        $respuesta = [
            'mensaje' => $publicacion->titulo . " Eliminado Correctamente."
        ];

        return $this->response->setJSON($respuesta);
    }
}
