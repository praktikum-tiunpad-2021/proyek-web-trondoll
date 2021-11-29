<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTableMentor extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'id'          => [
                'type'           => 'varchar',
                'constraint'     => 7,
            ],
            'nama'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'no_telp'         => [
                'type'           => 'int',
                'constraint'     => 15,
            ],
            'email'         => [
                'type'           => 'varchar',
                'constraint'     => 50,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mentor');
    }

    public function down()
    {
        $this->forge->dropTable('mentor');
    }
}
