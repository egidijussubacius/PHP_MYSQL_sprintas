<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from darb where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['name'];
    $projects = $_POST['fk_id'];
	
    $edit = mysqli_query($conn,"UPDATE darb set name='$fullname', fk_id='$projects' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:./?path=employees"); // redirects to all records page
        exit;
    }

//     SELECT darb.id, name, projektas from proj
// join darb on darb.fk_id=proj.id
   	
}
?>

<h3>Update Data</h3>

<form method="POST">
Update Name:<br>
  <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Update the name" Required> <br><br>
  Update Procject - (1 = JAVA, 2 = PHP, 3 = JS)<br>
  <input type="text" name="fk_id" pattern="^(1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20).*$" value="<?php echo $data['fk_id'] ?>" placeholder="Enter Procject - (1 = JAVA, 2 = PHP, 3 = JS)" Required> <br><br>
  <input type="submit" name="update" value="Update">
</form>