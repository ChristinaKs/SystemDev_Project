<?php require APPROOT . '/views/includes/header.php';  ?>


<body style="background-color: #e4c5bd; height: 100%;">
  <div class= "container-fluid " >
    <div class="" style="background-color: #e4c5bd; max-width:50%; min-height:47rem; margin: auto; " >
      <div class="" style="margin-left: 10%; margin-right: 10%; text-align: justify; ">
        <br>
         <h1 class = "text-center mt-5">Sign In</h1>
            <p class = "text-center fs-4" >Sign in with your email and password</p>
            <form class="px-4 py-3" method="post" action="">
                <div class="form-group pt-4">
                    <label for="email" class="fs-5">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group pt-4">
                    <label for="password" class="fs-5">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class='mt-2 me-auto text-center'> 
                    <button type="submit" name="login" class="btn btn-secondary w-50 fs-4 mt-4">Sign in</button>
                    <p class="text-center fs-5 mt-2">Don't have an account? <a href="/LeensTouch/Login/Create">Sign Up</a> </p>
                </div>
                <?php

                if($data != []){
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