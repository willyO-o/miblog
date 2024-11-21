<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PublicacionMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_publicacion' =>[
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' =>true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'contenido' => [
                'type' => 'TEXT',
            ],
            'imagen' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true,
            ],
            'id_autor' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_categoria' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'creado_el' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'publicado_el' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'modificado_el' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'estado_publicacion' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id_publicacion',true);

        $this->forge->addForeignKey('id_autor','usuario','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_categoria','categoria','id_categoria','CASCADE','CASCADE');

        $this->forge->createTable('publicacion');
    }

    public function down()
    {
        $this->forge->dropTable('publicacion');
    }
}
