<?php
  include ('config.php');

  if(isset($_POST['daftar'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $nohp = $_POST['nohp'];

    if($password!==$repassword){
      
      header('Location: index.php?status='.urlencode("Password tidak sama"));
      exit();
    }
    $sql = "INSERT INTO tbl_user(email, password, nama, gender, nohp) VALUE ('$email','$password','$nama','$gender','$nohp')";
    $query = mysqli_query($db,$sql);

    if($query){
      header('Location: index.php?status='.urlencode("Berhasil membuat akun"));
      exit();
    }
    else{
      header('Location: index.php?status='.urlencode("Gagal membuat akun"));
      exit();
    }
  
  }
  else{
    die("Akses dilarang...");
  }
?>