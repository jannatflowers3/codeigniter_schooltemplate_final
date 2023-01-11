<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Studentquery extends BaseController
{
    public function index()
    {
        // $db = \Config\Database::connect();
        // $builder = $db->table('students')->select('	st_name ,st_email ,st_class');
        // $builder->where('st_class = 2');
        // $raw = $builder->get()->getResult();


        // form env file database connection
        $db = \Config\Database::connect('scholtemplage');
      //  $builder = $db->table("employees")->select('firstName,lastName,email')->where (array('jobTitle' => 'Sales Rep', 'reportsTo' =>1143));

     ###########3 no###########
    //  $builder = $db->table('employees,offices')->select('firstName,lastName,email,country')->where('employees.officeCode = offices.officeCode and offices.country ="USA" ');



     ###########4no $$$$$$$$$$$
     $builder = $db->table('orders')->select('customerName,phone,city,orderNumber,orderDate,status');
     $builder->join('customers','customers.customerNumber = orders.customerNumber');
 $dataresult = $builder->get()->getResult();
        echo "<pre>";
        print_r($dataresult);

    }
}
