<DOCTYPE! html>

<html>

<head>

</head>

<body>

<?php

session_start();
include 'dbcon.php';

//Collect details

if (isset($_POST["insert"])){
$ProductName = $_POST ['ProductName'];
$Quantity = $_POST ['Quantity'];
$Sizes = $_POST ['Sizes'];
$Category = $_POST ['Category'];
$Price = $_POST ['Price'];
$Image= $_POST ['Image'];


$sql = "INSERT INTO product_management (Product_Name, Quantity, Sizes, Category, Price, Image) VALUES ('$ProductName', '$Quantity', '$Sizes', '$Category' , '$Price', '$Image')";

if($con ->query($sql)===True){
echo '<script type="text/javascript">';
echo ' alert("Record Added Successfully")';
echo '</script>';
}
}

if (isset($_POST["update"])){
	
$ProductID = $_POST['ProductID'];
$ProductName = $_POST ['ProductName'];
$Quantity = $_POST ['Quantity'];
$Sizes = $_POST ['Sizes'];
$Category = $_POST ['Category'];
$Price = $_POST ['Price'];
$Image= $_POST ['Image'];

$sql = "UPDATE product_management SET Product_Name = '$ProductName', Quantity = '$Quantity', Sizes = '$Sizes', Category = '$Category', Price = '$Price', Image = '$Image'
WHERE Product_ID = '$ProductID'";

if(mysqli_query($con,$sql)) {
echo '<script type="text/javascript">';
echo ' alert("Record Updated Successfully")';
echo '</script>';
}
else{
	echo "Error".$con->error;
}
}

if (isset($_POST["delete"])){

// SQL to delete a record
$ProductID = $_POST['ProductID'];

$sql = "DELETE FROM product_management WHERE Product_ID=$ProductID";

if ($con->query($sql) === TRUE) {
echo '<script type="text/javascript">';
echo ' alert("Record Deleted Successfully")';
echo '</script>';
} else {
  echo "Error deleting record: " . $conn->error;
}
}


if (isset($_POST["search"])){
$ProductID = $_POST['ProductID'];

$sql = "SELECT Product_ID, Product_Name, Quantity, Sizes, Category, Price, Image FROM product_management where Product_ID = '$ProductID'";
$result = $con->query($sql);

if ($result->num_rows > 0){
	// Output data of each row
	while($row = $result->fetch_assoc()){
		echo "Product_ID: ". $row["Product_ID"]. " Product_Name: " . $row["Product_Name"]. "Quantity: " . $row["Quantity"]. "Sizes: " . $row["Sizes"]. "Category: " .$row["Category"].  "Price: " .$row["Price"].  "Image: " .$row["Image"]."<br>";
	}
	
} else {
	echo "0 results";
}
}
?>


</body>
</html>
