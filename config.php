<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $cleardb_url["us-cdbr-iron-east-02.cleardb.net"];
$username = $cleardb_url["b062478d1a3650"];
$password = $cleardb_url["b001748f"];
$dbname = $cleardb_url["heroku_0c1823c70ba370e"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}
?>
