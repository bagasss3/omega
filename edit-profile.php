<?php
if(!isset($_SESSION['session_id'])){
  header('Location: login.php');
  exit();
}

$id = $_SESSION['session_id'];
$sql = "SELECT  * FROM tbl_user WHERE id=$id";
$query = mysqli_query($db,$sql);
$user = mysqli_fetch_array($query);

if(mysqli_num_rows($query)<1){
  die("Terjadi Error");
}
?>
  <form action="process-edit.php" method="POST" enctype="multipart/form-data">
    <fieldset class="kotakedit">
    <p>
        <label for="email"><h5>Profile Picture</h5></label>
        <input type="file" name="profilimage">
      </p>
      <p>
        <label for="email"><h5>Email:</h5></label>
        <input type="email" name="email" placeholder="Email anda" value="<?php echo $user['email']?>">
      </p>
      <p>
        <label for="password"><h5>Password:</h5></label>
        <input type="password" name="password" id="" value="<?php echo $user['password']?>">
      </p>
      <p>
        <label for="nama"><h5>Nama:</h5></label>
        <input type="text" name="nama" id="" value="<?php echo $user['nama']?>">
      </p>
      <p>
        <label for="gender"><h5>Jenis Kelamin:</h5></label>
        <?php $gender = $user['gender'];?>
        <label><input type="radio" name="gender" value="laki-laki" <?php echo($gender =='laki-laki') ? "checked" : "" ?>>Laki-laki</label>
        <label><input type="radio" name="gender" value="perempuan" <?php echo($gender =='perempuan') ? "checked" : "" ?>>Perempuan</label>
      </p>
      <p>
        <label for="nohp"><h5>No HP:</h5></label>
        <input type="text" name="nohp" id="" value="<?php echo $user['nohp']?>">
      </p>
      <br>
      
      <p>
      <div class="d-flex justify-content-center navprofile">
        <nav>
          <input type="submit" value="Simpan Perubahan" name="simpan" class="btn btn-info">
        </nav>
        <nav>
        <?php echo "<a href='profile.php' class='btn btn-danger'>Batal Perubahan</a>" ?>
        </nav>
      </div>
      </p>
    </fieldset>
  </form>


