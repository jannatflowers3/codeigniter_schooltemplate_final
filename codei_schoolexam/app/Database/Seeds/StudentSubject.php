<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSubject extends Seeder
{
    public function run(){
        $datas = [
           
            [
                'st_id' => 1,
                'class' => 'one',
                'shift'    => 'Morning',
                'section' => 'A',
                'bangla' => 'Bangla',    
                'english' => 'english',    
                'math' => 'math',    
                'science' => 'science',    
                'religion' => 'religion',    
                'social_studies' => 'social_studies',     
                'computer' => 'computer',    
                'art' => 'art',    
            ],     
            [
                'st_id' => 2,
                'class' => 'one',
                'shift'    => 'Morning',
                'section' => 'A',
                'bangla' => 'Bangla',    
                'english' => 'english',    
                'math' => 'math',    
                'science' => 'science',    
                'religion' => 'religion',
                'computer' => 'computer',       
            ],
            [
                'st_id' => 2,
                'class' => 'one',
                'shift'    => 'Morning',
                'section' => 'A',
                'bangla' => 'Bangla',    
                'english' => 'english',    
                'math' => 'math',    
                'science' => 'science',    
                'religion' => 'religion',
                'computer' => 'computer',  
                'social_studies' => 'social_studies',       
            ],
            [
                'st_id' => 2,
                'class' => 'one',
                'shift'    => 'Morning',
                'section' => 'A',
                'bangla' => 'Bangla',    
                'english' => 'english',    
                'math' => 'math',    
                'science' => 'science',    
                'religion' => 'religion',
                'computer' => 'computer',  
                'art' => 'art',     
            ],
            
        ];
        foreach( $datas as $data){
            $this->db->table('studentsubjects')->insert($data);
        }
    }

}
