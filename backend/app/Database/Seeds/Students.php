<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Students extends Seeder
{
    public function run()
    {
        $datas = [
            [
            'st_img' => 1,
            'st_name' => 'jannat',
            'st_email'    => 'jannat@gmail.com',
            'st_phone' => '012343',
            'st_address' => 'kajla,dhaka',
            'st_gender' => 'female',
            'st_class' => '5',
            'st_birth' => '1993',
            'st_password' => 'jannat',
            ],
            [
                'st_img' => 2,
                'st_name' => 'sultana',
                'st_email'    => 'sultana@gmail.com',
                'st_phone' => '012354543',
                'st_address' => 'dhaka',
                'st_gender' => 'female',
                'st_class' => '3',
                'st_birth' => '19934',
                'st_password' => 'sultana',
            ],
            [
                'st_img' => 3,
                'st_name' => 'aklima',
                'st_email'    => 'aklima@gmail.com',
                'st_phone' => '013342343',
                'st_address' => 'dhaka',
                'st_gender' => 'female',
                'st_class' => '2',
                'st_birth' => '1993',
                'st_password' => 'aklima',
            ],
            [
                'st_img' => 4,
                'st_name' => 'rahima',
                'st_email'    => 'rahima@gmail.com',
                'st_phone' => '012334343',
                'st_address' => 'kajla,dhaka',
                'st_gender' => 'female',
                'st_class' => '5',
                'st_birth' => '1993',
                'st_password' => 'rahima',
            ],
                [
                    'st_img' => 5,
                    'st_name' => 'nahar',
                    'st_email'    => 'nahar@gmail.com',
                    'st_phone' => '0123344343',
                    'st_address' => 'cumilla',
                    'st_gender' => 'female',
                    'st_class' => '5',
                    'st_birth' => '1993',
                    'st_password' => 'nahar',
                    ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach( $datas as $data){
            $this->db->table('students')->insert($data);
        }
        
    }
}