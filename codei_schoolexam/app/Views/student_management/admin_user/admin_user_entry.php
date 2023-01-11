
<?php  include('/includes/header.php');?>

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

<?php  include('student_management/includes/leftsidebar.php');?>



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
        
        <div class="col-lg-10 col-10">
<h1> Admin_user list</h1>
<form method="post" action="<?= base_url("studentmanagement/create/")?>"
enctype="multipart/form-data">

<?= csrf_field(); ?>
                <div class="card-body">
               <?php  $errors = [];
                if(session()->has('errors')){
                    $errors = session('errors');
                }
               ?>  
              <!-- end student name -->
              <div class="row">
                <div class="col-lg-6">
         <div class="form-group">
                    <label for="st_name">Student Name</label>
                    <input type="text" class="form-control" id="st_name" 
                     name ="st_name" placeholder="Enter Student Name"
                      value="<?php echo set_value('st_name');?>">
                    
                </div>
              </div>
           
            <!-- end stdent email -->
          
                <div class="col-lg-6">
            <div class="form-group">
                    <label for="st_email">Student Email</label>
                    <input type="email" class="form-control" value="<?php echo set_value('st_email') ?>" id="st_email" 
                     name ="st_email" placeholder="Enter Student Email">
                  </div>
                  </div>
              </div>
            <!-- end stdent phone -->
            <div class="row">
                <div class="col-lg-6">
            <div class="form-group">
                    <label for="st_phone">Student Phone</label>
                    <input type="number" class="form-control"  value="<?php echo set_value('st_phone') ?>"id="st_phone" 
                     name ="st_phone" placeholder=" Student Phone Number">
                  </div>
                  <!-- student img -->
              </div>
                  <div class="col-lg-6">
                 <div class="form-group">
                    <label for="pdetails">Student Image</label>
                    <input type="file" class="form-control" id="st_img" 
                    value="<?php echo set_value('st_img');?>" 
                      name="st_img">    
                 </div>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="form-group">
                    <label for="pdetails">Student Birthdate</label>
                    <input type="date" class="form-control" id="st_birth" 
                    value="<?php echo set_value('st_birth');?>" 
                      name="st_birth">    
                 </div>
                 </div>
              </div>
            <!-- end stdent address -->
                  <div class="form-group">
                    <label for="st_address">Student Address</label>
                      <textarea id="summernote" class="form-control" 
                      name ="st_address" placeholder="Student Addresh">
                     <?php echo set_value('st_phone') ?>
                        </textarea>   
                  </div>
           <!-- end stdent address -->

              <!-- <div class="form-group">
                    <label for="st_class"></label>
                     <input type="text" class="form-control" value="<?php echo set_value('st_class') ?>" id="st_class" 
                     name="st_class"/> 
                  </div> -->
                <!-- /.card-body -->
               
               <div class="row">
                <div class="col-lg-4">
                <div class="form-group">
                    <label for="pname">Student Class</label>
                    <select name ="st_id"class="form-control" >
                        <option value="" >Select One</option>
                      <?php foreach($st_category as $st_categorys):?>
                      <option value="<?= $st_categorys['id'] ?>" > <?= $st_categorys['st_id'] ?></option>
                 
                      <?php endforeach; ?>
                    </select>
                  </div>   
                </div>
                <div class="col-lg-4">
                <!-- <div class="form-group">
                    <label for="pname">Student Shift</label>
                    <select name ="'st_+class'"class="form-control" >
                        <option value="" >Select One</option>
                      
                    </select>
                  </div>    -->
                </div>
                <div class="col-lg-4">
                <!-- <div class="form-group">
                    <label for="pname">Student Section</label>
                    <select name ="'st_class'"class="form-control" >
                        <option value="" >Select One</option>
                      <?php ///foreach($st_category as $st_categorys):?>
                    
                      <?php //endforeach; ?>
                    </select>
                  </div>   
                </div> -->
               </div>
             
               
               <div class="form-check">
               <label for="pname">Student Gender</label><br>
                <input class="form-check-input" type="radio" value="male"
                name="st_gender" id="st_gender">
                <label class="form-check-label" for="st_gender">
                  Male
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="st_gender" value="female" id="st_gender" checked>
                <label class="form-check-label" for="st_gender">
                  Female
                </label>
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


<?php  include("student_management/includes/footer.php")?>