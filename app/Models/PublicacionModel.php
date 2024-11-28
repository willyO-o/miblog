<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicacionModel extends Model
{
    protected $table            = 'publicacion';
    protected $primaryKey       = 'id_publicacion';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'titulo',
        'contenido',
        'id_autor',
        'imagen',
        'id_categoria',
        'estado_publicacion',
        'publicado_el',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'creado_el';
    protected $updatedField  = 'modificado_el';
    protected $deletedField  = '';

    // Validation
    protected $validationRules      = [
        'titulo' => 'required|min_length[5]|max_length[250]',
        'contenido' => 'required|min_length[5]',
        'imagen'=> 'uploaded[imagen]|max_size[imagen,1024]|is_image[imagen]',
        'id_categoria' => 'required|field_exists[categoria.id_categoria]',
        'estado_publicacion' => 'required|in_list[PENDIENTE,PUBLICADO,BORRADOR]',
    ];

    protected $validationMessages   = [
        'id_categoria' =>[
            'required' =>'Por favor seleccione una categoria.'
        ]
    ];
    protected $skipValidation       = true;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];




    public function listarPublicaciones()
    {
        $this->select("publicacion.*, username, categoria")
            ->join('usuario u', 'u.id = publicacion.id_autor')
            ->join('categoria c', 'c.id_categoria = publicacion.id_categoria')
            ->orderBy('publicacion.creado_el', 'DESC');

        return $this->findAll();
    }
}
