<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include './modul/head.php'; ?>
  <link rel="stylesheet" href="style.css">  
</head>
<body style="background: black">
  <!-- NAVBAR -->
  <?php include './modul/navbaruser.php'; ?>
  <!-- Onboard -->
  <div class="container-fluid formlogin">
    <div class="justify-content-center h-100 kotak">
        <div class="d-flex justify-content-center judulprofile">
          <h1>Profile</h1>
        </div>
        
        <div class="container padding-profile rounded" style="background-color: white; padding: 30px;margin-bottom: 40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
          <?php include "content.php"; ?>
          <div class="d-flex justify-content-center" style="margin-top:1em">
          <?php
            if(isset ($_GET['error']))  { ?>
            <div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
            <?php } 
            ?>
            </div>
          </div>
        </div>
 
      </div>
    </div>
  </div>
    <!-- Penutup onboard  -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php include './modul/scrpt.php'; ?>
</body>
</html>