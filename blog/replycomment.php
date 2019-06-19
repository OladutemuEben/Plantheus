 <?php
 session_start();
 
  $redern_link = $_SERVER['HTTP_REFERER'];
  $conn = mysqli_connect('localhost', 'root', '', 'blog');
  $replier_name = $_POST['replier_name'];
  $replier_email = $_POST['replier_email'];
  $reply_body = $_POST['reply_body'];
  $post_id = $_POST['post_id'];
  $reply_id = rand (111199, 999990);
  $comment_id = $_POST['comment_id'];


      $created_at = date('F j, Y ');
      $updated_at = date('F j, Y ');

      $query5 = mysqli_query($conn, "INSERT INTO replies(user_email, user_name, post_id, reply_id, comment_id, body, created_at, updated_at) VALUES('$replier_email', '$replier_name', '$post_id', '$reply_id', '$comment_id', '$reply_body', '$created_at', '$updated_at') ");
      // die(mysqli_error($conn));
         header('Location:'. $_SERVER['HTTP_REFERER']);
 
 ?>

