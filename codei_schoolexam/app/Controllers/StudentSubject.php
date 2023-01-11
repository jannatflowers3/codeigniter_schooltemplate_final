<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentSubjectModel;
use App\Models\CoursesModel;

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
        $data["st_courses"] = $model->orderBy('class','DESC')->findAll();

    return view('student_management/student_subject_add',$data);
    }
    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new StudentSubjectModel();
        // $data['course_id'] = $this->request->getPost("course_id");
        $data['class'] = $this->request->getPost("class");
        $data['shift'] = $this->request->getPost("shift");
        $data['section'] = $this->request->getPost("section");
        $data['bangla'] = $this->request->getPost("bangla");
        $data['english'] = $this->request->getPost("english");
        $data['math'] = $this->request->getPost("math");
        // $data['science'] = $this->request->getPost("science");
        // $data['religion'] = $this->request->getPost("religion");
        // $data['social_studies'] = $this->request->getPost("social_studies");
        // $data['computer'] = $this->request->getPost("computer");
        // $data['art'] = $this->request->getPost("art");
        $model->save($data);
         return redirect()->to("StudentSubject");
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
