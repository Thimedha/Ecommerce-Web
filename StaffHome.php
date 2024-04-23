<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="bg-dark">

	<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<title>Bauhinia/Staff/Home</title>
	</head>
	<body class="bg-dark">


		<nav class="navbar navbar-expand-lg navbar-light bg-warning">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><b>Bauhinia</b></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="StaffHome.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="ManageProducts.php">Manage Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="StaffRegister.php">Staff Registration</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Product Report</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Sales Report</a>
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
			<div class="col-md-2">

			</div>


			<div class="col-md-8">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="200.jpg" height="550px" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block text-warning">
								<h2>Bauhinia's Product Management</h2>
							</div>
						</div>
						<div class="carousel-item">
							<img src="201.jpg" height="550px" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block text-warning">
								<h2>Bauhinia's Staff Registration</h2>
							</div>
						</div>
						<div class="carousel-item">
							<img src="202.jpg" height="550px" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block text-warning">
								<h2>Bauhinia's Product Report</h2>
							</div>
						</div>
						<div class="carousel-item">
							<img src="203.jpg" height="550px" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block text-warning">
								<h2>Bauhinia's Sales Report</h2>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<br><br>

			</div>
			
			<!-- cards -->
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="width: 18rem;">
						<img src="200.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Product Management</h5>
							<p class="card-text">The product management module in BAUHINIA's Inventory Management System streamlines handling of products, including adding and updating item details. Real-time tracking of availability and stock monitoring ensures timely replenishment. It optimizes inventory control, enhancing efficiency for BAUHINIA Clothing.</p>
							<a href="ManageProducts.php" class="btn btn-dark">Manage</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="width: 18rem;">
						<img src="201.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Staff Registration</h5>
							<p class="card-text">The staff registration feature in the BAUHINIA Inventory Management System allows authorized personnel to securely access the system. It ensures effective role performance and contributes to streamlined inventory management.</p><br><br><br>
							<a href="StaffRegister.php" class="btn btn-dark">ADD</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="width: 18rem;">
						<img src="202.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Product Report</h5>
							<p class="card-text">The product report feature in the BAUHINIA Inventory Management System provides daily insights on order requests and product availability. It helps the Production Manager monitor order status and optimize inventory control, enhancing operational efficiency.</p><br><br>
							<a href="#" class="btn btn-dark">Watch</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="width: 18rem;">
						<img src="203.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Sales Report</h5>
							<p class="card-text">The sales report feature in the BAUHINIA Inventory Management System generates monthly reports on income and sales performance. It enables the Chief Accountant to analyze revenue data, aiding in informed financial decisions and contributing to the success of BAUHINIA Clothing.</p><br>
							<a href="#" class="btn btn-dark">Watch</a>
						</div>
					</div>
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
							<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
								<!-- Content -->
								<h6 class="text-uppercase fw-bold mb-4">
									<i class="fas fa-gem me-3 text-secondary"></i>Bauhinia
								</h6>
								<p class="text-reset">
									Welcome to Bauhinia, your ultimate destination for stylish and trendy fashion in Sri Lanka. Explore our diverse collection of clothing, accessories, and footwear for men, women, and kids. With a commitment to quality and the latest fashion trends, Bauhinia offers an exceptional online shopping experience that caters to your unique style needs.
								</p>
							</div>
							<!-- Grid column -->

							<!-- Grid column -->

							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
								<!-- Links -->
								<h6 class="text-uppercase fw-bold mb-4">
									Useful links
								</h6>
								<p>
									<a href="#!" class="text-reset">Privacy Policy</a>
								</p>
								<p>
									<a href="#!" class="text-reset">Terms of Service</a>
								</p>
								<p>
									<a href="#!" class="text-reset">Go Premium</a>
								</p>
								<p>
									<a href="#!" class="text-reset">Help</a>
								</p>
							</div>
							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
								<!-- Links -->
								<h6 class="text-uppercase fw-bold mb-4">Contact</h6>
								<p><i class="fas fa-home me-3 text-secondary"></i> Sri Lanka, Colombo 7 10012, SL</p>
								<p>
									<i class="fas fa-envelope me-3 text-secondary"></i>
									info@bauhinia.com
								</p>
								<p><i class="fas fa-phone me-3 text-secondary"></i> + 94 77 067 1700</p>
								<p><i class="fas fa-print me-3 text-secondary"></i> + 94 77 067 1705</p>
							</div>
							<!-- Grid column -->
						</div>
						<!-- Grid row -->
					</div>
				</section>
				<!-- Section: Links  -->

				<!-- Copyright -->
				<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
					© 2023 Copyright:
					<a class="text-reset fw-bold" href="https://mdbootstrap.com/">Bauhinia.com</a>
				</div>
				<!-- Copyright -->
			</footer>


			<!-- Optional JavaScript; choose one of the two! -->

			<!-- Option 1: Bootstrap Bundle with Popper -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

			<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>











</body>
</html>