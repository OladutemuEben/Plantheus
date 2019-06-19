<?php
 include 'conn.php';
if ($_SESSION['username']) :
 include "nav.php"; ?>
  <?php
      $query2 = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' ";
$result2 = mysqli_query($conn, $query2);
$name2 = mysqli_fetch_assoc($result2);
$cur_pass = $name2['password'];
if (isset($_POST['change'])){
  $oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
  $newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
  $conpass = mysqli_real_escape_string($conn, $_POST['conpass']);

  $oldpass = md5($oldpass); 
  if ($oldpass == $cur_pass) {
                if ($newpass == $conpass) {  
                  $newpass = md5($newpass);
                  $conpass = md5($conpass);
                               $update = "UPDATE users SET password = '$newpass' WHERE username = '".$_SESSION['username']."' ";
                                 $check = mysqli_query($conn, $update); # code...
                                   echo "<script type='text/javascript'>
  alert('Password successfully Changed')
</script>"; 
                                           }else{
                                             array_push($errors, "The New Password did not match with Confirm Password");
                                           } 
                                         
  
}else{
  array_push($errors, "The Old password is incorrect");
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
     <p class="login-box-msg" style="font-size: 20px"><b>Update Password</p>
      <?php include 'errors.php';?>
    <form action="changepassword.php" method="post">
      <label>Old Password</label>
        <div class="form-group has-feedback">
        <input type="password" required="" name="oldpass" class="form-control" placeholder="Enter Old Password"  style="border-radius: 5px">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <label>New Password</label>
      <div class="form-group has-feedback">
        <input type="password" required="" name="newpass" class="form-control" placeholder="Enter New Password" style="border-radius: 5px">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <label>Confirm Password</label>
      <div class="form-group has-feedback">
        <input type="password" required="" name="conpass" class="form-control" placeholder="Enter Confirm Password" style="border-radius: 5px">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
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
          <button type="submit" name="change" class="btn btn-primary btn-raised btn-block btn-flat">Update</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

       <!-- /.social-auth-links -->

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