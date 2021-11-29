<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTableKelas extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'nama'          => [
                'type'           => 'varchar',
                'constraint'     => 50,
            ],
            'harga'         => [
                'type'           => 'varchar',
                'constraint'     => 50,
            ],
            'gambar'         => [
                'type'           => 'varchar',
                'constraint'     => 50,
            ],
            'jumlah_materi'         => [
                'type'           => 'int',
                'constraint'     => 11,
            ]
        ]);
        $this->forge->addKey('nama', true);
        $this->forge->createTable('kelas');
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}
