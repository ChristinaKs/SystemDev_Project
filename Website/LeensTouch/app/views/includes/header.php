<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>

@font-face {
  font-family: "LucidaCalligraphy-Italic";
  font-style: italic;
  font-weight: 400;
  src: url('https://anima-uploads.s3.amazonaws.com/projects/5fe4ac5be2c9f1efb773c4a9/fonts/lucida-calligraphy-italic.ttf') format("truetype");
}

@font-face {
  font-family: "Constantia-Regular";
  font-style: normal;
  font-weight: 400;
  src: url('https://anima-uploads.s3.amazonaws.com/projects/60b867560d81379b238f054e/fonts/constan.ttf') format("truetype");
}
</style>
  <!-- <title><?php echo SITENAME; ?></title> -->
</head>

<body>
<div class="container-fluid ps-0 pe-0" >

<nav class="navbar navbar-expand-sm navbar-light bg-secondary pt-3 pb-0 " style="padding: 0px;background-color:#b2b4bfad!important; ">
  <div class="container-fluid " >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
    <ul class="navbar-nav me-auto"></ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (isLoggedIn()) {
            // if(!isProfiledIn()) {
            //   echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Shopper/createProfile"><i class="fa-solid fa-user"></i> Create Profile </a></li>';
            // }else{
            //   echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Shopper/editProfile"><i class="fa-solid fa-user"></i> Edit Profile </a></li>';
            // }
            echo '<li style="margin-left:20px" class="nav-item"><a class="nav-link" href="/LeensTouch/Login/logout"><i class="fa-solid fa-sign-out"></i> Logout  '. $_SESSION['user_fname'].'</a></li>';
            echo '<li style="margin-left:20px" class="nav-item"><a class="nav-link" href="/LeensTouch/Catalog/viewCart"><i class="fa-solid fa-cart-shopping"></i> My Cart </a></li>';
            echo ' <form class="form-inline" action="/LeensTouch/Search/getResult/" method="POST">
            <div class="search-bar">
            <input type="text" name="search_text"  placeholder="Search">
            <select  name="search_type" <?php ?>>
              <option value="Name">Name of product</option>
              <option value="Colour" >By Colour</option>
              <option value="available">Show Available</option>
              <option value="sortLowest">Sort by price A-Z</option>
              <option value="sortHighest">Sort by price Z-A</option>
            </select>
            <button type="submit" name="search"> Search</button>
          </div>
        </form>';
          } 
          else {
            // echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Login/Create"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>';
            echo '<li class="nav-item"><a class="nav-link" href="/LeensTouch/Login/"><i class="fa-solid fa-right-to-bracket"></i> Sign in</a></li>';  
            echo '<li style="margin-left:20px" class="nav-item"><a class="nav-link" href="/LeensTouch/Login/index"><i class="fa-solid fa-cart-shopping"></i> My Cart </a></li>';
            echo '<form class="form-inline" action="/LeensTouch/Search/getResult/" method="POST">
            <div class="search-bar">
            <input type="text" name="search_text"  placeholder="Search">
            <select  name="search_type" <?php ?>>
              <option value="Name">Name of product</option>
              <option value="Colour" >By Colour</option>
              <option value="available">Show Available</option>
              <option value="sortLowest">Sort by price A-Z</option>
              <option value="sortHighest">Sort by price Z-A</option>
            </select>
            <button type="submit" name="search"> Search</button>
          </div>
        </form>';
          }
          echo '<div style="margin-left:20px" class="d-flex align-items-center"><a href="/LeensTouch/Home"><img class="rounded-circle" src="'.URLROOT.'/public/img/LT-Logo.png" width="60"></a></div>';
        ?>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-sm navbar-light bg-secondary" style="padding: 0px;padding-bottom: 10px; background-color:#b2b4bfad!important; ">
  <ul style="margin: auto; height: 50px; text-align: center;" class="nav navbar-nav navbar-right">
  <a class="nav-link pt-0" href="/LeensTouch/Home"><p  style="font-size: 40px; font-family:'LucidaCalligraphy-Italic'; color: #000000;"><em><?php echo SITENAME; ?></em></p></a>
  </ul>
</nav>

<nav class=" navbar navbar-expand-sm navbar-light bg-secondary h5 p-0 pt-2 mb-0 " style="color: #000000!important; background-color:#b2b4bfad!important; ">
  <div class="collapse navbar-collapse" id="mynavbar">
    <ul style="margin: auto; text-align: center; font-family:'Constantia-Regular';" class="navbar-nav ">
      <li class="nav-item me-5">
        <a class="nav-link" href="/LeensTouch/Catalog">Catalog</a>
      </li>
      <li class="nav-item me-5">
        <a class="nav-link" href="/LeensTouch/About">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/Contact">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
