<?php include_once 'head.php';?>
  <?php include_once 'nav.php';?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- Hidden only on xs, Hidden only on sm, Hidden only on md  (would show on large screens)-->
          <img class="card-img-top d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" src="/plantheus/img/farmer.jpg" alt="Plantheus" height="400px">
          <!-- Visible only on xs, Visible only on sm, Visible only on md (would show on small and medium screens)-->
          <img class="card-img-top d-block d-sm-none d-none d-sm-block d-md-none" src="/plantheus/img/farmer.jpg" alt="Plantheus" height="270px">
          <div class="card-body">
            <h2 class="card-title text-bold">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <div class="container no-pad-left">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-center width-adj">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Category</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-tag"></i> Tag</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-comments"></i> Comment (4)</a></li>
                </ol>
              </nav>
            </div>
            <a href="/plantheus/blog/post" class="btn btn-outline btn-xl text-dark get-app">Read More</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- Hidden only on xs, Hidden only on sm, Hidden only on md  (would show on large screens)-->
          <img class="card-img-top d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" src="/plantheus/img/farming.jpg" alt="Plantheus" height="400px">
          <!-- Visible only on xs, Visible only on sm, Visible only on md (would show on small and medium screens)-->
          <img class="card-img-top d-block d-sm-none d-none d-sm-block d-md-none" src="/plantheus/img/farming.jpg" alt="Plantheus" height="270px">
          <div class="card-body">
            <h2 class="card-title text-bold">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <div class="container no-pad-left">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-center width-adj">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Category</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-tag"></i> Tag</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-comments"></i> Comment (4)</a></li>
                </ol>
              </nav>
            </div>
            <a href="/plantheus/blog/post" class="btn btn-outline btn-xl text-dark get-app">Read More</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- Hidden only on xs, Hidden only on sm, Hidden only on md  (would show on large screens)-->
          <img class="card-img-top d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" src="/plantheus/img/leaves.jpg" alt="Plantheus" height="400px">
          <!-- Visible only on xs, Visible only on sm, Visible only on md (would show on small and medium screens)-->
          <img class="card-img-top d-block d-sm-none d-none d-sm-block d-md-none" src="/plantheus/img/leaves.jpg" alt="Plantheus" height="270px">
          <div class="card-body">
            <h2 class="card-title text-bold">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <div class="container no-pad-left">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-center width-adj">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Category</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-tag"></i> Tag</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-comments"></i> Comment (4)</a></li>
                </ol>
              </nav>
            </div>
            <a href="/plantheus/blog/post" class="btn btn-outline btn-xl text-dark get-app">Read More</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item disabled">
            <a class="page-link" href="#" style="color: #0a783c"><i class="fa fa-arrow-left"></i> Prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" style="color: #0a783c">Next <i class="fa fa-arrow-right"></i></a>
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