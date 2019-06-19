<?php
include 'conn.php';
 $author = $_POST['author'];
  $category = $_POST['category'];
  $tag = $_POST['tag'];
  $postTitle = $_POST['postTitle'];
  $postDesc = $_POST['postDesc'];
  $postCont = $_POST['postCont'];
  $idpost = $_POST['idpost'];
  
  $pdf = $_FILES['pdf']['name'];
  $target = "pdf/".basename($pdf);

$update = "UPDATE blog_posts SET author = '$author', category = '$category', tag = '$tag', postTitle = '$postTitle', pdf_name = '$pdf', postDesc = '$postDesc', postCont = '$postCont' WHERE id = '$idpost' ";
move_uploaded_file($_FILES['pdf']['tmp_name'], $target);
$result = $conn->query($update);
// die(mysqli_error($conn));
if ($result) {
 header("location:post.php");
  // echo "Good update";
  # code...
}else{
  echo "BAD update";
  # code...
}
?>