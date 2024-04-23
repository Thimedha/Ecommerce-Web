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
$Address = $_POST ['Address'];
$Email = $_POST ['Email'];
$MobileNumber = $_POST ['MobileNumber'];
$LandphoneNumber = $_POST ['LandphoneNumber'];
$Password = $_POST ['Password'];
$RepeatPassword= $_POST ['RepeatPassword'];


$sql = "INSERT INTO customer (Name, Delivery_Address, Email_Address, Mobile_No, Landphone_Number, Password, Repeat_Password) VALUES ('$Name', '$Address', '$Email', '$MobileNumber' , '$LandphoneNumber', '$Password', '$RepeatPassword')";

if($con ->query($sql)===True){
echo '<script type="text/javascript">';
echo ' alert("Record Added Successfully")';
echo '</script>';
}
}

?>


</body>
</html>
