<?php
session_start();
$blog_id = $_POST['blog_id'];
$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];
$redern_link = $_SERVER['HTTP_REFERER'];
include "../conn.php";
$insert = "INSERT INTO french.comment(name, email, message, blog_id)
VALUES('$name', '$email', '$message', '$blog_id')";
//die($insert);
$query = $conn->query($insert);
if($query){
	echo "your comment has been successfully added <br>";
	header("location:$redern_link"); //redirects to the page that directed it here ..


}
else{
	echo $conn->error;
}
