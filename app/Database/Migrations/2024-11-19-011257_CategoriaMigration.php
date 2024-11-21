<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoriaMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categoria' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'categoria' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'descripcion_categoria' => [
                'type' => 'TEXT',
                'null'=> true,
            ],
            'estado_categoria' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true
            ],
            'creado_el' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'modificado_el' => [
                'type' => 'DATETIME',
                'null' => true,
            ]

        ]);

        $this->forge->addKey('id_categoria',true);
        $this->forge->createTable('categoria');

    }

    public function down()
    {
        $this->forge->dropTable('categoria');
    }
}
