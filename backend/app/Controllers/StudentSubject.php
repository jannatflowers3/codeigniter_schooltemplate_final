<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentSubjectModel;
class StudentSubject extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new StudentSubjectModel();
        $data['studentsubjects'] = $model->findAll();
        return view('student_management/student_subjectList',$data);

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
        $model = new CoursesModel();
        $data["st_category"] = $model->orderBy('class','DESC')->findAll();
        // $model = new StudentSubjectModel()
        // $data['st_id'] = $this->request->getPost("st_id");
        // $data['class'] = $this->request->getPost("class");
        // $data['shift'] = $this->request->getPost("shift");
        // $data['section'] = $this->request->getPost("section");
        // $data['bangla'] = $this->request->getPost("bangla");
        // $data['english'] = $this->request->getPost("english");
        // $data['math'] = $this->request->getPost("math");
    // }
    // 'st_id','class','shift','section',
    // 'bangla','english','math','science','religion','social_studies','computer','art'
    }
    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
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
        //
    }
}
