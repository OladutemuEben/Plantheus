<?php
$conn = mysqli_connect('localhost', 'root', '', 'blog');
$selectuser = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$_SESSION['username']."' ");
 // $result = mysqli_fetch_array($selectuser);
$surname = $selectuser['surname'];
$last_name = $selectuser['last_name'];
$other_name =  $selectuser['other_name'];
$username =  $selectuser['username'];
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Plantheus Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="shortcut icon" type="image/png" href="../img/plantheus.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Plantheus</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
        
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <!--<li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../img/plantheus-3.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $surname.'&nbsp'.$other_name.'&nbsp'.$last_name;?></span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="../img/plantheus-3.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $surname.'&nbsp'.$other_name.'&nbsp'.$last_name;?>Plantheus App
                </p>
              </li>
             
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>-->
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
          <img src="../img/plantheus-3.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">BLOG</li>
        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="lecturetimetable.php"><i class="fa fa-circle-o"></i>Lecture Timetable</a></li>
            <li><a href="examtimetable.php"><i class="fa fa-circle-o"></i>Examination Timetable</a></li>
             <li><a href="studenthelp.php"><i class="fa fa-circle-o"></i>Student Help</a></li>
              <li><a href="staffhelp.php"><i class="fa fa-circle-o"></i>Staff Help</a></li>
           </ul>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="post.php"><i class="fa fa-circle-o"></i>Posts</a></li>
            <li><a href="addpost.php"><i class="fa fa-circle-o"></i>Add New Post</a></li>
             <li><a href="comments.php"><i class="fa fa-circle-o"></i>Comments</a></li>
              <li><a href="editpost.php"><i class="fa fa-circle-o"></i>Edit Post</a></li>
           </ul>
        </li> -->
         <li>
          <a href="post.php">
            <i class="fa fa-file"></i> <span>Posts</span>
          </a>
        </li> <li>
          <a href="addpost.php">
            <i class="fa fa-edit"></i> <span>Add A New Post</span>
          </a>
        </li> <li>
          <a href="profile.php">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li><li>
          <a href="" data-toggle="modal" data-target="#logout">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      <!--   <li class="treeview">
          <a href="#">
            <i class="fa fa-comments"></i> <span>FAQs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="lecturetimetable.php"><i class="fa fa-circle-o"></i>Lecture Timetable</a></li>
            <li><a href="examtimetable.php"><i class="fa fa-circle-o"></i>Examination Timetable</a></li>
             <li><a href="studenthelp.php"><i class="fa fa-circle-o"></i>Student Help</a></li>
              <li><a href="staffhelp.php"><i class="fa fa-circle-o"></i>Staff Help</a></li>
           </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Contact Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="lecturetimetable.php"><i class="fa fa-circle-o"></i>Lecture Timetable</a></li>
            <li><a href="examtimetable.php"><i class="fa fa-circle-o"></i>Examination Timetable</a></li>
             <li><a href="studenthelp.php"><i class="fa fa-circle-o"></i>Student Help</a></li>
              <li><a href="staffhelp.php"><i class="fa fa-circle-o"></i>Staff Help</a></li>
           </ul>
        </li> -->
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Logout Modal -->
  <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
