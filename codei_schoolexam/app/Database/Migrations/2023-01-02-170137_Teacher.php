<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Teacher extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true,
            'auto_increment' => true
        ],
        'teacher_name' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => false,
        ],
        'teacher_details' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
          
        ],
        'teacher_salary' => [
            'type' => 'INT',
            'constraint' => 11,
            'null' => false,
        ],  
        'subject' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false,
        ],
        ]
    );
    $this->forge->addKey('id',true);
    $this->forge->createTable('teachers');
}

public function down()
{
  $this->forge->dropTable('teachers');
} 
}
