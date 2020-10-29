<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE from proj where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:./?path=project"); // redirects to all records page
    exit;	
}
else
{
    echo "Cannot Delete Project's with active users"; // display error message if not delete
}
?>