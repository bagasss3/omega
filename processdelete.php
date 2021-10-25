<?php
session_start();
include('config.php');

if(isset($_SESSION['session_id'])){
  $id=$_SESSION['session_id'];

  $sql = "DELETE FROM tbl_user WHERE id=$id";
  $query = mysqli_query($db,$sql);

  if($query){
    header('Location: index.php');
    exit();
  }
  else{
    die('Gagal menghapus');
  }
}
else{
  die("akses dilarang...");
}
?>