<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsersModel;
class Admin extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
 
    function __construct()
    {
        helper(['form', 'url']);
    }
    public function index()
    {
        $model = new UsersModel();
        $data['adminlist'] =$model->findAll();
        return view("admin/admin_list",$data);
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
        $model = new UsersModel();

        return view("student_management/admin_user_entry");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *'name','email','password','created_at','phone','user_img'
     * @return mixed
     */
    public function create()
    {
        $file = $this->request->file('user_img');
        if($file->isValid()){
            $rules = [
                    'name' => 'required|min_length[3]|max_length[30]',
                    'email' =>'required',
                    'phone' => 'required',
                    'password' => 'required',
                    'user_img' =>[
                        'uploaded[user_img]',
                    'mime_in[user_img, image/jpg,image/jpeg,image/png]',
                    'max_size[user_img, 1024]',
                    ]
            ];
            $errors = [
                'name' =>[
                    'Admin name is required',
                'min_length' =>'minimum length 3',
                'max_length' =>'maximum length 30',
                ],
                'phone' =>[
                    'required' => 'Phone number must be enter',
                    'numeric' =>'Number only'
                ],
                'email'=>[
                    'required' =>'Email must be enter',
                ],
                'password'=>[
                    'required' =>'Password must be enter',
                            
                ],
                'user_img' => [
                    'mime_in' => 'Only jpg, png and jpeg are allowed',
                    'max_size' => 'Not more than 1MB',
                ]

            ];
            $validation = $this->validate($rules,$errors);
            if(!$validation){
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());

            }
            else{
                $img =  $this->request->file('user_img');
                $data['name']  = $this->request->getPost('name');
                $data['email']  = $this->request->getPost('email');
                $data['phone']  = $this->request->getPost('phone');
                $data['password']  = $this->request->getPost('password');
                $path = "assests/uploads";
                $img->move($path);
                $namepath = $path . $img->getName();
                $data['user_img'] =$namepath;
                $model - new UsersModel();
                return redirect()->to('admin')->with('msg');
            };

        }
        else{
            $rules2 = [
                'name' => 'required|min_length[3]|max_length[30]',
                'email' =>'required',
                'phone' => 'required',
                'password' => 'required',
            ];
            $errors2 = [
                'name' =>[
                    'Admin name is required',
                'min_length' =>'minimum length 3',
                'max_length' =>'maximum length 30',
                ],
                'phone' =>[
                    'required' => 'Phone number must be enter',
                    'numeric' =>'Number only'
                ],
                'email'=>[
                    'required' =>'Email must be enter',
                ],
                'password'=>[
                    'required' =>'Password must be enter',
                            
                ],    
            ];
            $validation2 = $this->validate($rules2, $errors2);
                 if(!$validation2){
                    return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());

                 }
                 else{
                    $data['name']  = $this->request->getPost('name');
                $data['email']  = $this->request->getPost('email');
                $data['phone']  = $this->request->getPost('phone');
                $data['password']  = $this->request->getPost('password');
                $data['product_image'] =  'assests/uploads/idb logo_1';
                
                $model =  new UsersModel();
                $model->save($data);
                return redirect()->to('admin')->with('msg', 'Inserted Successfully');
                 }
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new UsersModel();
        $model->delete($id);
        return redirect()->to("Admin");
    }
}
