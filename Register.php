<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bauhinia/New Customer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-dark">



  <!-- navbar -->
  <!-- Navabar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><b>Bauhinia</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Women.php">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Men.php">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Kids.php">Kids</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Accessories.php">Accessories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AboutUs.php">About Us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Register.php">New Customer</a>
          </li>



        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <br><br>

  <!-- content -->
  <div class="row">
    <div class="col-md-6" id="leftsideimage">

    </div>
    <div class="col-md-6 bg-dark">
      <form method = "post" action="Customer_Insert_Controller.php">

        <div class="mb-3">
          <b><h1 class="text-center text-warning">Bauhinia's Customer Registration</h1></b>
          <label for="Name" class="form-label text-white">Name</label>
          <input type="text-white" class="form-control" name="Name" id="Name">
        </div>
        <div class="mb-3">
          <label for="Address" class="form-label text-white">Delivery Address</label>
          <input type="text-white" class="form-control" name="Address" id="Address">
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label text-white">Email Address</label>
          <input type="text-white" class="form-control" name="Email" id="Email">
        </div>
        <div class="mb-3">
          <label for="MobileNumber" class="form-label text-white">Mobile Number</label>
          <input type="text-white" class="form-control" name="MobileNumber" id="MobileNumber">
        </div>
        <div class="mb-3">
          <label for="LandphoneNumber" class="form-label text-white">Landphone Number</label>
          <input type="text-white" class="form-control" name="LandphoneNumber" id="LandphoneNumber">
        </div>
        <div class="mb-3">
          <label for="Password" class="form-label text-white">Password</label>
          <input type="password" class="form-control"  name="Password"id="Password">
        </div>
        <div class="mb-3">
          <label for="RepeatPassword" class="form-label text-white">Repeat Password</label>
          <input type="password" class="form-control" name="RepeatPassword" id="RepeatPassword">
        </div>
        <button type="submit" class="btn btn-success" name="insert">Register</button>
      </form>
    </div>
  </div>



  <?php


  require 'dbcon.php' ;

  $sql = "select * from customer";
  $res = mysqli_query ($con, $sql) ;
  ?>




  <!-- footer -->
  <!-- Footer -->
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-dark text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->

      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-white">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-white"></i>Bauhinia
            </h6>
            <p class="text-white">
              Welcome to Bauhinia, your ultimate destination for stylish and trendy fashion in Sri Lanka. Explore our diverse collection of clothing, accessories, and footwear for men, women, and kids. With a commitment to quality and the latest fashion trends, Bauhinia offers an exceptional online shopping experience that caters to your unique style needs.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-white">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-white">Privacy Policy</a>
            </p>
            <p>
              <a href="#!" class="text-white">Terms of Service</a>
            </p>
            <p>
              <a href="#!" class="text-white">Go Premium</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p class="text-white"><i class="fas fa-home me-3 text-secondary"></i> Sri Lanka, Colombo 7 10012, SL</p>
            <p class="text-white">
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@bauhinia.com
            </p>
            <p class="text-white"><i class="fas fa-phone me-3 text-secondary"></i> + 94 77 067 1700</p>
            <p class="text-white"><i class="fas fa-print me-3 text-secondary"></i> + 94 77 067 1705</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-white" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright:
      <a class="text-white fw-bold" href="https://mdbootstrap.com/">Bauhinia.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- End of .container -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>