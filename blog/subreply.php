 <?php
 session_start(); 
  include 'conn.php';
 
  $subreply_name = $_POST['subreply_name'];
  $subreply_email = $_POST['subreply_email'];
  $subreply_body = $_POST['subreply_body'];
  $post_id = $_POST['post_id'];
  $reply_id2 = $_POST['reply_id2'];
  $comment_id = $_POST['comment_id'];


      $created_at = date('F j, Y ');

      $query5 = mysqli_query($conn, "INSERT INTO sub_replies(subreply_email, subreply_name, reply_id, post_id, comment_id, subreply_body, created_at) VALUES('$subreply_email', '$subreply_name', '$reply_id2', '$post_id', '$comment_id', '$subreply_body', '$created_at') ");
      // die(mysqli_error($conn));
         header('Location:'. $_SERVER['HTTP_REFERER']);
 
 ?>

