<?php
include 'conn.php';
if ($_SESSION['username']) :
 include "nav.php";
$query = mysqli_query($conn, "SELECT * FROM blog_posts ORDER BY id DESC");
 ?>
  <script type="text/javascript">
      function ConfirmDelete($id)
      {
        if (confirm("Are you sure you want to Delete?"))
            window.location.href='deletepost.php?id= '+$id+' ';
            return true
      }
  </script>
<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-dashboard"></i> Dashboard
      </h1>
    </section>

    <section class="content">
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
                <th>Tags</th>
                <th>Author</th>
                <th>Comment</th>
                <th>Date Posted</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
              if ($query->num_rows>0){
               while($rows=$query->fetch_assoc()){
                $id = $rows['postTitle'];
                $del = $rows['id']; 
                $post_id = $rows['post_id'];
            ?>
            <?php

              $commentquery = mysqli_query($conn, "SELECT countcomment FROM blog_posts WHERE post_id = $post_id");
              $user_check_query = mysqli_query($conn, "SELECT count(*) as nt FROM blog_comments WHERE post_id = '$post_id' ");
                $count = $user_check_query->fetch_object()->nt;
                $user_check_query->free();
              // $countresult = mysqli_fetch_assoc($commentquery);
                ?>
            <tr>
              <td><?php echo $rows['postTitle'];?></td>
              <td><?php echo $rows['category'];?></td>
              <td><?php echo $rows['tag'];?></td>
              <td><?php echo $rows['author'];?></td>
              <td><?php echo $count; ?>
                <?php 
                    // if ($commentquery > 0) {
                    //   echo $commentquery['countcomment'];
                    // }else{
                    //   echo "0";
                    // }
                ?><a href=""><i class="fa fa-commenting"></i>View</a>
              </td>
              <td><?php echo $rows['postDate'];?></td>
              <td>
                <a href="editpost.php?id=<?php echo $id; ?>">
                  <button class="btn btn-success" title="Edit Post"><i class="fa fa-edit"></i></button>
                </a>
                <a onclick="ConfirmDelete(<?php echo $del;?>)">
                  <button class="btn btn-danger" title="Delete Post"><i class="fa fa-remove"></i></button>
                </a>               
              </td>
            </tr>
               <?php
             }
               }?>            
            </tbody>
            <tfoot>
            <tr>
             <th>Title</th>
              <th>Categories</th>
              <th>Tags</th>
              <th>Author</th>
              <th>Comment</th>
              <th>Date Posted</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
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