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
$Name = $_POST ['Name'];
$Email = $_POST ['Email'];
$ContactNumber = $_POST ['ContactNumber'];
$Message = $_POST ['Message'];


$sql = "INSERT INTO contact_us (Name, Email_Address, Contact_Number, Message) VALUES ('$Name', '$Email', '$ContactNumber', '$Message')";

if($con ->query($sql)===True){
echo '<script type="text/javascript">';
echo ' alert("Your Enquiry Successfull")';
echo '</script>';
}
}

?>


</body>
</html>
