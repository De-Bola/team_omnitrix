<?php
require_once "config.php";
ob_start();
session_start();

//mysql://b062478d1a3650:b001748f@us-cdbr-iron-east-02.cleardb.net/heroku_0c1823c70ba370e?reconnect=true
​
$con= mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'b062478d1a3650', 'b001748f');​

name= $_POST['username'];
$pass= $_POST['apassword'];

$user_pass = mysqli_query( $con, "SELECT * FROM user WHERE username = '$name' && apassword= 'pass'");

$check = mysqli_num_rows($user_pass);

if($check ==1) {
    header(' Location:landing.php' );
} else {
    header(' Location:login.php ');

    echo "Username Or Password Incorrect";
}

?> 
