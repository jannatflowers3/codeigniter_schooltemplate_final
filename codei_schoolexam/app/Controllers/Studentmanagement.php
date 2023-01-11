<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use\App\Models\StudentModel;
use\App\Models\CoursesModel;
use CodeIgniter\API\ResponseTrait;
class Studentmanagement extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    function __construct()
    {
        helper(['form','url']);
    }
    public function index()
    {
        $model = new StudentModel();
        $data["allstudent"] = $model->orderBy('id','DESC')->findAll();
        
        return view("student_management/student_list",$data);
        // echo "yes";
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        // $model =   $model = new StudentModel();
        // $data['stu_entry'] = $model->orderBy('st_name','ASC')->findAll();

         $model = new CoursesModel();
        $data["st_category"] = $model->orderBy('class','DESC')->findAll();
        
        return view("student_management/student_entry",$data);

    }

    // $model = new CoursesModel();
    //     $data["st_category"] = $model->orderBy('class','DESC')->findAll();
        

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'st_name' =>'required|min_length[5]|max_length[20]',
            'st_email' => 'required',
            'st_phone' => 'required|numeric',
            'st_address' => 'required|min_length[10]',
             'st_img' => [
                'uploaded[st_img]',
                'mime_in[st_img,image/jpg,image/jpeg,image/png]',
                'max_size[st_img,1024]',
             ]
             ];
             $errors = [
                'st_name' =>[
                    'required' => 'Student name must be fill',
                    'min_length' => 'Minimum length 5',
                    'max_length' => 'Maximum length 20',
                ],
                'st_email' =>[
                    'required' => "Student email must be fill",
                ],
                'st_phone'=>[
                    'required' => "student phone number must be fill",
                    'numeric' => 'number only'
                ],
                'st_address' =>[
                    'required' => 'student address must be fill',
                    'min_length' => 'Minimum length 5',
                ],
                'st_img'=>[
                    'mime_in' => 'Only jpg, png, jpeg are allowed',
                    'max_size' => 'Maximum size 1025',
                ],

            ];
            $validate = $this->validate([
              'st_name' => 'required|min_length[5]|max_length[20]',
              'st_email' => 'required',
              'st_phone' =>'required|numeric',
              'st_address' =>'required|min_length[10]',             
            ]);
            if(!$validate){
                return redirect()->back()->withInput()->with('errors', 
                $this->validator->getErrors());

            }
            else{
              
                 $img = $this->request->getFile('st_img');
                 $path = "assests/".'uploads/';
                //  $path = "/images/".'uploads/';
                 $img->move($path);
            // $data['st_img'] = $this->request->getPost("st_img");
        $data['st_name'] = $this->request->getPost("st_name");
        $data['st_email'] = $this->request->getPost("st_email");
        $data['st_phone'] = $this->request->getPost("st_phone");
        $data['st_address'] = $this->request->getPost("st_address");
        $data['st_gender'] = $this->request->getPost("st_gender");
        $data['st_birth'] = $this->request->getPost("st_birth");
        $data['st_class'] = $this->request->getPost("st_class");
       
        $namepath = $path . $img->getName();

        $data['st_img'] = $namepath;
      
        $model = new StudentModel();
         $model->save($data);
         return redirect()->to("studentmanagement");
        // return view("student_management/student_entry");
            }
      

    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new StudentModel();
        $data['studentedit'] =$model->find($id);
        return view("student_management/student_edit",$data);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $validate = $this->validate([
          'st_name' =>'required|min_length[5]|max_length[20]',
          'st_email' =>'required',
          'st_phone' => 'required|numeric',
          'st_address' => 'required|min_length[10]'

        ]);
        if(!$validate){
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }
        else{
            $img = $this->request->getFile("st_img");
            $path = "assests/uploads/";
            $namepath = $path . $img->getName();
            $data['st_img']= $namepath;
            $img->move($path);
            // $data['st_img'] = $this->request->getPost("st_img");
            $data['st_name'] = $this->request->getPost("st_name");
            $data['st_email'] = $this->request->getPost("st_email");
            $data['st_phone'] = $this->request->getPost("st_phone");
            $data['st_address'] = $this->request->getPost("st_address");
            $data['st_gender'] = $this->request->getPost("st_gender");
            $data['st_birth'] = $this->request->getPost("st_birth");
            $data['st_class'] = $this->request->getPost("st_class");
            
            $model = new StudentModel();
             $model->update($id,$data);
             return redirect()->to("studentmanagement");
        }

      
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new StudentModel();
       $model->delete($id);
        return redirect()->to("studentmanagement");
    }


    public function products()
  {
    $pager = \Config\Services::pager();
    $model = new StudentModel();

    $data = [
      'products' => $model->paginate(3, 'group1'),
      'pager' => $model->pager,
    ];
    return view('student_management/student_list', $data);
  }
}
