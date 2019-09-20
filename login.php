<?php
//require_once "config.php";
ob_start();
session_start();

$con= mysqli_connect('127.0.0.1', 'id10949330_b062478d1a3650', 'b001748f');
mysqli_select_db( $con,'heroku_0c1823c70ba370e');

if (!$con) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 
if(isset($_POST['login'])){
$name= $_POST['username'];
$pass= $_POST['password'];

$user_pass = mysqli_query( $con,("SELECT * FROM heroku_0c1823c70ba370e.user WHERE username = '$name' and apassword = '$pass'"));

$check = mysqli_num_rows($user_pass);

if($check ==1) {
    header(' Location:landing.php' );
} else {
    header(' Location:login.php ');

    echo "Username Or Password Incorrect";
}
mysqli_close($con);}
?> 
