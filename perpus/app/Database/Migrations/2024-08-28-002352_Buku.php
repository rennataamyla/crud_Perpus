<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'BukuID' => [
                'type' => 'INT',
                'constraint' => '11',
                'usigned'   => 'TRUE',
                'auto_increment'    => 'TRUE',
            ],
            'Judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Tahun_Terbit' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('BukuID', TRUE);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
