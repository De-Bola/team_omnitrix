<?php
require_once "config.php";
ob_start();
session_start();

$con= mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'b062478d1a3650', 'b001748f');
mysqli_select_db( $con,'Omnitrix_Userdata');

$name= $_POST['username'];
$pass= $_POST['password'];

$user_pass = mysqli_query( $con,("SELECT * FROM user WHERE username = '$name' && apassword = 'pass'"));

$check = mysqli_num_rows($user_pass);

if($check ==1) {
    header(' Location:landing.php' );
} else {
    header(' Location:login.php ');

    echo "Username Or Password Incorrect";
}

?> 
