<?php
  session_start();

  include("config.php");

  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!$email && !$password){
      header('Location: login.php?err='.urlencode("Email atau password kosong"));
      exit();
    }
    $sql1 = "SELECT * FROM tbl_user WHERE email = '$email'";
    $q1 = mysqli_query($db,$sql1);
    $r1 = mysqli_fetch_array($q1);

    if($r1['email']==''){
      header('Location: login.php?err='.urlencode("User belum terdaftar"));
      exit();
    }
    else if($r1['password']!=$password){
      header('Location: login.php?err='.urlencode("Password anda salah!"));
      exit();
    }

    $_SESSION['session_email']=$email;
    $_SESSION['session_id']=$r1['id'];
    /*ngambil semua nama kec nama terakhir
    $parts = explode(" ",$r1['nama']);
    array_pop($parts);
    $_SESSION['session_name']=implode(" ",$parts);
    */
    $fname = explode(" ",$r1['nama']);
    $_SESSION['session_name']=$fname[0];
    header('Location:index.php');
  }
  else{
    die("Akses dilarang...");
  }
?>