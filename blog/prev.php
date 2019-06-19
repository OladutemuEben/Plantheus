  <?php include_once 'head.php';?>
  <?php include_once 'nav.php';
  include 'conn.php';
$query = mysqli_query($conn, "SELECT * FROM blog_posts  LIMIT 10");
?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">

           <?php
                  if ($query->num_rows>0){
                   while($rows=$query->fetch_assoc()){
                    $id = $rows['postTitle'];
                    $author = $rows['author'];
                     $post_id = $rows['post_id'];
                        $user_check_query = mysqli_query($conn, "SELECT count(*) as nt FROM blog_comments WHERE post_id = '$post_id' ");
            $count = $user_check_query->fetch_object()->nt;
            $user_check_query->free();
                    ?>

        <h1 class="my-4"><?php echo $rows['postTitle'];?>
          <small></small>
        </h1>
        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- Hidden only on xs, Hidden only on sm, Hidden only on md  (would show on large screens)-->
          <img class="card-img-top d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" src="../../blogpost/pdf/<?php echo $rows['pdf_name'];?>" alt="Plantheus" height="400px">
          <!-- Visible only on xs, Visible only on sm, Visible only on md (would show on small and medium screens)-->
          <img class="card-img-top d-block d-sm-none d-none d-sm-block d-md-none" src="../../blogpost/pdf/<?php echo $rows['pdf_name'];?>" alt="Plantheus" height="270px">
          <div class="card-body">
            <h2 class="card-title text-bold"><?php echo $rows['postTitle'];?></h2>
            <p class="card-text"><?php echo $rows['postDesc'];?></p>
            <div class="container no-pad-left">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> <?php echo $rows['category'];?></a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-tag"></i> <?php echo $rows['tag'];?></a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-comments"></i>Comment(<?php echo $count; ?>)</a></li>
                </ol>
              </nav>
            </div>
            <a href="post.php?id=<?php echo $id;?>" class="btn btn-outline btn-xl text-dark get-app">Read More</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo $rows['postDate'];?> by
            <a href="author.php?author=<?php echo $author ?>"><?php echo $rows['author'];?></a>
          </div>
        </div>
             <?php
                  }
                  }
                $prev = mysqli_query($conn, "SELECT * FROM `blog_posts` LIMIT 0, 10");
                $next = mysqli_query($conn, "SELECT * FROM `blog_posts` LIMIT 10, 20");
                    ?>
       

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="prev.php" style="color: #0a783c"><i class="fa fa-arrow-left"></i> Prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="next.php" style="color: #0a783c">Next <i class="fa fa-arrow-right"></i></a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <?php include_once 'sidebar.php';?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php include_once 'footer.php';?>