
        <?php
        include "conn.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM blog_posts WHERE id= $id  ";
        $result = $conn->query($sql);

             if ($result){
             	//echo "success";
             	header("location:post.php");
             }
             else{
             	echo "Please try again" .$conn->error;
             }



        ?>
