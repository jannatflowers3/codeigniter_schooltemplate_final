<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Teacher extends Seeder
{
    public function run(){
    $datas = [
       
        [
            'teacher_name' => 'Jannat',
            'teacher_details'    => 'MSS,BSS in Economics',
            'teacher_salary' => '25000',
            'subject' => 'Economics',    
        ],
        [
            'teacher_name' => 'Rahima',
            'teacher_details'    => 'MSS,BSS in History',
            'teacher_salary' => '22000',
            'subject' => 'History',    
        ],
        [
            'teacher_name' => 'Nahar',
            'teacher_details'    => 'BSS in Accounting',
            'teacher_salary' => '15000',
            'subject' => 'Accounting',    
        ],
        [
            'teacher_name' => 'Aklima',
            'teacher_details'    => 'BBA in Accounting',
            'teacher_salary' => '20000',
            'subject' => 'Accounting',    
        ],
    ];
    foreach ($datas as $data){
        $this->db->table('teachers')->insert($data);
        }
    }
}