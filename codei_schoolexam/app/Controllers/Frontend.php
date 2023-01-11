<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use App\Models\TeacherModel;
use CodeIgniter\API\ResponseTrait;
class Frontend extends BaseController
{
    use ResponseTrait;
    public function index()
    {
      $model = new StudentModel();
       $students = $model->orderBy('st_name','ASC')->findAll();
       return $this->respond($students);
   
    // echo "<pre>";
    // print_r($students);
    // }
    }

    public function teacherlist()
    {
      $model = new TeacherModel();
      $data =$model->findAll();
       return $this->respond($data);
   
    }
}
