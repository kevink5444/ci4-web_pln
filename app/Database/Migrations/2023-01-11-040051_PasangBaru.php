<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PasangBaru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pasangbaru'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'alamat'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'daya' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'golongan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'token_awal' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'idpel' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_pasangbaru');
        $this->forge->createTable('pasangbaru'); 
    }

        //

    public function down()
    {
        $this->forge->dropTable('karyawan');
    }
}
