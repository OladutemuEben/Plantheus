

  <!-- Sidebar Widgets Column -->

  <div class="col-lg-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <form method="post" action="searchresult.php">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search for..." required="" oninvalid="setCustomValidity('Please type something in the search box')" oninput="setCustomValidity('')">&nbsp;&nbsp;
            <span class="input-group-name">
              <button class="btn btn-outline text-dark get-app form-control" type="submit" name="submit">Go!</button>
            </span>
          </div>
        </form>
      </div>
    </div>
               
    <!-- Categories Widget -->


    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
               <a href="category.php?category=<?php echo 'Agriculture' ?>">Agriculture</a>
              </li>
              <li>
                <a href="category.php?category=<?php echo 'Gardening' ?>">Gardening</a>
              </li>
              <li>
                <a href="category.php?category=<?php echo 'Making Money' ?>">Making Money</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Plants Talk' ?>">Plants Talk</a>
              </li>
              <li>
                <a href="category.php?category=<?php echo 'Technology' ?>">Technology</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Tags</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-7">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Agriculture' ?>" class="tag">Agriculture</a>
              </li>
            </ul>
          </div>
          <div class="col-5">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Farmers' ?>" class="tag">Farmers</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'The Future' ?>" class="tag">The Future</a>
              </li>
            </ul>
          </div>
          <div class="col-5">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Farming' ?>" class="tag">Farming</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Youth Engagement' ?>" class="tag">Youth Engagement</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Beginnings' ?>" class="tag">Beginnings</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'The Sprouting of a Seed' ?>" class="tag">The Sprouting of a Seed</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Climate Smart Agriculture' ?>" class="tag">Climate Smart Agriculture</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'Renewable Energy in Agriculture' ?>" class="tag">Renewable Energy in Agriculture</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="category.php?category=<?php echo 'The Instrumentality of E-Agriculture' ?>" class="tag">The Instrumentality of E-Agriculture</a>
               </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    