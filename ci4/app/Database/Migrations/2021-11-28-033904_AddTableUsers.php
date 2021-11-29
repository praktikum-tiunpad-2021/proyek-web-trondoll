<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTableUsers extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'email'          => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'password'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
                'null'           => true,
            ],
            'no_telp'         => [
                'type'           => 'int',
                'constraint'     => 10,
            ],
            'nama'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'pekerjaan'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'tanggal_lahir'         => [
                'type'           => 'date',
                'null'           => true,
            ]
        ]);
        $this->forge->addKey('email', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
