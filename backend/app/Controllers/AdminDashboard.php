<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index()
    {
        return view("admin/admin_dashboard");
    }
    public function adminlogin(){
        return view("admin_login");
    }
}
