<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table            = 'categoria';
    protected $primaryKey       = 'id_categoria';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'categoria',
        'descripcion_categoria',
        'estado_categoria',
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
        'categoria' => 'required|min_length[5]|max_length[150]',
        'descripcion_categoria' => 'permit_empty|max_length[2000]',
        'estado_categoria' => 'required|in_list[ACTIVO,INACTIVO]',
    ];
    protected $validationMessages   = [
        'estado_categoria' =>[
            'in_list' => 'El estado de la categoria debe ser ACTIVO o INACTIVO'
        ]
    ];
    protected $skipValidation       = false;
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
}
