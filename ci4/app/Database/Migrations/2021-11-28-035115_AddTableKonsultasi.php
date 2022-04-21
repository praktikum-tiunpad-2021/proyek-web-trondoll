<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTableKonsultasi extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'id_konsultasi'          => [
                'type'           => 'int',
                'constraint'     => 100,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'perencana_keuangan' => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'email_users'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'jenis'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
                'null'           => true,
            ],
            'tanggal'         => [
                'type'           => 'date',
                'null'           => true,
            ],
            'jam'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
                'null'           => true,
            ],
            'catatan'         => [
                'type'           => 'varchar',
                'constraint'     => 100,
                'null'           => true,
            ]
        ]);
        $this->forge->addKey('id_konsultasi', true);
        $this->forge->addForeignKey('email_users', 'users', 'email');
        $this->forge->createTable('konsultasi');
    }

    public function down()
    {
        $this->forge->dropTable('konsultasi');
    }
}
