 <!-- Onboard -->
 <section class="onboard">
    <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Feel the <span>real experience</span> of <span>Gaming</span> with us.</h1>
          <h4 class="display-5">Step your game up with our offers </h4>
          <!-- MODAL -->
          <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">One step closer</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                  <form action="process-register.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputname1">Full Name</label>
                      <input type="text" class="form-control" id="validationDefault02" placeholder="Name" name="nama" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Retype Password</label>
                      <input type="password" name="repassword" class="form-control" id="exampleInputPassword2" placeholder="Retype Password" required>
                    </div>
                    <div class="form-group">
                      <label for="gender">Jenis Kelamin:</label>
                      <label><input type="radio" name="gender" value="laki-laki">Laki-laki</label>
                      <label><input type="radio" name="gender" value="perempuan">Perempuan</label>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputname1">Phone Number</label>
                      <input type="text" name="nohp" class="form-control" id="validationDefault02" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                      <label class="form-check-label" for="exampleCheck1">I agree to terms and conditions</label>
                    </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button type="submit" class="btn btn-indigo" name="daftar">Sign-up </button>
                    </div>
                </form>
                
              </div>
            </div>
          </div>

          <div class="text-center">
              <a href="" class="btn btn-outline-light btn-lg btn-block" data-toggle="modal" data-target="#modalSubscriptionForm">JOIN US!</a>
              <div class="textbawah text-center">
                <a href="#bottom" class="btn btn-outline-light btn-lg btn-block">LIMITED OFFERS</a>
              </div>    
          </div>
          </div>
          
        <!-- PENUTUP MODAL -->
      </div>
      <!-- Penutup Jumbotron -->
  </section>
    <!-- Penutup onboard  -->