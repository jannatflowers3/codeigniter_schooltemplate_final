
<?php  include('includes/header.php');?>
<?php // include('includes/table_header.php');?>

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
            <li class="breadcrumb-item active">Student Subject</li>
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
<h1> Student Add</h1>

<form method="post" action="<?= base_url("/studentSubject/create/")?>"
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
                    <label for="class">Courses ID</label>
                    <input type="text" class="form-control" id="class" 
                     name ="class" 
                      value="class">
                </div>
              </div>
           
            <div class="col-lg-6">
                
              <!-- courses checkbox -->
              <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="bangla" name="bangla">
  <label class="form-check-label" for="bangla">
    Bangla
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="english"  name="english" id="english" checked>
  <label class="form-check-label" for="english">
    English
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="math"  name="math" id="math" checked>
  <label class="form-check-label" for="math">
    Math
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="science"  name="science" id="science" checked>
  <label class="form-check-label" for="science">
    Science
  </label>
</div>
            </div>          
              
<!-- 'st_id','class','','section',
    'bangla','english','','','religion','social_studies','computer','art' -->

                <!-- /.card-body -->
               <div class="row">
<div class="col-lg-6">
            
<div class="form-group">
                    <label for="pname">Courses id</label>
                    <select name ="class"class="form-control" >
                        <option value="class" >Select One</option>
                      <?php foreach($st_courses as $st_course):?>
                      <option value="" > <?= $st_course['class'] ?></option>
                 
                      <?php endforeach; ?>
                    </select>
                  </div>
</div>  
                 <div class="col-lg-6">
                 <div class="form-group">
                    <label for="pname">Class Shift</label>
                    <select name ="shift"class="form-control" >
                        <option value="shift" >Select One</option>
                      <?php foreach($st_courses as $st_course):?>
                      <option value="" > <?= $st_course['shift'] ?></option>
                 
                      <?php endforeach; ?>
                    </select>
                  </div>  
                 </div>
                </div>
                
                

                <!-- gender end -->
               <!-- end row -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
            <!-- /.card -->

                      </div>
              



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