<?php
 include 'conn.php';
if ($_SESSION['username']) :
 include "nav.php";
 $selectuser = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$_SESSION['username']."' ");
 $result = mysqli_fetch_assoc($selectuser);
 if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $surname = $_POST['surname'];
  $last_name = $_POST['last_name'];
  $other_name = $_POST['other_name'];
   # code...
 $update = mysqli_query($conn, "UPDATE users SET username = '$username', surname = '$surname', last_name = '$last_name', other_name = '$other_name' ");
 if ($update) {
  echo "<script>alert('Saved Successfully')</script>";
 }else{
  echo "Bad";
 }
  }
  ?>
<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      <!--   <small>Version 2.0</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

      <section class="content">
 
      <!--  -->
      <!-- /.row -->
   <div class="">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<div class="login-box">
  <div class="login-box-body">
     <p class="login-box-msg" style="font-size: 20px"><b>My Profile</p>
    <form action="profile.php" method="post">
      <div class="form-group has-feedback">
        <label>Username</label>
        <input type="text" value="<?php echo $result['username']?>" name="username" class="form-control" placeholder="Enter your Username">
        <br>
        <label>Surname</label>
        <input type="text"  value="<?php echo $result['surname']?>" name="surname" class="form-control" placeholder="Enter your Surname">
        <br>
        <label>Last Name</label>
        <input type="text"  value="<?php echo $result['last_name']?>" name="last_name" class="form-control" placeholder="Enter your Last Name">
        <br>
        <label>Other Name</label>
        <input type="text"  value="<?php echo $result['other_name']?>" name="other_name" class="form-control" placeholder="Enter your Other Name">
        <br>
      </div>
      <div class="row">
        <div class="col-xs-7">
          <div class="checkbox">
            <label>
              <!-- <input type="checkbox"> Remember Me -->
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" name="update" class="btn btn-primary btn-raised btn-block btn-flat">Update</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

       <!-- /.social-auth-links -->

    <a href="changepassword.php">Change password</a>

  </div>
</div>
</div>
           
            </div>
            <!-- /.box-body -->
          </div>
          
         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> Plantheus.</strong> All rights reserved.
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
<?php else :?>
<?php  header('location: index.php')?>
<?php endif;?>