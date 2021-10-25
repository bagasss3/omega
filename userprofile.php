<?php
$id = $_SESSION['session_id'];
$sql = "SELECT * FROM tbl_user WHERE id='$id'";
$query = mysqli_query($db,$sql);
$user = mysqli_fetch_array($query);
if(!$user['pp']){
  echo "<img src='uploads/default.png' style='width:10em; height:10em; margin:auto;' class='d-flex justify-content-center rounded-circle'>";
}
else{
  echo "<img src='uploads/".$user['pp']."' style='width:10em; height:10em; margin:auto;' class='d-flex justify-content-center rounded-circle'>";
}

echo "<h5>Email:</h5>";
echo "<p>".$user['email']."</p>";
echo "<h5>Nama:</h5>";
echo "<p>".$user['nama']."</p>";
echo "<h5>Jenis Kelamin:</h5>";
echo "<p>".$user['gender']."</p>";
echo "<h5>Nomor HP:</h5>";
echo "<p>".$user['nohp']."</p>";
?>
<div class="d-flex justify-content-center navprofile">
<nav>
<?php echo "<a href='profile.php?status=edit' class='btn btn-info'>Edit Profile</a>" ?>
</nav>
<nav>
<?php echo "<a href='profile.php?status=delete' class='btn btn-danger'>Delete Account</a>" ?>
</nav>
</div>
