<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use App\Models\StudentSubjectModel;
class StudentSubject extends Migration
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
        'st_id' => [
            'type' => 'INT',
            'constraint' => 11,
            
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
        'bangla' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
        'english' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
        'math' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
        'science' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
        'religion' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
        'social_studies' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
        'computer' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
        'art' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],
       
        ]
    );
    $this->forge->addKey('id',true);
    $this->forge->createTable('studentsubjects');
}

public function down()
{
  $this->forge->dropTable('studentsubjects');
} 

}
