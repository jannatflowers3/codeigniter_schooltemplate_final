
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
      <a href="/studentmanagement" class="nav-link">Student</a>
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
          <div class="row mb-2 justify-content-center">
        <div class="col-sm-10 text-center ">
          <h1 class=" text-center bg-primary">Student List</h1>
        </div><!-- /.col -->
        <div class="col-sm-2">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/studentmanagement">Student</a></li>
          
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
      <div class="row">
        
        <div class="col-lg-12 col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Subject List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered border-danger">
                  <thead>
                  <tr class="table-info">
                    <th> id</th>
                    <th>Class</th>
                    <th> Shift</th>
                    
                    <th>Section</th>
                    <th>Bangla</th>
                    <th>English</th>
                    <th>Math</th>
                    <th>Science</th>
                    <th>Religion</th>
                    <th>SocialStudies</th>
                    <th>Computer</th>
                    <th>Art</th>
                  </tr>
                  </thead>   
                  <tbody>
                    <?php  foreach($studentsubjects as $studentsubject){?>
                            <tr> 
                              <td><?= $studentsubject['st_id'] ?></td>
                              <td><?= $studentsubject['class'] ?></td>
                              <td><?= $studentsubject['shift'] ?></td>
                              <td><?= $studentsubject['section'] ?></td>
                              <td><?= $studentsubject['bangla'] ?></td>
                              <td><?= $studentsubject['english'] ?></td>
                              <td><?= $studentsubject['math'] ?></td>
                              <td><?= $studentsubject['science'] ?></td>
                              <td><?= $studentsubject['religion'] ?></td>
                              <td><?= $studentsubject['social_studies'] ?></td>
                              <td><?= $studentsubject['computer'] ?></td>
                              <td><?= $studentsubject['art'] ?></td>
                            </tr>
                            <!-- 'st_id','class','shift','section',
    'bangla','english','math','science','religion','social_studies','computer','art'] -->
                      <?php  }?>
                  </tbody>              
                  
                </table>
               
              </div>
              <!-- /.card-body -->
            </div>
      </div>
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
          
          <!-- col end -->
      </div>
      <!-- row end -->
    </div><!-- /end container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php  include("includes/footer.php")?>