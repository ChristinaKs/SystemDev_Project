<?php require APPROOT . '/views/includes/header.php';  ?>

<body style="background-color: #e4c5bd; height: 100%;">
  <div class= "container-fluid " >
    <div class="" style="background-color: #e4c5bd; max-width:50%; min-height:47rem; margin: auto; " >
      <div class="" style="margin-left: 10%; margin-right: 10%; text-align: justify; ">
        <br>
        <h1 class = "text-center mt-5">Sign Up</h1>
            <p class = "text-center fs-5" >Create a Leen's Touch account to be able to shop with us</p>
          <form class="px-4 py-3" method="post" action="">
            <div class="float-container pb-2">
              <div class="form-group pt-3" style="width: 50%; float: left;">
                  <label for="fnameInput" class="fs-5">First Name</label>
                  <input type="text" class="form-control <?php echo (!empty($data['fname_error'])) ? 'is-invalid' : ''; ?>" id="fname" name="fname" placeholder="Enter your first name">
                  <span class="invalid-feedback"><?php echo $data['fname_error']; ?> </span>
              </div>
              <div class="form-group pt-3" style="width: 50%; float: left;">
                  <label for="lnameInput" class="fs-5">Last Name</label>
                  <input type="text" class="form-control <?php echo (!empty($data['lname_error'])) ? 'is-invalid' : ''; ?>" id="lname" name="lname" placeholder="Enter your last name">
                  <span class="invalid-feedback"><?php echo $data['lname_error']; ?> </span>
              </div>
            </div>

            <div class="form-group mt-5 pt-5">
              <label for="email" class="fs-5">Email</label>
              <input type="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Email">
              <span class="invalid-feedback"><?php echo $data['email_error']; ?> </span>
            </div>

            <div class="form-group pt-3">
              <label for="password" class="fs-5">Password</label>
              <input type="password" class="form-control  <?php echo (!empty($data['password_len_error'])) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
              <span class="invalid-feedback"><?php echo $data['password_len_error']; ?> </span>
            </div>
            
            <div class="form-group pt-3">
              <label for="verify_password" class="fs-5">Re-enter the password</label>
              <input type="password" class="form-control  <?php echo (!empty($data['password_match_error'])) ? 'is-invalid' : ''; ?>" id="verify_password" name="verify_password" placeholder="Re-enter the password">
              <span class="invalid-feedback"><?php echo $data['password_match_error']; ?> </span>
            </div>

            <div class="form-group text-center mt-3">
              <input type="checkbox" id="promotions" name="promotions">
              <label class="fs-5" for="promotions">I consent to receiving promotional emails</label>
            </div>
            
            <div class='mt-2 me-auto text-center'> 
                    <button type="submit" name="signup" class="btn btn-secondary w-50 fs-4 mt-4">Sign up</button>
                    <p class="text-center fs-5 mt-2">Already registered? <a href="/LeensTouch/Login/">Sign Up</a> </p>
                </div>
            <!-- <button type="submit" name="signup" class="btn btn-primary mt-2"> Sign up</button>
            <p class="text-center">Already registered? <a href="/LeensTouch/Login/">Login</a> </p> -->
            
            <?php
              if(!empty($data['msg'])){
                echo '<div class="alert alert-danger" role="alert">'.
                  $data['msg'].'
                  </div>';
              }
            ?>
          </form>
          </div>
      </div>
    </div>
  </body>


<?php require APPROOT . '/views/includes/footer.php'; ?>