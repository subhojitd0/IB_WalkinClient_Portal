<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


// $servername= "localhost";
// $dbusername= "u777631262_ibcabs_user";
// $dbpassword= "Ibcabs#$654";
// $dbname= "u777631262_ibcabs_data";


$servername= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "ibbook";


$conn=mysqli_connect($servername,$dbusername,$dbpassword) or die("Database Connection cannot be eshtablished");
mysqli_select_db($conn,$dbname);





?>




	