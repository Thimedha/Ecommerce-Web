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
$FirstName = $_POST ['FirstName'];
$LastName = $_POST ['LastName'];
$NIC = $_POST ['NIC'];
$Designation = $_POST ['Designation'];
$DOB = $_POST ['DOB'];
$Address = $_POST ['Address'];
$Contact = $_POST ['Contact'];
$Email = $_POST ['Email'];





$sql = "INSERT INTO staff (First_Name, Last_Name, NIC, Designation, DOB,  Address, Contact_Number, Email) VALUES ('$FirstName', '$LastName', '$NIC', '$Designation', '$DOB', '$Address', '$Contact', '$Email')";

if($con ->query($sql)===True){
	echo '<script type="text/javascript">';
echo ' alert("Record Added Successfully")';
echo '</script>';
}
}

if (isset($_POST["update"])){
	
$StaffID = $_POST['StaffID'];
$FirstName = $_POST ['FirstName'];
$LastName = $_POST ['LastName'];
$NIC = $_POST ['NIC'];
$Designation = $_POST ['Designation'];
$DOB = $_POST ['DOB'];
$Address = $_POST ['Address'];
$Contact = $_POST ['Contact'];
$Email = $_POST ['Email'];


$sql = "UPDATE staff SET First_Name = '$FirstName', Last_Name = '$LastName', NIC = '$NIC', Designation = '$Designation', DOB = '$DOB', Address = '$Address', Contact_Number = '$Contact', Email = '$Email'
WHERE Staff_ID = '$StaffID'";

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
$StaffID = $_POST['StaffID'];

$sql = "DELETE FROM staff WHERE Staff_ID=$StaffID";

if ($con->query($sql) === TRUE) {
  echo '<script type="text/javascript">';
echo ' alert("Record Deleted Successfully")';
echo '</script>';
} else {
  echo "Error deleting record: " . $conn->error;
}
}


if (isset($_POST["search"])){
$StaffID = $_POST['StaffID'];

$sql = "SELECT Staff_ID, First_Name, Last_Name, NIC, Designation, DOB, Address, Contact_Number, Email FROM staff where Staff_ID = '$StaffID'";
$result = $con->query($sql);

if ($result->num_rows > 0){
	// Output data of each row
	while($row = $result->fetch_assoc()){
		echo "Staff_ID: ". $row["Staff_ID"]. " FName: " . $row["First_Name"]. "LName" . $row["Last_Name"]. "NIC: " . $row["NIC"]. "Designation: " . $row["Designation"]. "DOB: " .$row["DOB"].  "Address: " .$row["Address"]. "Contact: " .$row["Contact_Number"].  "Email: " .$row["Email"]."<br>";
		
	}
	
} else {
	echo "0 results";
}
}
?>


</body>
</html>
