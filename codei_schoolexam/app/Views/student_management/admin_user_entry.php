
<?php  include('includes/header.php');?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
   
  </ul>
</nav>
<!-- /.navbar -->

<?php  include('includes/leftsidebar.php');?>



    <!-- Sidebar Menu -->

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1 class="m-0">Student List</h1> -->
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Admin</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row justify-content-center">
      <?php
    if (session()->has('errors')) {
        $errors = session()->errors;
    }
    ?> 
        <div class="col-lg-10 col-10">
<h1> Admin_user list</h1>
<form method="post" action="<?= base_url("studentmanagement/create/")?>"
enctype="multipart/form-data">

<?= csrf_field(); ?>
                <div class="card-body">
 
              <!-- end student name -->
              <div class="row">
                <div class="col-lg-6">
         <div class="form-group">
                    <label for="st_name">Admin Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Admin Name"
                     name ="name"
                      value="">
                      <?php

if (isset($errors['name'])) {
    echo $errors['name'];
}
?>
                </div>
              </div>

            <!-- end stdent email -->
          
                <div class="col-lg-6">
            <div class="form-group">
                    <label for="st_email">Admin Email</label>
                    <input type="email" class="form-control" value="<?php echo set_value('email') ?>" id="email" 
                     name ="email" placeholder="Enter Admin Email">
                  </div>
                  </div>
              </div>
            <!-- end stdent phone -->
            
            
            <div class="row">
                <div class="col-lg-6">
            <div class="form-group">
                    <label for="phone">Admin Phone</label>
                    <input type="number" class="form-control"  value="<?php echo set_value('phone') ?>"id="phone" 
                     name ="phone" placeholder=" Admin Phone Number">
                  </div>
                  <!-- student img -->
              </div>

                  <div class="col-lg-6">
                  <div class="form-group">
                    <label for="st_email">Admin Password</label>
                    <input type="password" class="form-control" value="<?php echo set_value('password') ?>" id="password" 
                     name ="password" placeholder="Enter Admin password">
                  </div>
                  </div>
                 </div>
              </div>
              <div class="form-group">
                    <label for="pdetails">Student Image</label>
                    <input type="file" class="form-control" id="user_img" 
                    value="<?php echo set_value('user_img');?>" 
                      name="user_img">    
                 </div>
                <!-- gender end -->
               <!-- end row -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
              



     </div><!-- /.container-fluid -->
   </section>

 </div>  
      </div>
      <!-- row end -->
    </div><!-- /end container-fluid -->
  </section>
  <!-- /.content -->
</div>


<?php  include("includes/footer.php")?>