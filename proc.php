<?php
include_once 'dbConn.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['name'];
	 $projects = $_POST['fk_id'];
	
	 $sql = "INSERT INTO darb (name,fk_id)
	 VALUES ('$first_name','$projects')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	 header("location:./?path=employees");
}
?>