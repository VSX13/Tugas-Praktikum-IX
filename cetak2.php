<?php 
include 'koneksi2.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query('select * from admin');
if (mysqli_connect()) {
echo "welcome"."<br>";
echo "Username"."$username"."<br>";
echo "Password"."$password"."<br>";
}
?>