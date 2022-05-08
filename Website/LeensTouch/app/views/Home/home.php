<?php require APPROOT . '/views/includes/header.php'; ?>
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
    <img src="<?php echo URLROOT.'/public/img/home_bg.png'?>" class=" float-start img-fluid" alt="" style="width:100%" >

    <?php
        if($data != []){
            echo '<div class="alert alert-success" role="alert">'.
             $data['msg'].'
          </div>';
        }
    ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>