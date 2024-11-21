<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuarioPersonalizadoMigration extends Migration
{
    public function up()
    {
        $this->forge->addColumn('identidad_autenticacion',[
            'paterno' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'materno' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'celular' => [
                'type'=> 'VARCHAR',
                'constraint'=> 8,
                'null' => true,
            ]
        ]);

        // $this->forge->

    }

    public function down()
    {
        $this->forge->dropColumn('identidad_autenticacion',['paterno','materno','celular']);
    }
}
