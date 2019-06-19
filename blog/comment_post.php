 <?php
 session_start();
  include 'conn.php';
 
$redern_link = $_SERVER['HTTP_REFERER'];
$commentor_name = $_POST['commentor_name'];
$commentor_email = $_POST['commentor_email'];
$comment_body = $_POST['comment_body'];
$post_id = $_POST['post_id'];
$comment_id = rand (345199, 997690);


  $created_at = date('F j, Y ');
  $updated_at = date('F j, Y ');

  $query5 = mysqli_query($conn, "INSERT INTO blog_comments(user_name, user_email, post_id, comment_id, body, created_at, updated_at) VALUES('$commentor_name', '$commentor_email', '$post_id', '$comment_id', '$comment_body', '$created_at', '$updated_at') ");
 // die(mysqli_error($conn));
 header('Location:'. $_SERVER['HTTP_REFERER']);
 
 ?>