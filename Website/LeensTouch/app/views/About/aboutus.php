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
      </ul>
    </div>
  </nav>
<?php } ?>

<body style="background-color: #e4c5bd">
  <div class="about-section" style="background-color: white; max-width: 1200px; height: 100%; margin: auto;">
    <h1>About Leen's Touch</h1>
    <?php
      foreach($data["about"] as $about){
        echo "&emsp;&emsp;";
        echo $about->first_paragraph;
        echo "<br><br>&emsp;&emsp;";
        echo $about->second_paragraph;
        echo "<br><br>&emsp;&emsp;";
        echo $about->third_paragraph;
      } 
      echo "<br><br>";
      if (isAdminLoggedIn()) {
        echo "<button id='editAbout' name='edit' class='btn btn-secondary' style='background-color: #e4c5bd'> <a href='/LeensTouch/About/editAbout' style='text-decoration: none; color: white;'>edit </a></button>";
      }?>
  </div>
</body>
  
<?php require APPROOT . '/views/includes/footer.php'; ?>