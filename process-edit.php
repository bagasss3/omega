<?php
session_start();
include("config.php");

if(isset($_POST['simpan']) && isset($_FILES['profilimage'])){
  $id = $_SESSION['session_id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $gender = $_POST['gender'];
  $nohp = $_POST['nohp'];

  $img_name = $_FILES['profilimage']['name'];
  $img_size = $_FILES['profilimage']['size'];
  $tmp_name = $_FILES['profilimage']['tmp_name'];
  $error = $_FILES['profilimage']['error'];

  if($error===0){
    if($img_size>1250000){
      header('Location: profile.php?error=File terlalu besar');
      exit();
    }
    else{
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg","jpeg","png");

      if(in_array($img_ex_lc,$allowed_exs)){
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
        $img_upload_path = 'uploads/'.$new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);
      }
      else{
        header('Location: profile.php?error=Tipe File salah');
        exit();
      }
    }
  }else{
    header('Location: profile.php?error=Terjadi Kesalahan');
    exit();
  }

  if($_SESSION['session_email']!=$email){
    $_SESSION['session_email'] = $email;
  }
  if($_SESSION['session_name']!=$nama){
    $fname = explode(" ",$nama);
    $_SESSION['session_name']=$fname[0];
  }
  $sql = "UPDATE tbl_user SET email='$email', password='$password', nama='$nama', gender='$gender', nohp='$nohp', pp='$new_img_name' WHERE id=$id";
  $query = mysqli_query($db,$sql);

  if($query){
    header('Location: profile.php');
    exit();
  }else{
    die("Gagal menyimpan perubahan");
  }
}
else{
  die("akses dilarang");
}
?>