<?php
  session_start();
  if(isset ($_GET['status']))  { 
    
    echo '<script language="javascript">';
    echo 'alert("'.$_GET['status'].'")';
    echo '</script>';
  }; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Projek Omega</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- Font -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">  
</head>
<body>
  <?php 
    if(isset($_SESSION['session_id'])){
      include 'modul/navbaruser.php';
    }
    else{
      include 'modul/navbar.php';
    }
  ?>
  <?php 
    if(isset($_SESSION['session_id'])){
      include 'modul/onboarduser.php';
    }
    else{
      include 'modul/onboard.php';
    }
  ?>
   <!-- Quick Shop -->
   <?php include 'modul/grid.php'; ?>
    <!-- Penutup Quick Shop -->

    <!-- Table  -->
    <?php include 'modul/tablepc.php'; ?>
    <!-- Table -->

    <!-- Panel -->
    <?php include 'modul/panel.php'; ?>
    <!-- Akhir Panel -->

    <!-- DISCOUNT LIST -->
    <?php include 'modul/sale.php'; ?>
    <!-- Akhir Discount List -->

    <div class="footer">
				<p class="copy">Copyright 20XX. Bagas Prabaswara</p>
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include 'modul/scrpt.php'; ?>

</body>
</html>