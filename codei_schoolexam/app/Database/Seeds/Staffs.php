<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Staffs extends Seeder
{
    public function run(){
    $datas = [
       
        [
            'staff_name' => 'Morzina',
            'staff_address'    => 'Mirpur',
            'staff_salary' => '1500',
            'staff_phone' => '012342554',    
        ],
        [
            'staff_name' => 'Rahima',
            'staff_address'    => 'Dhanmondhi',
            'staff_salary' => '2200',
            'staff_phone' => '01566777',    
        ],
        [
            'staff_name' => 'Kulsom',
            'staff_address'    => 'Jatrabari',
            'staff_salary' => '1700',
            'staff_phone' => '013676777',    
        ],
        [
            'staff_name' => 'Ameena',
            'staff_address'    => 'Badda',
            'staff_salary' => '1800',
            'staff_phone' => '01676676777',    
        ],
    ];
    foreach ($datas as $data){
        $this->db->table('staffs')->insert($data);
        }
    }
}