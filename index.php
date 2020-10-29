<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprintas II V1.0</title>
    <link rel="stylesheet" href="normalise.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Shadows+Into+Light&family=Syne+Tactile&display=swap" rel="stylesheet">
</head>
<body>
<h3>Sprinto darbas II </h3>
<header>
<div class="list">
<div class="li1">
<li>
 <a href="./?path=project">Project</a>
</li>
</div>
</div>
<br>
<div class="list">
<div class="li1">
<li>
  <a href="./?path=employees">Employees</a>
</li>
</div>
</div>
<br>

</header>
<br>
<main>
<?php
  $path = $_GET['path']??"project";
  if ($path == "project") {
      include("projektai.php");
  } else if ($path == "employees") {
      include("darbuotojai.php");
  }
  ?> 
  </main>
  <footer>
  <h3>The end</h3>
  </footer>
</body>

</html>
