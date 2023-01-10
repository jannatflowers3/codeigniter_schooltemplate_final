
<?php  include('header.php');?>
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

<?php  include('leftsidebar.php');?>



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
        <div class="col-sm-6">
          <h1 class=" text-center bg-primary ms-0">Class All Information</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>

            <li class="breadcrumb-item active"><a href="/Courses">Courses</a></li>
         
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
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Class id</th>
                    <th>Class Name</th>
                    <th>Shift</th>
                    <th>Section</th>
                    <th>Admission Fee</th>
                    <th>Action</th>
                   
                    
                  </tr>
                  </thead> 
                  <tbody>
                  <?php  foreach ($courseslist as $index=> $courseslists){?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                 
                        <td><?=$courseslists['class'] ?></td>
                        <td><?=$courseslists['shift'] ?></td>
                        <td><?=$courseslists['section'] ?></td>
                        <td><?=$courseslists['admission_fee'] ?></td>
                        <td>

                        <a href="<?=$courseslists['id'] ?>" class="bg-primary p-2">Edit</a>
                        <a href="/courses/delete/<?=$courseslists['id'] ?>" class="bg-danger p-2">Delete</a>
                        </td>
                    </tr>
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
<?php  include("footer.php")?>