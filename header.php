<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Images/logo.jpg" height="100" width="100" alt="..."></a>
      <div class="btn-group">
        <a href="scan.php" class="btn btn-secondary" aria-current="page">Page de Scan</a>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="container-fluid">
          <form class="d-flex" method="POST" action='recherchevisi.php'>
            <input class="form-control me-2" type="search" placeholder="Rechercher des bonbons" aria-label="Recherche" name="recherche">
            <input class="btn btn-outline-success" type="submit" value="Rechercher">
          </form>
        </div>
      </div>
      <div class="btn-group">
        <a href="indexa.php" class="btn btn-outline-secondary" aria-current="page">A</a>
        <a href="indexb.php" class="btn btn-outline-secondary" aria-current="page">B</a>
        <a href="indexc.php" class="btn btn-outline-secondary" aria-current="page">C</a>
        <a href="indexd.php" class="btn btn-outline-secondary" aria-current="page">D</a>
        <a href="indexe.php" class="btn btn-outline-secondary" aria-current="page">E</a>
      </div>
    </div>
    <!-- Button trigger modal -->
    <a href="indexadmin.php" type="button" class="btn btn-danger">
      Administration
    </a>

  </nav>