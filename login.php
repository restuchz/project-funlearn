<?php
session_start();
if(isset($_SESSION["nisn"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$nisn = $_POST['nisn'];
$password = $_POST['password'];

$nisn = stripslashes($nisn);
$nisn = addslashes($nisn);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$result = mysqli_query($con,"SELECT name FROM user WHERE nisn = '$nisn' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["nisn"] = $nisn;
header("location: account.php?q=0");

}
else
header("location:$ref?w=Wrong Username or Password");


?>