<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//mysql://b062478d1a3650:b001748f@us-cdbr-iron-east-02.cleardb.net/heroku_0c1823c70ba370e?reconnect=true
define('DB_SERVER', 'us-cdbr-iron-east-02.cleardb.net');
define('DB_USERNAME', 'b062478d1a3650');
define('DB_PASSWORD', 'b001748f');
define('DB_NAME', 'heroku_0c1823c70ba370e');
define('DB_DRIVER', 'myspli');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'b062478d1a3650', 'b001748f', 'heroku_0c1823c70ba370e');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
