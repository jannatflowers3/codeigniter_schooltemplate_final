<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Courses extends Seeder
{
    public function run(){
    $datas = [
       
        [
            'class' => 'one',
            'shift'    => 'Morning',
            'section' => 'A',
            'admission_fee' => 500,    
        ],
        [
            'class' => 'one',
            'shift'    => 'Day',
            'section' => 'B',
            'admission_fee' =>700,    
        ],
        [
            'class' => 'Two',
            'shift'    => 'Morning',
            'section' => 'A',
            'admission_fee' => 800,    
        ],
        [
            'class' => 'Two',
            'shift'    => 'Day',
            'section' => 'B',
            'admission_fee' => 1000,    
        ],
        [
            'class' => 'Three',
            'shift'    => 'Morning',
            'section' => 'A',
            'admission_fee' => '1200',    
        ],
        [
            'class' => 'Three',
            'shift'    => 'Day',
            'section' => 'B',
            'admission_fee' =>1400,    
        ],
        [
            'class' => 'Four',
            'shift'    => 'Morning',
            'section' => 'A',
            'admission_fee' => 1800,    
        ],
        [
            'class' => 'Five',
            'shift'    => 'Morning',
            'section' => 'A',
            'admission_fee' =>2000,    
        ],
    ];

    foreach ($datas as $data){
        $this->db->table('courses')->insert($data);
        }
        
    }
}