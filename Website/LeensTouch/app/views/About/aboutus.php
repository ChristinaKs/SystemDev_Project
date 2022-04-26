<?php require APPROOT . '/views/includes/header.php';  ?>
<?php if (isAdminLoggedIn()) { ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul style="margin: auto; text-align: center; font-family:'Constantia-Regular';" class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="/LeensTouch/AdminProducts/getProducts">Get Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/LeensTouch/AdminProducts/createProducts">Create Products</a>
              </li>
            </ul>
          </div>
        </nav>
    <?php } ?>
<form>
  <div class="form-group">
  
  </div>
</form>
<div class="about-section">
  <h1>About Us Page</h1>
  <?php
  foreach($data["about"] as $about){
    echo "&emsp;&emsp;";
    echo $about->firstparagraph;
    echo "<br><br>&emsp;&emsp;";
    echo $about->secondparagraph;
    echo "<br><br>&emsp;&emsp;";
    echo $about->thirdparagraph;
  } 
  echo "<br><br>";
  if (isAdminLoggedIn()) {
    echo "<button id='editAbout' name='edit' class='btn btn-secondary'> <a href='/LeensTouch/About/editAbout' >edit </a></button>";
  }?>
  
<?php require APPROOT . '/views/includes/footer.php'; ?>
