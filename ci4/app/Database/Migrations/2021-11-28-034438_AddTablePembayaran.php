<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTablePembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'email'          => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'nama_kelas'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'jenis_pembayaran'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'keterangan'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
                'default'        => 'Belum dibayar'
            ]
        ]);
        $this->forge->addKey('email', true);
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
