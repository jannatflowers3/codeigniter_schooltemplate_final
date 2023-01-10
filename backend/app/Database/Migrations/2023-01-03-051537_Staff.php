<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use App\Models\StaffModel;
class Staff extends Migration
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
        'staff_name' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => false,
        ],
        'staff_address' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => false,
        ],
        'staff_salary' => [
            'type' => 'INT',
            'constraint' => 11,
            'null' => false,
        ],  
        'staff_phone' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false,
        ],
        ]
    );
    $this->forge->addKey('id',true);
    $this->forge->createTable('staffs');
}

public function down()
{
  $this->forge->dropTable('staffs');
} 
}