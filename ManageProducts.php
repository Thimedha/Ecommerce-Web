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

		<title>Bauhinia/Product Management</title>
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
							<a class="nav-link active" href="ManageProducts.php">Product Management</a>
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
					
					
					
				</div>
				<br><br>

			</div>
			<!-- content -->
			<div class="row">
				<div class="col-md-4" id="">

				</div>
				<div class="col-md-5 bg-dark">
					<form method = "post" action="Manage_Products_Insert_Controller.php" >

						<div class="mb-3">
							<b><h1 class="text-center text-warning">Product Management</h1></b><br>
							<label for="ProductID" class="form-label text-white">Product ID</label>
							<input type="text-white" class="form-control " name="ProductID" id="ProductID"><br>
							<label for="ProductName" class="form-label text-white">Product Name</label>
							<input type="text-white" class="form-control " name="ProductName" id="ProductName">
						</div>
						<div class="mb-3">
							<label for="Quantity" class="form-label text-white">Quantity</label>
							<input type="text-white" class="form-control" name="Quantity" id="Quantity">
						</div>
						<div class="mb-3">
							<label for="" class="form-label text-white">Sizes</label><br>
							<select name="Sizes" id="Sizes" class="text-center">
								<option value="Small">Small</option>
								<option value="Medium">Medium</option>
								<option value="Large">Large</option>
								<option value="XL">XL</option>
								<option value="XXL">XXL</option>
								<option value="XXXL">XXXL</option>
								<option value="50ml">50ml</option>
								<option value="100ml">100ml</option>
								<option value="150ml">150ml</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="Category" class="form-label text-white">Category</label>
							<input type="text-white" class="form-control" name="Category" id="Category">

						</div>
						<div class="mb-3">
							<label for="Price" class="form-label text-white">Price</label>
							<input type="text-white" class="form-control" name="Price" id="Price">
						</div>
						<div class="mb-3">
							<label for="Image" class="form-label text-white">Select Image File to Upload:
							</label>
							<form class="bg-white" action="upload.php" method="post" enctype="multipart/form-data">
								<input type="file" name="Image">
								<input type="submit" name="submit" value="Upload">
							
						</div>
						<br>

					    <button type="submit"  class="btn btn-success" name="insert" >ADD</button>
						<button type="submit"  class="btn btn-warning" name="update" >UPDATE</button>
						<button type="submit"  class="btn btn-primary" name="search" >SEARCH</button>
						<button type="submit"  class="btn btn-danger" name="delete" >DELETE</button>
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