<?php
session_start();
include('admin/vendor/inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include("vendor/inc/head.php"); ?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php"); ?>
  <!-- End Navigation -->

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One -->
        <div class="carousel-item active" style="background-image: url('vendor/img/car-home1.jpg');">
          <div class="carousel-caption d-none d-md-block">
            <h2>Welcome to Vehicle Booking App</h2>
            <p>Book your vehicle in just a few clicks!</p>
          </div>
        </div>
        <!-- Slide Two -->
        <div class="carousel-item" style="background-image: url('vendor/img/car-home2.jpg');">
          <div class="carousel-caption d-none d-md-block">
            <h2>Comfort and Reliability</h2>
            <p>Experience seamless travel with us.</p>
          </div>
        </div>
        <!-- Slide Three -->
        <div class="carousel-item" style="background-image: url('vendor/img/car-home3.jpg');">
          <div class="carousel-caption d-none d-md-block">
            <h2>Wide Range of Vehicles</h2>
            <p>Choose the perfect vehicle for your needs.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <h1 class="my-4 text-center">Why Choose Us?</h1>

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Easy Booking</h4>
          <div class="card-body">
            <p class="card-text">Our user-friendly interface makes vehicle booking quick and hassle-free.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Professional Drivers</h4>
          <div class="card-body">
            <p class="card-text">Our drivers are experienced and committed to your safety.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Section -->
    <h2 class="my-4 text-center">Most Hired Vehicles</h2>
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/toyotaland.png" alt="Toyota Land Cruiser"></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/Subaru_Legacy_Premium_2022_2.jpg" alt="Subaru Legacy"></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/pajerosport.png" alt="Mitsubishi Pajero Sport"></a>
        </div>
      </div>
    </div>

    <!-- Testimonials Section -->
    <h2 class="my-4 text-center">Client Testimonials</h2>
    <div class="row">
      <?php
      $ret = "SELECT * FROM tms_feedback WHERE f_status ='Published' ORDER BY RAND() LIMIT 3";
      $stmt = $mysqli->prepare($ret);

      if ($stmt) {
        $stmt->execute();
        $res = $stmt->get_result();

        while ($row = $res->fetch_object()) {
      ?>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header"><?php echo htmlspecialchars($row->f_uname); ?></h4>
              <div class="card-body">
                <p class="card-text">"<?php echo htmlspecialchars($row->f_content); ?>"</p>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "<p class='text-center'>Unable to load testimonials at this time.</p>";
      }
      ?>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("vendor/inc/footer.php"); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
