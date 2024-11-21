<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $datos = [
            [
                'categoria' => 'Noticias',
                'descripcion_categoria' => 'Noticias de actualidad',
                'estado_categoria' => 'ACTIVO',
                'creado_el' => date('Y-m-d H:i:s', now())
            ],
            [
                'categoria' => 'Deportes',
                'descripcion_categoria' => 'Deportes de actualidad',
                'estado_categoria' => 'ACTIVO',
                'creado_el' => date('Y-m-d H:i:s', now())
            ],
            [
                'categoria' => 'Frandula',
                'descripcion_categoria' => 'Frandula de actualidad',
                'estado_categoria' => 'ACTIVO',
                'creado_el' => date('Y-m-d H:i:s', now())
            ],
            [
                'categoria' => 'Educación',
                'descripcion_categoria' => 'Educación de actualidad',
                'estado_categoria' => 'ACTIVO',
                'creado_el' => date('Y-m-d H:i:s', now())
            ],
            [
                'categoria' => 'Sociales',
                'descripcion_categoria' => 'Sociales de actualidad',
                'estado_categoria' => 'ACTIVO',
                'creado_el' => date('Y-m-d H:i:s', now())
            ],
        ];

        $this->db->table('categoria')->insertBatch($datos);
    }
}
