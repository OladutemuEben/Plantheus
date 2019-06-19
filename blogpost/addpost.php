<?php
include 'conn.php'; 
if ($_SESSION['username']) :
include "nav.php";

?>

<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
 
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-book"></i>

              <h3 class="box-title">Add New Post</h3>
              <?php
                  if (isset($_POST['post'])) {
                    $category = mysqli_real_escape_string($conn, $_POST['category']);
                    $tag = mysqli_real_escape_string($conn, $_POST['tag']);
                    $postTitle = mysqli_real_escape_string($conn, $_POST['postTitle']);
                    $postDesc = mysqli_real_escape_string($conn, $_POST['postDesc']);
                    $postCont = mysqli_real_escape_string($conn, $_POST['postCont']);
                    $author = mysqli_real_escape_string($conn, $_POST['author']);
                    $countcomment = "";

                    $pdf = $_FILES['pdf']['name'];
                    $target = "pdf/".basename($pdf);
                    $postDate = date('l\, F jS\, Y  H:i:s a');
                    $post_id = rand (10000, 99999);

                    $query = mysqli_query($conn, "INSERT INTO blog_posts(category, tag, author, postTitle, pdf_name, postDesc, postCont, post_id, countcomment, postDate) VALUES('$category', '$tag', '$author', '$postTitle', '$pdf', '$postDesc', '$postCont', '$post_id', '$$countcomment', '$postDate') ");
                    move_uploaded_file($_FILES['pdf']['tmp_name'], $target);
                     // die(mysqli_error($conn));
                    // $query2 = mysqli_query($conn, "INSERT INTO blog_comments (post_id) VALUES('$post_id') ");
                    if ($query) {
                      echo "<script>alert('Posted Successfully!', '', 'success');</script>";
                      # code...
                    }

                    # code...
}
 ?>

            </div>
            <div class="box-body">
              <form action="addpost.php" method="post" enctype="multipart/form-data">
                <label>Author</label>
                  <input name="author" type="text" class="form-control" style="border-radius: 5px" placeholder="Author's Name"><br>
                <label>Category</label>
                  <select name="category" class="form-control" style="border-radius: 5px">
                    <option>Select Category</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Gardening">Gardening</option>
                    <option value="Making Money">Making Money</option>
                    <option value="Technology">Technology</option>
                    <option value="Plants Talk">Plants Talk</option>
                  </select>
                  <label>Tags</label>
                  <select name="tag" class="form-control" style="border-radius: 5px">
                    <option>Select Tag</option>
                    <option value="Farmers">Farmers</option>
                    <option value="The Instrumentality of E-Agriculture">The Instrumentality of E-Agriculture</option>
                    <option value="Youth Engagement">Youth Engagement</option>
                    <option value="The Future">The Future</option>
                    <option value="The Sprouting of a Seed">The Sprouting of a Seed</option>
                    <option value="Beginnings">Beginnings</option>
                    <option value="Climate Smart Agriculture">Climate Smart Agriculture</option>
                    <option value="Renewable Energy in Agriculture">Renewable Energy in Agriculture</option>
                    <option value="Farming">Farming</option>
                    <option value="Hydrophonics">Hydrophonics</option>
                  </select>
                <label>Topic</label>
                  <input name="postTitle" type="text" name="" class="form-control" style="border-radius: 5px" placeholder="Post Topic">
                <label>Attach Image</label><br>
                <div class="btn btn-default btn-file">
                    <i class="fa fa-paperclip"></i>
                    Upload Image
                    <input type="file" name="pdf">
                  </div><br>
                 <label>Description</label>
                  <textarea class="textarea" name="postDesc"  style="border-radius: 5px; width: 100%" placeholder="Post Description"></textarea><br>
                
              
                <div>
                  <label>Blog Content</label>
                  <textarea name="postCont" class="textarea" placeholder="Content" 
                    style="width: 100%; height: 400px; border-radius: 5px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
             <div class="text-right">
              <div class="box-footer clearfix">
                <button type="submit" name="post" class="btn btn-success btn-lg">Post</button>
              </div>
            </div>
           </form>
          </div>
           <!-- /.row -->
            </div>
           
           
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->

          
         
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

</body>
</html>
<?php else :?>
<?php  header('location: index.php')?>
<?php endif;?>