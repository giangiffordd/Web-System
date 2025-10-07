<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePuihahaTeas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'img' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('puihaha_teas');
    }

    public function down()
    {
        $this->forge->dropTable('puihaha_teas');
    }
}
