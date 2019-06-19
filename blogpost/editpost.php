<?php 

  include 'conn.php';
  if ($_SESSION['username']) :
  include "nav.php";

  $idd = $_GET['id'];

?>

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
              $query2 = mysqli_query($conn, "SELECT * FROM blog_posts WHERE postTitle = '$idd' "); ?>
              <!-- /. tools -->
            </div>
            <div class="box-body">              
                <?php
                 if ($query2->num_rows>0){
                   while($rows=$query2->fetch_assoc()){
                    $id = $rows['id'];
                    $category = $rows['category'];
                    $tag = $rows['tag'];
                ?>
                <form action="editpostprocess.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="idpost" value="<?php echo $id;?>">
                  <label>Author</label>
                  <input name="author" type="text" value="<?php echo $rows['author'] ?>" class="form-control" style="border-radius: 5px" placeholder="Author's Name"><br>

                    <label>Category</label>
                      <select name="category" class="form-control" style="border-radius: 5px">
                        <option>Select Category</option>
                        <option value="Agriculture" <?php if($category=="Agriculture") echo 'selected="selected"'; ?> >Agriculture</option>
                        <option value="Gardening" <?php if($category=="Gardening") echo 'selected="selected"'; ?> >Gardening</option>
                        <option value="Making Money" <?php if($category=="Making Money") echo 'selected="selected"'; ?> >Making Money</option>
                        <option value="Technology" <?php if($category=="Technology") echo 'selected="selected"'; ?> >Technology</option>
                        <option value="Plants Talk" <?php if($category=="Plants Talk") echo 'selected="selected"'; ?> >Plants Talk</option>
                      </select>

                      <label>Tags</label>
                      <select name="tag" class="form-control" style="border-radius: 5px">
                        <option>Select Tag</option>
                        <option value="Agriculture" <?php if($tag=="Agriculture") echo 'selected="selected"'; ?> >Agriculture</option>
                        <option value="Farmers" <?php if($tag=="Farmers") echo 'selected="selected"'; ?> >Farmers</option>
                        <option value="The Instrumentality of E-Agriculture" <?php if($tag=="The Instrumentality of E-Agriculture") echo 'selected="selected"'; ?> >The Instrumentality of E-Agriculture</option>
                        <option value="Youth Engagement" <?php if($tag=="Youth Engagement") echo 'selected="selected"'; ?> >Youth Engagement</option>
                        <option value="The Future" <?php if($tag=="The Future") echo 'selected="selected"'; ?> >The Future</option>
                        <option value="The Sprouting of a Seed" <?php if($tag=="The Sprouting of a Seed") echo 'selected="selected"'; ?> >The Sprouting of a Seed</option>
                        <option value="Beginnings" <?php if($tag=="Beginnings") echo 'selected="selected"'; ?> >Beginnings</option>
                        <option value="Climate Smart Agriculture" <?php if($tag=="Climate Smart Agriculture") echo 'selected="selected"'; ?> >Climate Smart Agriculture</option>
                        <option value="Renewable Energy in Agriculture" <?php if($tag=="Renewable Energy in Agriculture") echo 'selected="selected"'; ?> >Renewable Energy in Agriculture</option>
                        <option value="Farming" <?php if($tag=="Farming") echo 'selected="selected"'; ?> >Farming</option>
                      </select>

                      <label>Topic</label>
                        <input name="postTitle" type="text" name="postTitle" class="form-control" value="<?php echo $rows['postTitle'] ?>" style="border-radius: 5px">
                        <label>Attach Image</label><br>
                        <div class="btn btn-default btn-file">
                            <i class="fa fa-paperclip"></i>
                            upload Image
                            <input type="file" name="pdf" value="<?php echo $rows['pdf_name']?>">
                        </div><br>

                        <label>Description</label>
                        <textarea class="textarea" name="postDesc" rows="6" class="form-control" style="border-radius: 5px; width: 100%"><?php echo $rows['postDesc'] ?></textarea><br>
                        <div>
                          <label>Blog Content</label>
                          <textarea name="postCont" class="textarea" placeholder="Content" style="width: 100%; height: 400px; border-radius: 5px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding:10px;" ><?php echo $rows['postCont'] ?>
                          </textarea>
                        </div>
                      <div class="text-right">
                        <div class="box-footer clearfix">
                          <button type="submit" name="update" class="btn btn-success btn-lg">Save</button>
                          <button class="btn btn-danger btn-lg" javascript="history:back()">Discard</button>
                        </div>
                      </div>
                    </form>
                  </div>
              <?php 
                          }
                        }
                        ?>
          </div>
       <!-- /.row -->
        </div>
       
       
      </div>
      <!-- /.box -->  
         
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