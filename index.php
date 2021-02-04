<!-- ************************************************************** -->

<!-- all the areas you may wish to change are highlighted like this. -->

<!-- ************************************************************** -->

  <?php 
  
  $page = 'home';
  
  require_once('inc/header-inc.php');?>

  <?php require_once('inc/nav-inc.php');?>
  <!-- Page Content -->
  <div class="container">

    <div class="row toprow" > 

    <?php require_once('inc/left-nav-inc.php') ?>



      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <!-- ************************************************************** -->
        <!-- ************************************************************** -->
        <div class="row">
          <div class="col">
            <h2>Admin dashboard</h2>
          </div>
        </div>

        <!-- ************************************************************** -->



        <div class="row">

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">

              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Courses</a>
                </h4>
                <!-- ********************************************************** -->

                <!-- query to list the number of live courses -->
                <p class="card-text">There are x live courses</p>
                <!-- ********************************************************** -->

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">

              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Modules</a>
                </h4>
                <!-- ********************************************************** -->
                <!-- query to list the number of live courses -->

                <p class="card-text">There are x live modules.</p>

                <!-- ********************************************************** -->
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          



          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">

              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Students</a>
                </h4>
             
                <p class="card-text">There are X active students
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">

              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Tutors</a>
                </h4>
            
                <p class="card-text">There are x live tutors.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

       
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php require_once('inc/footer-inc.php');?>