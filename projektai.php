<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>


<h3>Projects table</h3>

<table id="table">
  <thead>
    <td>ID</td>
    <td>Employees</td>
    <td>Projects</td>
    <td>Edit</td>
    <td>Delete</td>
  </thead>


<?php

include "dbConn.php";
 // Using database connection file here

$sql = mysqli_query($conn,"SELECT  proj.id, group_concat( darb.name SEPARATOR '<>' )  AS 'Darb_on_project', proj.projektas
from proj
join darb on proj.id=darb.fk_id
group by  proj.id, projektas;
"); // fetch data from database

while($data = mysqli_fetch_array($sql))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['Darb_on_project']; ?></td>
    <td><?php echo $data['projektas']; ?></td>    
    <td><a href="edit_project.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete_project.php?id=<?php echo $data['projektas']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>


<form method="post" action="proc_project.php" class="inputas_tekstas">
		Add Project:<br>
		<input type="text" name="projektas" class="inputas1">
		<br>
		<input type="submit" name="save2" value="submit" class="inputas_submit">
	</form>
</body>
</html>