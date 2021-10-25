<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $nama_database="db_omega";
  $db = mysqli_connect($server,$user,$password,$nama_database);
  if(!$db){
    die("Gagal terhubung dengan DB: " .mysqli_connect_error());
  }

?>