<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KoleksiPribadi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KoleksiID' => [
                'type'           => 'INT',
                'constraint'     => '11',
                'usigned'        => 'TRUE',
                'auto_increment' => 'TRUE',
            ],
            'UserID' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'BukuID' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
        ]);

        $this->forge->addKey('KoleksiID');
        $this->forge->createTable('KoleksiPribadi', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('KoleksiPribadi');
    }
}
