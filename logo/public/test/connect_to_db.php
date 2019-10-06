<?php
$servername = "remotemysql.com";
$username = "1UtVv3wjuK";
$password = "u1tuOMP1Z9";

try {
$conn = new PDO("mysql:host=$servername;dbname=1UtVv3wjuK", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>