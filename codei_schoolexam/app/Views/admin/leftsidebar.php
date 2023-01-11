<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 sidcolor">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      
      <span class="brand-text font-weight-light bg-primary p-3">Student Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin_dashboard/dist/img/main_admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-info fw-500">Jannatul Ferdaush</a>
        </div>
      </div>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/admindashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="ml-2">
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/new" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Add</p>
                </a>
              </li>
</ul>
          </li>
         
          <li class="nav-item">
            <a href="/studentmanagement" class="nav-link">
              <i class="fa fa-address-book"></i>
              <p class="ml-2">Student Management
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/studentmanagement" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="ml-3">Student List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo  base_url("/studentmanagement/new/") ?>
                " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Add</p>
                </a>
              </li>
            </ul>
          </li>
          
         
  <!-- teacher start management -->
  <li class="nav-item">
            <a href="/Teacher" class="nav-link">
              <i class="fa fa-balance-scale"></i>
              <p class="ml-3"> Teacher Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Teacher" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teacher List</p>
                </a>
              </li>       
            </ul>
          </li>
  <!-- end management -->
       <!-- Course management -->
       <li class="nav-item">
            <a href="/Courses" class="nav-link">
              <i class="fa fa-book"></i>
              <p class="ml-3">Class Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Courses" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class </p>
                </a>
              </li>       
            </ul>
          </li>
  <!-- end management -->
  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-university"></i>
              <p class="ml-3">Student Subject 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/studentSubject" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Subject</p>
                </a>
              </li>       
            </ul>
          </li>
  <!-- Student Subject management -->
   <!-- Staff start management -->
   <li class="nav-item">
            <a href="Staffs" class="nav-link">
              <i class="fa fa-id-card"></i>
              <p class="ml-3">Staff Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Staffs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> All Staff</p>
                </a>
              </li>       
            </ul>
          </li>
  <!-- end management -->
  <!-- Staff start management -->
  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-university"></i>
              <p class="ml-3">Student Attendance 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Attendance</p>
                </a>
              </li>       
            </ul>
          </li>
  <!-- end management -->
  
  <!-- result start management -->
  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-envelope"></i>
              <p class="ml-3">Result Generate
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result</p>
                </a>
              </li>       
            </ul>
            <li><a href="/users/logout" Class="btn btn-primary ml-4 mt-2">Logout</a></li>
          </li>
         
  <!-- end management -->

        </ul>
      </nav>