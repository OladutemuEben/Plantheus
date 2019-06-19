<div class="col-lg-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <form method="post" action="sidebar.php">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search for...">&nbsp;&nbsp;
            <span class="input-group-name">
              <button class="btn btn-outline text-dark get-app form-control" type="submit" name="submit">Go!</button>
            </span>
          </div>
        </form>
      </div>
    </div>


<?php 
  include 'conn.php';

   if (isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $query = mysqli_query($conn, "SELECT * FROM blog_posts  WHERE category LIKE '%".$search."%' OR tag LIKE '%".$search."%' OR postTitle LIKE '%".$search."%' OR postCont LIKE '%".$search."%' OR postDesc LIKE '%".$search."%' OR postDate LIKE '%".$search."%' OR author LIKE '%".$search."%' ");
  
 }
               include 'searchresult.php';
  ?> 

  <!-- Sidebar Widgets Column -->

  