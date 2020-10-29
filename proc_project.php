<?php
include_once 'dbConn.php';
if(isset($_POST['save2']))
{	 
	//  $first_name = $_POST['Darb_on_project'];
	 $projects = $_POST['projektas'];
	
	 $sql = "INSERT INTO proj (projektas)
	 VALUES ('$projects')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	//  header("location: index.php");
	 header("location:./?path=project");
}
?>