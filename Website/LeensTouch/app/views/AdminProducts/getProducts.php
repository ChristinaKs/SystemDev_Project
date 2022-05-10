<?php require APPROOT . '/views/includes/header.php'; 
?>
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

<style>
 body{
 }
.product-card{
  height: 420px;
  width: 270px;
  margin: 10px 50px;
  display: none;
  animation: blur .8s ease-out ;
  margin-bottom: 40px
}

.product-container{
  display: flex;
    flex-direction: row;
    flex-flow: row wrap;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
    overflow: hidden;
    overflow-x: hidden;
    overflow-y: hidden; /* Hide vertical scrollbar */
}

.product-thumb {
  height: 270px;
  width: 270px;
  margin-bottom: 10px;
  border:1px solid black;
}

.noContent {
  pointer-events: none;
  display: none!important;
}

.product-info{
  border-style: solid;
  border-width: 1px;

  background-color:#e4c5bd;
}
</style>

<div class="container-fluid">
<h1>My Products</h1>
<div class="product-container">
  <?php
    foreach($data['products'] as $product){
      echo '
        <div class="product-card">
          <div class=" product-image"">
          <input type="image" id="image" src="'.URLROOT.'/public/img/'.$product->image.'" class="product-thumb" alt="" > 
          </div>
          <div class=" product-info">
            <h5 class="product-brand">Name: '.$product->product_name.'</h2>
            <div class="price">Price: '.(number_format($product->price, 2, ',', ' ')).'$</div>
              '.(($product->quantity<'1')?'<div class="availability">Sold Out</div><div>&nbsp</div>':
              '<div class="availability">Available</div> <br>
              '
              ).'
              
            </div>
            <a class="mt-2 btn btn-secondary"href="/LeensTouch/AdminProducts/update/'.$product->upc.'"> Update</a>
            <a class="mt-2 btn btn-danger" style="float: right;" href="/LeensTouch/AdminProducts/delete/'.$product->upc.'"> Delete</a>
          </div>  
      ';
    }
  ?>   
</div>

<button id = "loadMore" type="button" class="btn btn-primary btn-lg rounded-3 mx-auto mb-5" style="display: block; background-color:#e4c5bd; border: 1px solid #000000; color: #000000; ">
        Load More</button>
        
  <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
<script>
  $(document).ready(function () {
  $(".product-card").slice(0, 4).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".product-card:hidden").slice(0, 4).slideDown();
    if ($(".product-card:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  })
</script>
<?php require APPROOT . '/views/includes/footer.php'; ?>