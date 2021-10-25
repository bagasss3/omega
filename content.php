<?php
if(isset($_GET['status']) && $_GET['status']=='edit'){
  include "edit-profile.php";
}
else if(isset($_GET['status']) && $_GET['status']=='delete'){
  include "deleteUser.php";
}
else{
  include "userprofile.php";
}
?>