import React, { useEffect, useState } from 'react'
import axios from 'axios';
import {Container,Row,Col} from 'reactstrap'
function StudentLlist() {
    const [students,setStudents] = useState([]);
     
     useEffect(()=>{
        getStudents();
     },[]);
     const getStudents = async()=>{
        const students = await axios.get("http://localhost:8080/Frontend");
        setStudents(students.data);
     }
     console.log(students);
  return (
    <>
    

    <Container fluid>
      <Row className='justify-content-center'>
        <Col lg={10}>
            <h1 className='mt-5 mb-5 text-center'>All Student List</h1>
        <table id="example1" class="table table-bordered border-danger">
                  <thead>
                  <tr class="table-info">
                    <th>student Name</th>
                        <th>student email</th>
                        <th>student phone</th>
                        <th>student image</th>       
                  </tr>
                  </thead>                 
                  <tbody>
                    { students.map((student,index) => (
                        <tr key={student.id} class="table-danger">
                         
                            <td>{student.st_name}</td>
                            <td>{student.st_email}</td>
                            <td>{student.st_phone}</td>
                          
                            <td>
                                {/* {product.product_img} */}
                             <img  src={`http://localhost:8080/${student.st_img}`} width ={'50px'} alt="sd" />
                            </td>
                           
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

export default StudentLlist