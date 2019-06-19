<?php
 include 'conn.php';
if ($_SESSION['username']) :
 include "nav.php"; ?>
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
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Blog Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Categories</th>
                  <th>Comment</th>
                  <th>Date Posted</th>
                </tr>
                </thead>
                <tbody>
               
                <tr>
                  <td>Webkit</td>
                  <td>S60</td>
                  <td><a href=""><button class="btn-xm btn-success"><i class="fa fa-commenting"></i>View</button></td>
                  <td>25 December 2018</a></td>
                  <!-- <td><a href=""> -->
                   <!--  <button class="btn-xm btn-success"><i class="fa fa-edit"></i>Edit</button></a> <a href=""><button class="btn-xm btn-danger"><i class="fa fa-remove"></i>Delete</button></a></td> -->
                </tr>
               
                <tr>
                  <td>Misc PSP browser PSP browser PSP browser</td>
                  <td>S60</td>
                  <td><a href=""><button class="btn-xm btn-success"><i class="fa fa-commenting"></i>View</button></td>
                  <td>25 December 2018</a></td>
                  <!-- <td><a href=""> -->
                   <!--  <button class="btn-xm btn-success"><i class="fa fa-edit"></i>Edit</button></a> <a href=""><button class="btn-xm btn-danger"><i class="fa fa-remove"></i>Delete</button></a></td> -->
                </tr>
                <tr>
                  <td>Other browsers</td>
                  <td>S60</td>
                   <td><a href=""><button class="btn-xm btn-success"><i class="fa fa-commenting"></i>View</button></td>
                  <td>25 December 2018</a></td>
                  <!-- <td><a href=""> -->
                    <!-- <button class="btn-xm btn-success"><i class="fa fa-edit"></i>Edit</button></a> <a href=""><button class="btn-xm btn-danger"><i class="fa fa-remove"></i>Delete</button></a></td>  --> 
                </tr>
                </tbody>
                <tfoot>
                <tr>
                 <th>Title</th>
                  <th>Categories</th>
                  <th>Comment</th>
                  <th>Date Posted</th>
                </tr>
                </tfoot>
              </table>

          <div class="media mb-4">
            <img class='d-flex mr-3 rounded-circle' src='http://placehold.it/50x50'>
            <div class="media-body">
                <h5 class="mt-0">jhv</h5>  
               <p class="mg-btm-3">dsjvjdsvjdsvj</p>
              <small class='text-muted'>2 mins ago</small>
             
              <div class="media mt-4">
              <img class='d-flex mr-3 rounded-circle' src='http://placehold.it/50x50'>
               <div class="media-body">
                <h5 class="mt-0">jhv</h5>  
                 <p class="mg-btm-3">dsjvjdsvjdsvj</p>
                <small class='text-muted'>2 mins ago</small>
                             
                <!--SUB-REPLY-->
                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">cvjhvdshjvd</h5>  
                    <p class="mg-btm-3">dcvsdhjvc</p>
                    <small class="text-muted">2 mins ago</small>
                  </div>
                </div>  
              
              </div>
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