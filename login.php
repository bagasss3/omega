<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
   <!-- Font -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
  
  <div class="container-fluid formlogin">
    <div class="justify-content-center h-100 kotak">
      <div class="d-flex justify-content-center judullogin">
        <div class="d-flex gambarlogin">
          <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg></a>
        </div>
        <h2>Login</h2>
			</div>
      <div class="d-flex justify-content-center login">
        <form action="process-login.php" method="POST">
          <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-indigo" name="login" >Login </button>
            </div>
          </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
      <?php
        if(isset ($_GET['err']))  { ?>
        <div class="alert alert-danger"><?php echo $_GET['err']; ?></div>
        <?php } 
        ?>
			</div>
  </div>
</div>
</body>
</html>