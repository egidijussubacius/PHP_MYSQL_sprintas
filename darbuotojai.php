<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>


<h3><em>-Employee Table-</em></h3>


<table id="table">
  <thead>
    <td>ID.</td>
    <td>Name</td>
    <td>Projects</td>
    <td>Edit</td>
    <td>Delete</td>
  </thead>


<?php

include "dbConn.php";
 // Using database connection file here

$sql = mysqli_query($conn,"SELECT darb.id, name, projektas from proj
join darb on darb.fk_id=proj.id"); // fetch data from database

while($data = mysqli_fetch_array($sql))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['projektas']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>


<form method="post" action="proc.php" class="inputas_tekstas">
		Enter name:<br>
		<input type="text" name="name" class="inputas1">
		<br>
		Enter Project - (1 = JAVA, 2 = PHP, 3 = JS)(choose the number from table below)<br>
    <input type="text"  name="fk_id" pattern="^(1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20).*$" class="inputas1">
		<br>
		<input type="submit" name="save" value="submit" class="inputas_submit">
  </form>
  
  <h3><em>-Choose the number-</em></h3>
  <table id="table2">
  <tr>
    <td>Enter project Number.</td>
    <td>Project Number value</td>
  </tr>
 

<?php

include "dbConn.php";
 // Using database connection file here

$sql = mysqli_query($conn,"SELECT * FROM proj;"); // fetch data from database

while($data = mysqli_fetch_array($sql))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['projektas']; ?></td>
  </tr>	
<?php
}
?>
 </table>
  
</body>
</html>