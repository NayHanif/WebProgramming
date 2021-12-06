<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        //definisi tabel pegawai
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'namapegawai' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'jabatan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'gaji' => [
                'type'              => 'INT',
                'constraint'        => 8,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pegawai');
    }

    public function down()
    {
        //
    }
}
