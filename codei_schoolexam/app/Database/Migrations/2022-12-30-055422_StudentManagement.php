<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StudentManagement extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            
            'st_img' => [
                'type' => 'VARCHAR',
                 'constraint' => 100,
                'null' => true,
            ],
            'st_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
            ],
            'st_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'st_phone' => [
                'type' => 'INT',
                'constraint' => "11",
                'null' => false,
            ],
            'st_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'st_gender' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'st_class' => [
                'type' => 'TINYINT',
                'constraint' => 2,
                'null' =>false,
            ],
            'st_birth' => [
                'type'    => 'TIMESTAMP',
               'null' => true,
            ],
            
            'st_password' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}