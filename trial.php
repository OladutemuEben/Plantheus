<?php 
$errors = array(); 
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'trial');//hostname, user, password, database name
// if ($conn) {
// 	echo "Good";
// 	# code...
// }else{
// 	echo "Bad";
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <form action="index.php" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationServer01">Full name</label>
            <input type="text" name="fullName" class="form-control" id="validationServer01" placeholder="First name" required>
            <!-- <div class="valid-feedback">
              Looks good!
            </div> -->
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer02">Phone Number</label>
            <input type="text" name="number" class="form-control" id="validationServer02" placeholder="Last name" required>
            <!-- <div class="valid-feedback">
              Looks good!
            </div> -->
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServerEmail">Email</label>
              <input type="text" name="Email Address" class="form-control" id="validationServerEmail" placeholder="Username" required>
              <!-- <div class="invalid-feedback">
                Please choose a username.
              </div> -->
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServerNumber">Number of Copies</label>
              <input type="number" name="copies" class="form-control" id="validationServerNumber" placeholder="Number of Copies" required>
              <!-- <div class="invalid-feedback">
                Please choose a username.
              </div> -->
          </div>
        </div>
       <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
     </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>