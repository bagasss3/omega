 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">ΩMEGA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gear</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="https://www.tokopedia.com/find/gear-gaming?sc=4011">Mouse</a>
                <a class="dropdown-item" href="https://www.tokopedia.com/find/gear-gaming?sc=4013">Headset</a>
                <a class="dropdown-item" href="https://www.tokopedia.com/search?st=product&q=keyboard%20gaming">Keyboard</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#middle">Omega PC</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://itemku.com/belanja-cepat">Top Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['session_name']?></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
    <!-- AKHIR NAVBAR -->