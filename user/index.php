<?php 
  session_start();
  include'../config/config.php';
  if (!isset($_SESSION['username'])) {
    header('location:../index.php?pesan=belum_login');
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php 
                    echo $_SESSION['username'];
                   ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../config/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="profile.php">
            <i class="fa fa-user"></i> <span>Profile</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          
                
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Simple Form</h3>
            </div>

            <?php 
              $id_user     = $_SESSION['id_user'];
              $date        = date("Y-m-d");
              $select      = mysqli_query($host,"SELECT id FROM survey WHERE id_user ='$id_user' AND date_survey='$date'");
              $data        = mysqli_num_rows($select);

              if ($data == 0) {
             ?>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="save.php" method="post">
                <!-- select -->
                <div class="form-group">
                  <label>Agama# Apakah antum mengaji?</label>
                  <select class="form-control" name="ngaji" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Agama# Apakah antum sholat dhuha?</label>
                  <select class="form-control" name="dhuha" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Agama# Apakah antum sholat tahajud?</label>
                  <select class="form-control" name="tahajud" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>IT# Apakah antum ngoding?</label>
                  <select class="form-control" name="ngoding" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>IT# Apakah antum mengetik?</label>
                  <select class="form-control" name="ngetik" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>IT# Apakah antum belajar?</label>
                  <select class="form-control" name="belajar" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Kedisiplinan# Apakah antum tidur tepat waktu?</label>
                  <select class="form-control" name="tidur" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Kedisiplinan# Apakah antum bangun tepat waktu?</label>
                  <select class="form-control" name="bangun" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Kedisiplinan# Apakah sholat tepat waktu?</label>
                  <select class="form-control" name="sholat" required>
                    <option value="">Pilih salah satu</option>
                    <option value=5>Selalu</option>
                    <option value=4>Sering</option>
                    <option value=3>Kadang</option>
                    <option value=2>Jarang</option>
                    <option value=1>Tidak pernah</option>
                  </select>
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            <?php 

              }else{
             ?>  

          <div class="box">
            <h2 style="text-align: center">
              Terima kasih, anda telah mengisi survey!!!
            </h2>
            
          </div>

            <?php 

              }
             ?>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</body>
</html>
