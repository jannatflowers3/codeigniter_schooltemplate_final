import React from 'react'
import axios from 'axios';
import { Container,Row,Col } from 'reactstrap';
import { useEffect,useState } from 'react';
function TeacherList() {
    const[teacher,setTeacher] = useState([]);
    useEffect(()=>{
        getTeacher();

    })
    const getTeacher = async()=>{
        const teacher = await axios.get("http://localhost:8080/teacherlist");
        setTeacher(teacher.data);
    }
  return (
    <>
 <Container fluid>
      <Row className='justify-content-center'>
        <Col lg={10}>
            <h1 className='mt-5 mb-5 text-center'>ALL TEACHER LIST</h1>
        <table id="example1" class="table table-bordered border-danger">
                  <thead>
                  <tr class="table-info">
             
                        <th>Teacher Name </th>
                        <th>Teacher Details </th>
                        <th>Teacher Subject</th>       
                  </tr>
                  </thead>                 
                  <tbody>
                    { teacher.map((teachers,index) => (
                        <tr key={teachers.id} class="table-danger">
                         
                            <td>{teachers.teacher_name}</td>
                            <td>{teachers.teacher_details}</td>
                            <td>{teachers.subject}</td>
                          
                        </tr>
                    )) }
                     
                </tbody>
                </table>
        
        
        </Col>
      </Row>
    </Container>

    </>
  )
}

export default TeacherList