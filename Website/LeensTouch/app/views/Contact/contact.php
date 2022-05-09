<?php require APPROOT . '/views/includes/header.php';  ?>
<?php if (isAdminLoggedIn()) { ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul style="margin: auto; text-align: center; font-family:'Constantia-Regular';" class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="/LeensTouch/AdminProducts/getProducts">My Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LeensTouch/AdminProducts/createProduct">Create a Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LeensTouch/Orders/getOrders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LeensTouch/User/getUsers">My Clients</a>
        </li>
      </ul>
    </div>
  </nav>
<?php } ?>

<!-- <div class="container"> -->

<!-- <form>
  <div class="float-container">
    <div class="form-group" style="width: 50%; float: left;">
        <label for="fnameInput">First Name</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter your first name">
    </div>
    <div class="form-group" style="width: 50%; float: left;">
        <label for="lnameInput">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter your last name">
    </div>
  </div>
  <div class="form-group">
    <label for="emailInput">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="addressInput">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Enter your address">
    <p style="float: right;">*Only if pertaining to a delivery</p>
  </div>
  <br>
  <div class="form-group">
    <label for="messageInput">Message</label>
    <textarea class="form-control" id="message" cols="174" rows="5" placeholder="Write your message here"></textarea> -->
    <!-- <input type="text" class="form-control" id="message" placeholder="Write your message here" style="height:200px;"> -->
  <!-- </div>
  <div class="form-group">
    <label for="profileinput">Image</label>
    <input type='file' name='picture' class='form-control'/>
  </div>
    <button style="float: right;" type="submit" name='send' class="btn btn-secondary">Send</button>
    <a style="float: right;" href="LeensTouch/Home/home" class="btn btn-secondary">Cancel</a>
</form>
</div> -->

<!-- <?=var_dump($data)?> -->

<style>
  .success{
    <?php if(empty($data)){?> 
        display: none;
    <?php }else{ ?>
        margin: auto;
        width: 12%;
        padding: 10px;
    <?php } ?>
  }

</style>

<body style="background-color: #e4c5bd; height: 100%">
  <div class= "container-fluid ">
    <div class="container" style="background-color: white; max-width:50%; min-height:47rem; margin: auto;">
      <div class="" style="margin-left: 10%; margin-right: 10%; text-align: justify;">
        <br>
            <h1 class = "text-center">Contact Us</h1>
            <p class = "text-center" >Use this form to contact us</p>
              <div class="modal-body border-0 p-4 position-relative" >
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * Contact Form * *-->

                <form  id="contactForm" action="https://formspree.io/f/myyolyyk" method="POST" data-sb-form-api-token="API_TOKEN">

                  <!-- fName input-->
                  <div class="form-floating mb-3">
                    <input class="form-control" name="fname" id="fname" type="text" placeholder="Enter your first name..." data-sb-validations="required" required="">
                    <label for="fname">First Name</label>
                    <div class="invalid-feedback" data-sb-feedback="first name:required">A first name is required.</div>
                  </div>

                  <!-- lName input-->
                  <div class="form-floating mb-3">
                    <input class="form-control" name="lname" id="lname" type="text" placeholder="Enter your last name..." data-sb-validations="required" required="">
                    <label for="lname">Last Name</label>
                    <div class="invalid-feedback" data-sb-feedback="last name:required">A last name is required.</div>
                  </div>

                  <!-- Email address input-->
                  <div class="form-floating mb-3">
                    <input class="form-control" name="_replyto" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" required="">
                    <label for="email">Email address</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                  </div>

                  <!-- Message input-->
                  <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" required=""></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                  </div>

                  <!-- File input-->
                  <div style="display: none;" class="form-floating mb-3">
                    <input class="form-control" name="image" id="image" type="text" value="<?=$data['image']?>">
                  </div>

                  <span class="success" id="success">
                    <span>Image set!</span>
                  </span>

                  <!-- Submit success message-->
                  <!---->
                  <!-- This is what your users will see when the form-->
                  <!-- has successfully submitted-->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                      <div class="fw-bolder">Form submission successful!</div>
                    </div>
                  </div>

                  <!-- Submit error message-->
                  <!---->
                  <!-- This is what your users will see when there is-->
                  <!-- an error submitting the form-->
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                  </div>

                  <!-- Cancel Button -->
                  <div class=" position-absolute  top-100 end-0">
                    <a style="width:6em; margin-top: -3rem; margin-right:10rem;" href="/LeensTouch/Contact" class=" position-absolute  top-100 end-0 float-end  btn btn-secondary rounded-pill btn-lg">Cancel</a>
                  <!-- Submit Button-->
                    <button style=" width:6em; margin-top: 3rem; margin-left: 35rem;" class=" btn btn-secondary rounded-pill btn-lg" id="submitButton" type="submit">Send</button>
              
                  </div>
                    </form>

                <form class="position-absolute top-100 start-0"action="" method="POST" enctype="multipart/form-data">
                  <div class="form-floating mb-3">
                    <p>Your Image:</p>
                    <input style="width:100%" type="file" name="picture">
                    <button class="btn btn-secondary rounded-pill btn-sm mt-1" name="push" id="submitButton" type="submit">Upload Image</button>
                  </div>
                   </form>

                <!-- <div class="text-center"><br>
                  Or you can email me directly at <a href="mailto:&ZeroWidthSpace;leen.touch1@gmail.com">leen.touch1@gmail.com</a>
                </div> -->
              
        </div>
      </div>
    </div>
  </body>
<?php require APPROOT . '/views/includes/footer.php'; ?>