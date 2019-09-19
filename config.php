<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//mysql://ba36cf7b289e0a:c8385c30@us-cdbr-iron-east-02.cleardb.net/heroku_f624638ced613be?reconnect=true
define('DB_SERVER', 'us-cdbr-iron-east-02.cleardb.net');
define('DB_USERNAME', 'ba36cf7b289e0a');
define('DB_PASSWORD', 'c8385c30');
define('DB_NAME', 'heroku_f624638ced613be');
define('DB_DRIVER', 'myspli');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'ba36cf7b289e0a', 'c8385c30', 'heroku_f624638ced613be');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
