<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bauhinia/New Customer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="cart.css">
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
              <a class="nav-link active" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ContactUs.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Register.php">New Customer</a>
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
<b><h1 class="text-center text-warning">Your Collect Items</h1></b><br><br>

  <!-- content 01 -->
   <div class="row">
    <div class="col-md-3" id="leftsideimage">
    </div>
  <div class="row">
    <div class="col-md-1" id="centerimage">

    </div>
    <div class="col-md-3 bg-dark ">
      <form>
        
        <div class="mb-3">
          
          <label for="ItemName" class="form-label text-white">Item Name</label>
          <input type="text-white" class="form-control" id="ItemName" value="Bauhinia Prada Candy Night" readonly>
        </div>
        <div class="mb-3">
          <label for="Amount" class="form-label text-white">Amount</label>
          <input type="text-white" class="form-control" id="Amount" value="Rs:19,990.00" readonly>
          <br>
        <button type="submit" class="btn btn-danger">Remove</button><br><br><br><br>
      </form>
    </div>
  </div><br><br>
<!-- content 02 -->
   <div class="row">
    <div class="col-md-3" id="leftsideimage">
    </div>
  <div class="row">
    <div class="col-md-1" id="centerimage2">

    </div>
    <div class="col-md-3 bg-dark ">
      <form>
        
        <div class="mb-3">
          
          <label for="ItemName" class="form-label text-white">Item Name</label>
          <input type="text-white" class="form-control" id="ItemName" value="Bauhinia Navigator Unisex Sunglasses" readonly>
        </div>
        <div class="mb-3">
          <label for="Amount" class="form-label text-white">Amount</label>
          <input type="text-white" class="form-control" id="Amount" value="Rs:31,490.00" readonly>
          <br>
        <button type="submit" class="btn btn-danger">Remove</button><br><br><br><br>
      </form>
    </div>
  </div>

<!-- Delivery  -->
<div class="row">
  <div class="col-md-3" id="h3">
    <b><h3 class="text-warning">Check Your Details</h3></b><br>
    <form>
      <div class="mb-3">
          <label for="DeliveryAddress" class="form-label text-white">Delivery Address</label>
          <input type="text-white" class="form-control" id="DeliveryAddress"  value="120/28, Samagi Mawatha, Magammana, Homagama">
        </div>
        <div class="mb-3">
          <label for="ContactNumber" class="form-label text-white">Contact Number</label>
          <input type="text-white" class="form-control" id="ContactNumber" value="0777575759"><br>
          <label for="Value" class="form-label text-white">Value</label>
          <input type="text-white" class="form-control" id="value" value="Rs:51,480.00" readonly><br>
          <label for="DeliveryChagers" class="form-label text-white">Delivery Chagers(10%)</label>
          <input type="text-white" class="form-control" id="DeliveryChagers" value="Rs:5,148.00" readonly><br>
           <label for="Total Amount" class="form-label text-white">Total Amount</label><br>
          <input type="text-danger" class="form-control" id="TotalAmount" value="Rs:56,628.00" readonly>
        </div>
        <a href="Payment.php" class="btn btn-danger">PROCEED TO CHECKOUT (2) </a></b></button><br><br><br><br>
        

    </form>
  </div>
  
</div>


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