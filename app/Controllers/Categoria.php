<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use CodeIgniter\HTTP\ResponseInterface;


class Categoria extends BaseController
{

    protected CategoriaModel $categoriaModel;

    public function __construct()
    {
        $this->categoriaModel = new CategoriaModel();
    }


    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {

        // $listadoCategorias = $this->categoriaModel->findAll();

        // dd($listadoCategorias);
        if ($this->request->isAJAX()) {

            $listadoCategorias = $this->categoriaModel->findAll();

            return $this->response->setJSON($listadoCategorias);
        }


        return view('admin/categoria/index');
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
        return view('admin/categoria/nuevo');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        // $datos = $this->request->getPost();

        // return var_dump($datos);




        $reglasValidacion = $this->categoriaModel->getValidationRules();
        $mensajesValidacion =  $this->categoriaModel->getValidationMessages();

        $resultadoValidacion = $this->validate($reglasValidacion, $mensajesValidacion);

        if ($resultadoValidacion == false) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON([
                    'mensaje' => "Error de validacion",
                    'errores' => $this->validator->getErrors()
                ]);
        }

        $datos = $this->request->getPost();

        $idCategoria =  $this->categoriaModel->insert($datos);

        if (is_numeric($idCategoria) == false) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                ->setJSON([
                    'mensaje' => "Ocurrion un Error al insertar la categoria, verifique en intente nuevamente",
                ]);
        }


        return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)
            ->setJSON([
                'mensaje' => "Categoria creada correctamente",
            ]);
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
        $categoria =  $this->categoriaModel->find(($id));

        if (empty($categoria)) {
           throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Categoria no encontrada");
        }

        $data = [
            'categoria' => $categoria
        ];

        return view('admin/categoria/editar',$data);
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

        $categoria =  $this->categoriaModel->find(($id));

        if (empty($categoria)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                ->setJSON([
                    'mensaje' => "Categoria no encontrada",
                ]);
        }

        
        $reglasValidacion = $this->categoriaModel->getValidationRules();
        $mensajesValidacion =  $this->categoriaModel->getValidationMessages();

        $resultadoValidacion = $this->validate($reglasValidacion, $mensajesValidacion);

        if ($resultadoValidacion == false) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON([
                    'mensaje' => "Error de validacion",
                    'errores' => $this->validator->getErrors()
                ]);
        }

        $datos = $this->request->getPost();

        $resultado =  $this->categoriaModel->update($id,$datos);

        if ($resultado == false) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                ->setJSON([
                    'mensaje' => "Ocurrion un Error al insertar la categoria, verifique en intente nuevamente",
                ]);
        }


        return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)
            ->setJSON([
                'mensaje' => "Categoria creada correctamente",
            ]);
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
        $categoria =  $this->categoriaModel->find($id);

        if (empty($categoria)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                ->setJSON([
                    'mensaje' => "Categoria no encontrada",
                ]);
        }

        $this->categoriaModel->delete($id);

        return $this->response->setJSON([
            'mensaje' => "Categoria eliminada correctamente",
        ]);
    }
}
