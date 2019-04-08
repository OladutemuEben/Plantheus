<?php include_once 'head.php';?>
  <?php include_once 'nav.php';?>
  
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4 text-bold">Post Title</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <!-- Hidden only on xs, Hidden only on sm, Hidden only on md  (would show on large screens)-->
          <img class="card-img-top d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" src="/plantheus/img/farmer.jpg" alt="Plantheus" height="400px">
          <!-- Visible only on xs, Visible only on sm, Visible only on md (would show on small and medium screens)-->
          <img class="card-img-top d-block d-sm-none d-none d-sm-block d-md-none" src="/plantheus/img/farmer.jpg" alt="Plantheus" height="270px">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-center width-adj">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Category</a></li>
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-tag"></i> Tag</a></li>
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-comments"></i> Comment (4)</a></li>
            </ol>
          </nav>
        </div>

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p><br>

        <!-- <hr class="hr-green"><br> -->
        <div class="container">
          <h2>Comments <i>(7)</i></h2>
          <hr class="hr-green2">
        </div><br>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name <span class="pull-right"><a href="">Reply <i class="fa fa-reply"></i></a></span></h5>  
            <p class="mg-btm-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <small class="text-muted">2 mins ago</small>
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name <span class="pull-right"><a href="">Reply <i class="fa fa-reply"></i></a></span></h5>  
            <p class="mg-btm-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <small class="text-muted">2 mins ago</small>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name <span class="pull-right"><a href="">Reply <i class="fa fa-reply"></i></a></span></h5>  
                <p class="mg-btm-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <small class="text-muted">2 mins ago</small>
                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name <span class="pull-right"><a href="">Reply <i class="fa fa-reply"></i></a></span></h5>  
                    <p class="mg-btm-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    <small class="text-muted">2 mins ago</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name <span class="pull-right"><a href="">Reply <i class="fa fa-reply"></i></a></span></h5>  
                <p class="mg-btm-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <small class="text-muted">2 mins ago</small>
              </div>
            </div>

          </div>
        </div>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header text-bold">Leave a Comment:</h5>
          <div class="card-body">
            <form action="#" method="POST">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="commenterName" class="form-control" placeholder="*Enter Your Name" required="" oninvalid="setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" name="commenterName" class="form-control" placeholder="*Enter Your Email" required="" oninvalid="setCustomValidity('Please Enter Your Email Address')" oninput="setCustomValidity('')">    
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="6" style="resize: none" placeholder="*Leave a Comment" required="" oninvalid="setCustomValidity('Please type a comment')"  oninput="setCustomValidity('')"></textarea>
              </div>
              <button type="submit" class="btn btn-outline btn-xl text-dark get-app">Submit</button>
            </form>
          </div>
        </div>
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#" style="color: #0a783c"><i class="fa fa-arrow-left"></i> Title of last post</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#" style="color: #0a783c">Title of next post <i class="fa fa-arrow-right"></i></a>
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