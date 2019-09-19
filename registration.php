<?php
require_once "config.php";
ob_start();
session_start();

$fullname=$_POST['fullname'];
$email= $_POST['email'];
$mobile= $_POST['mobileno'];
$name= $_POST['username'];
$pass= $_POST['apassword'];
$pass2= $_POST['cpassword'];

//mysql://b062478d1a3650:b001748f@us-cdbr-iron-east-02.cleardb.net/heroku_0c1823c70ba370e?reconnect=true

$con= mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'b062478d1a3650', 'b001748f');
mysqli_select_db( $con,'Omnitrix_Userdata');

$user = mysqli_query( $con,("SELECT * FROM user WHERE username = '$name'"));
$mail = mysqli_query( $con,("SELECT * FROM user WHERE email = '$email'"));
$tel = mysqli_query( $con,("SELECT * FROM user WHERE mobileno = '$mobile'"));

$num = mysqli_num_rows($user);
$num2 = mysqli_num_rows($mail);
$num3= mysqli_num_rows($tel);
           
    if ($pass==$pass2 && $num==0 && $num2==0 && $num3==0)
    
    {
       mysqli_query($con,("INSERT INTO user(fullname, email, mobileno, username, apassword, cpassword) VALUES 
    ('$fullname', '$email', '$mobile', '$name','$pass','$pass2')"));
         header('location:landing.php');
    }
         elseif ($num==1) {

        $message = "Username Already Taken";
        echo "<script type='text/javascript'>alert('$message');</script>";
            } elseif ($pass!= $pass2) 
        
        {
         $message2= "PASSWORDS DO NOT MATCH";
        echo "<script type='text/javascript'>alert('$message2');</script>";
        } elseif ($num2==1)
        {
            $message3 = "Email Address Already In Use";
            echo "<script type='text/javascript'>alert('$message3');</script>";

        } elseif ($num3==1){
            $message4 = "Mobile Number In Use";
           echo "<script type='text/javascript'>alert('$message4');</script>";
        }

    
           elseif($fullname || $email || $mobile || $name || $pass || $pass2) {
            
                $message5 = "FILL ALL FEILDS";
                echo "<script type='text/javascript'>alert('$message5');</script>";
             }    

?>
