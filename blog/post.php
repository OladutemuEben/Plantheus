<!DOCTYPE html>
<html lang="en">
<?php 
include 'conn.php';
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
     <?php
     
    $idd = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * FROM blog_posts WHERE postTitle = '$idd' or id = '$idd' ");
          if ($query->num_rows>0){
           while($rows=$query->fetch_assoc()){
            $id = $rows['postTitle'];
            $post_id = $rows['post_id'];
            $author = $rows['author'];
            $timestamp = time();
              ?>

  <title><?php echo $rows['postTitle'];?> | Plantheus Blog</title>
  <?php
      }
    }
    ?>

  <!-- Bootstrap core CSS -->
  <link href="/plantheus/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="css/blog-home.css" rel="stylesheet"> -->
  <link href="/plantheus/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/plantheus/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link href="/plantheus/device-mockups/device-mockups.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/plantheus/css/new-age.min.css" rel="stylesheet">
  <link href="/plantheus/css/blog_style.css" rel="stylesheet" type="text/css">
  <link href="/plantheus/img/plantheus-3.png" rel="shortcut icon" type="image/png">

</head>

<body id="page-top" style="padding-top: 100px">
  <?php include_once 'nav.php';
  //connect to database
  include 'conn.php';
  //get id from url
    $idd = $_GET['id'];
  //select from database
    $query = mysqli_query($conn, "SELECT * FROM blog_posts WHERE postTitle = '$idd' or id = '$idd' ");
    $query5 = mysqli_query($conn, "SELECT * FROM blog_posts WHERE postTitle = '$idd' ");
    $result = mysqli_fetch_assoc($query5);
    $post_id = $result['post_id'];

    //generating reply modal uniq id
       function random_string($lenght){
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));
        for ($i=0; $i < $lenght; $i++) { 
          $key .= $keys[array_rand($keys)];
          # code...
        }
        return $key;
      }
       function random_string2($lenght2){
        $key2 = '';
        $keys2 = array_merge(range('a', 'z'));
        for ($i=0; $i < $lenght2; $i++) { 
          $key2 .= $keys2[array_rand($keys2)];
          # code...
        }
        return $key2;
      }
      $echo = random_string2(3);
    ?>

  <!-- Page Content -->
  <div class="container">
    
    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
            <?php
              //fetch from database
              if ($query->num_rows>0){
               while($rows=$query->fetch_assoc()){
                $idd = $rows['id'];
                $author = $rows['author'];
                $post_id = $rows['post_id'];
                $user_check_query = mysqli_query($conn, "SELECT count(*) as nt FROM blog_comments WHERE post_id = '$post_id' ");
                $count = $user_check_query->fetch_object()->nt;
                $user_check_query->free();

            ?>
        <!-- Title -->
        <h1 class="mt-4 text-bold"><?php echo $rows['postTitle'];?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="author.php?author=<?php echo $author ?>"><?php echo $author; ?></a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on <?php echo $rows['postDate'];?></p>
        <hr>
        <!-- Preview Image -->
        <!-- Hidden only on xs, Hidden only on sm, Hidden only on md  (would show on large screens)-->
        <img class="card-img-top d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" src="/plantheus/blogpost/pdf/<?php echo $rows['pdf_name'];?>" alt="Plantheus" height="400px">
        <!-- Visible only on xs, Visible only on sm, Visible only on md (would show on small and medium screens)-->
        <img class="card-img-top d-block d-sm-none d-none d-sm-block d-md-none" src="/plantheus/blogpost/pdf/<?php echo $rows['pdf_name'];?>" alt="Plantheus" height="270px">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> <?php echo $rows['category'];?></a></li>
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-tag"></i> <?php echo $rows['tag'];?></a></li>
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-comments"></i> Comments (<?php echo $count; ?>)</a></li>
            </ol>
          </nav>
        </div>

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $rows['postDesc'];?></p>
        <p><?php echo $rows['postCont'];?></p>
              <?php  }   }    ?> 
              <!-- AddToAny BEGIN -->
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
          <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a> -->
          <a class="a2a_button_facebook btn"></a>
          <a class="a2a_button_twitter"></a>
          <a class="a2a_button_email"></a>
          <a class="a2a_button_pinterest"></a>
          <a class="a2a_button_whatsapp"></a>
          <a class="a2a_button_telegram"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->        
        <div class="container">
          <h2>Comments <i>(<?php echo $count; ?>)</i></h2>
          <hr class="hr-green2">
        </div><br>
            <?php

            // if (isset($_POST['submit'])) {
            // $redern_link = $_SERVER['HTTP_REFERER'];
            // $commentor_name = mysqli_real_escape_string($conn, $_POST['commentor_name']);
            // $commentor_email = mysqli_real_escape_string($conn, $_POST['commentor_email']);
            // $comment_body = mysqli_real_escape_string($conn, $_POST['comment_body']);
            // $post_id = mysqli_real_escape_string($conn, $_POST['post_id']);
            // $comment_id = rand (345199, 997690);
            
            // $created_at = date('F j, Y ');
            // $updated_at = date('F j, Y ');

            // $query5 = mysqli_query($conn, "INSERT INTO blog_comments(user_name, user_email, post_id, comment_id, body, created_at, updated_at) VALUES('$commentor_name', '$commentor_email', '$post_id', '$comment_id', '$comment_body', '$created_at', '$updated_at') ");
            //  // // die(mysqli_error($conn));
            //   if ($query5) {
            //     // header('Location:'. $_SERVER['HTTP_REFERER']);
            //     echo $_SERVER['HTTP_REFERER'];
            //     # code...
            //   }else{
            //     echo "bad";
            //   }
            // }
                    if ($count) {
                  $countcomment = mysqli_query($conn, "UPDATE blog_posts SET countcomment = $count WHERE id = $idd");
                  # code...
                }
                    $comments_query_result = mysqli_query($conn, "SELECT * FROM blog_comments WHERE post_id='$post_id' ");
                     if ($comments_query_result->num_rows>0){
                      while($rows=$comments_query_result->fetch_assoc()){
                      $comment_id = $rows['comment_id'];
                        ?>
        <!-- Single Comment -->
        <div class="media mb-4">
            <?php echo
            "<img class='d-flex mr-3 rounded-circle' src='http://placehold.it/50x50'>" ?>
            <div class="media-body">
                <h5 class="mt-0"><?php echo $rows['user_name'];?>
                  <span class="pull-right">
                    <a href="#replycomment2<?php echo $echo.$comment_id;?>" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Reply <i class="fa fa-reply"></i>
                    </a>
                  </span>
                </h5>  
               <p class="mg-btm-3"><?php echo $rows['body'];?></p>
              <small class='text-muted'></small>
              <?php
                $queryreply = mysqli_query($conn, "SELECT * FROM replies WHERE comment_id = '$comment_id' ");
                 if ($queryreply->num_rows>0){
                 while($rowsreply=$queryreply->fetch_assoc()){
                  $replyname = $rowsreply['user_name'];
                  $replybody = $rowsreply['body'];
                  $reply_idd = $rowsreply['reply_id'];
                  $reply_id2 = $rowsreply['reply_id'];
                ?>
              <div class="media mt-4">
                <div class='media-body'>             
                <h5 class="mt-0"><?php echo $replyname; ?><span class="pull-right"><a href="#replycomment2<?php echo $echo.$reply_idd;?>" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Reply <i class="fa fa-reply"></i></a></span></h5>  
                <p class="mg-btm-3"><?php echo $replybody; ?></p>
                <small class='text-muted'></small>
                <?php
                $subreply = mysqli_query($conn, "SELECT * FROM sub_replies WHERE reply_id = '$reply_id2'");
                 if ($subreply->num_rows>0){
                 while($rowssub=$subreply->fetch_assoc()){
                  $subreply1 = $rowssub['subreply_name'];
                  $subbody = $rowssub['subreply_body'];
                ?>
               
                <!--SUB-REPLY-->
                <div class="media mt-4">
                  <div class="media-body">
                    <h5 class="mt-0"><?php echo $subreply1;?></h5>  
                    <p class="mg-btm-3"><?php echo $subbody;?></p>
                    <small class="text-muted"></small>
                  </div>
                </div>  
                <?php
                  }
                }
                ?>
                <!-- REPLY COMMENT COLLAPSE -->
               <div class="collapse card my-4" id="replycomment2<?php echo $echo.$reply_idd;?>">
                <h5 class="card-header text-bold">Leave a Reply:<br>
                  <small>Your email address will not be published. Required fields are marked *</small>
                </h5>
                <div class="card-body">
                  <form action="subreply.php" method="POST">
                    <div class="row">
                      <div class="col-lg-6 form-group">
                      <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">
                      <input type="hidden" name="post_id" value="<?php echo $rows['post_id']?>">
                      <input type="hidden" name="reply_id2" value="<?php echo $reply_id2?>">
                      <input type="text" name="subreply_name" class="form-control" placeholder="*Enter Your Name" required="" oninvalid="setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input type="email" name="subreply_email" class="form-control" placeholder="*Enter Your Email" required="" oninvalid="setCustomValidity('Please Enter Your Email Address')" oninput="setCustomValidity('')">    
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="subreply_body" rows="6" style="resize: none" placeholder="*Leave a Reply" required="" oninvalid="setCustomValidity('Please type a comment')"  oninput="setCustomValidity('')"></textarea>
                  </div>
                  <button type="submit" name="subreply" class="btn btn-outline btn-xl text-dark get-app">Reply</button>
                </form>
              </div>
              </div>
              </div>
            </div>
            
              <?php 
                        }
                      }
                      ?>
            
              <!-- REPLY COMMENT COLLAPSE -->
               <div class="collapse card my-4" id="replycomment2<?php echo $echo.$comment_id;?>">
                <h5 class="card-header text-bold">Leave a Reply:<br>
                  <small>Your email address will not be published. Required fields are marked *</small>
                </h5>
                <div class="card-body">
                  <form action="replycomment.php" method="POST">
                    <div class="row">
                      <div class="col-lg-6 form-group">
                      <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">
                      <input type="hidden" name="post_id" value="<?php echo $rows['post_id']?>">
                      <input type="text" name="replier_name" class="form-control" placeholder="*Enter Your Name" required="" oninvalid="setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input type="email" name="replier_email" class="form-control" placeholder="*Enter Your Email" required="" oninvalid="setCustomValidity('Please Enter Your Email Address')" oninput="setCustomValidity('')">    
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="reply_body" rows="6" style="resize: none" placeholder="*Leave a Reply" required="" oninvalid="setCustomValidity('Please type a comment')"  oninput="setCustomValidity('')"></textarea>
                  </div>
                  <button type="submit" name="reply" class="btn btn-outline btn-xl text-dark get-app">Reply</button>
                </form>
              </div>
              </div>
            </div>
          </div>
          <?php 
          }
          } ?>

        
      
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header text-bold">Leave a Comment:<br>
            <small>Your email address will not be published. Required fields are marked *</small>
          </h5>

          <div class="card-body">
            <form action="comment_post.php" method="POST">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="hidden" name="post_id" value="<?php echo $post_id;?>">
                  <input type="text" name="commentor_name" class="form-control" placeholder="*Enter Your Name" required="" oninvalid="setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" name="commentor_email" class="form-control" placeholder="*Enter Your Email" required="" oninvalid="setCustomValidity('Please Enter Your Email Address')" oninput="setCustomValidity('')">    
                </div>
              </div>
              <div class="form-group">
                <textarea name="comment_body" class="form-control" rows="6" style="resize: none" placeholder="*Leave a Comment" required="" oninvalid="setCustomValidity('Please type a comment')"  oninput="setCustomValidity('')"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-outline btn-xl text-dark get-app">Submit</button>
            </form>
          </div>
        </div>
            <?php
            $query22 = mysqli_query($conn, "SELECT * FROM blog_posts WHERE id = '$idd' - 1 ");
            // $fecthname = mysqli_fetch_array($query22);
            $query33 = mysqli_query($conn, "SELECT * FROM blog_posts WHERE id = '$idd' + 1 ");
            // $fecthname2 = mysqli_fetch_array($query33);
            ?>
        <!-- Pagination -->
        <!-- Prev -->
        <ul class="pagination justify-content-center mb-4">
          <?php
         if ($query22->num_rows >= "") {
          while($rb1=$query22->fetch_assoc()){
            $previd = $rb1['id'];
            $prevname = $rb1['postTitle'];?>
          <li class="page-item">
            <a class="page-link" href="post.php?id=<?php echo $prevname;?>" style="color: #0a783c"><i class="fa fa-arrow-left"></i> <?php
            echo $rb1['postTitle'];
            }
           }
           ?></a>            
          </li>
          <!-- Next -->
           <?php
          if ($query33->num_rows >= "") {
          while($rb=$query33->fetch_assoc()){
            $nextid = $rb['id'];
            $nextname = $rb['postTitle'];?>
          <li class="page-item">
            <a class="page-link" href="post.php?id=<?php echo $nextname;?>" style="color: #0a783c"><?php echo $rb['postTitle'];?> <i class="fa fa-arrow-right"></i>
              <?php
            }}?></a>
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