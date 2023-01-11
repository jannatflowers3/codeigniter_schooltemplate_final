<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courses extends Migration
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
        'class' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => false,
        ],
        'shift' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
          
        ],
        'section' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false,
        ],  
        'admission_fee' => [
            'type' => 'INT',
            'constraint' =>50,
            'null' => false,
        ],
      
        ]
    );
    $this->forge->addKey('id',true);
    $this->forge->createTable('courses');
}

public function down()
{
  $this->forge->dropTable('courses');
} 

}

