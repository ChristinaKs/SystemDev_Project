<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- <title><?php echo SITENAME; ?></title> -->
</head>

<body>
<div class="container">

<nav class="navbar navbar-expand-sm navbar-light bg-secondary" style="padding: 0px;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
    <ul class="navbar-nav me-auto">
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (isLoggedIn()) {
            // if(!isProfiledIn()) {
            //   echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Shopper/createProfile"><i class="fa-solid fa-user"></i> Create Profile </a></li>';
            // }else{
            //   echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Shopper/editProfile"><i class="fa-solid fa-user"></i> Edit Profile </a></li>';
            // }
            echo '<li style="margin-left:20px" class="nav-item"><a class="nav-link" href="/LeensTouch/Login/logout"><i class="fa-solid fa-sign-out"></i> Logout  '. $_SESSION['shopper_username'].'</a></li>';
          } 
          else {
            // echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Login/Create"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>';
            echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Login/"><i class="fa-solid fa-right-to-bracket"></i> Sign in</a></li>';
            echo '<li style="margin-left:20px" class="nav-item"><a class="nav-link" href="/LeensTouch/Catalog/viewCart"><i class="fa-solid fa-cart-shopping"></i> My Cart </a></li>';  
            echo '<div style="margin-left:20px" class="d-flex align-items-center"><a href="/LeensTouch/Home"><img class="rounded-circle" src="'.URLROOT.'/public/img/LT-Logo.png" width="60"></a></div>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-sm navbar-light bg-secondary" style="padding: 0px;padding-bottom: 10px;">
  <ul style="margin: auto; height: 50px; text-align: center;" class="nav navbar-nav navbar-right">
    <p style="font-size: 40px;"><em><?php echo SITENAME; ?></em></p>
  </ul>
</nav>

<nav class="navbar navbar-expand-sm navbar-light bg-secondary" style="padding: 0px;">
  <div class="collapse navbar-collapse" id="mynavbar">
    <ul style="margin: auto; text-align: center;" class="navbar-nav me-auto">
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/Home">Catalog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/About">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/Contact">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>