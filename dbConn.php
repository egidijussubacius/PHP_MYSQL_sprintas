<?php
$servername='localhost';
$username='root';
$password='mysql';
$dbname = "test_db";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' );
}
?>