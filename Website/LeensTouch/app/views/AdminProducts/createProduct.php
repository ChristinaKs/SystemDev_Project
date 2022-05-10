<?php require APPROOT . '/views/includes/header.php'; 
?>

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
  
<br>

<div class="container w-100 mx-auto" style="padding-left: 21rem">
  <div class="title" style="margin-left: 170px; float: left;">
    <h1>Create a Product</h1>
  </div>
  <br><br>
    
    <!-- <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="product_name">Product Name</label>
        <input name="product_name" type="text" class="form-control" id="product_name" placeholder="Name of the product">
    </div>
    <div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="description">Product Description</label>
        <input name="description" type="text" class="form-control" id="description" placeholder="Description of the product">
    </div>
    <div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="price">Product Price</label>
        <input name="price" type="text" class="form-control" id="price" placeholder="Price of the product">
    </div>
    <div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="colour">Product Colour</label>
        <input name="colour" type="text" class="form-control" id="colour" placeholder="Product colour">
    </div>
    <div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="quantity">Quantity Available</label>
        <input name="quantity" type="text" class="form-control" id="quantity" placeholder="Quantity available">
    </div>
    <div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="image">Product picture</label>
        <input type='file' name='image' class='form-control' />
    </div>
    <div class="form-group" style="max-width: 1200px; margin: auto;">
    <button type="submit" name='register' class="btn btn-primary" style="background-color: #e4c5bd; color: white;">Register</button>
    </div>  
  </form> -->

  <form action='' method='post' enctype="multipart/form-data">
    <div class="product-image mt-0  ms-5">
      <div class="ms-5 mb-3 mt-5"><span class="h5 ">Product Picture:</span><br> 
        <div class="form-group" style="margin: auto; float: left;">
          <input type='file' name='image' class='form-control'  style="width: 500px;"/>
        </div>
      </div><br>
    </div>
        
        
    <div class="product-info d-grid ms-5 mt-0">  <!-- <div class="product-info mt-0"> -->
      <div class="ms-5 mb-3 mt-5"><span class="h5 ">Name:</span> <br> 
          <div class="form-group" style="margin: auto; float: left;">
            <input name="product_name" type="text" class="form-control" id="product_name" placeholder="Name of the product" style="width: 500px;">
          </div> 
        </div><br>

        <div class="ms-5 mb-3"><span class="h5 ">Price:</span> <br>
          <div class="form-group" style="margin: auto; float: left;">
            <input name="price" type="text" class="form-control" id="price" placeholder="Price of the product" style="width: 500px;">
          </div>
        </div><br>

        <div class=" ms-5 mb-3 me-5"><span class="h5">Product Description:</span><br>
          <div class="form-group" style=" margin: auto; float: left;">
            <input name="description" type="text" class="form-control" id="description" placeholder="Description of the product" style="width: 500px">
          </div>
        </div> <br>

        <div class="h5 ms-5"><span class="h5">Colors Available:</span><br>
          <div class="form-group" style="margin: auto; float: left;">
            <input name="colour" type="text" class="form-control" id="colour" placeholder="Product colour" style="width: 500px;">
          </div>
        </div> <br>
          
        <div class="ms-5 mb-3"><span class="h5 ">Quantity Available:</span> <br>
          <div class="form-group" style=" margin: auto; float: left;" style="width: 400px;">
            <input name="quantity" type="text" class="form-control" id="quantity" placeholder="Quantity available" style="width: 500px;">
          </div>
        </div> <br>
          
        <div class="form-group" style=" margin-left: 30rem; float: left">
        <button id='cancel' name='cancel' class='btn btn-secondary me-3'> <a href='/LeensTouch/AdminProducts/createProduct' style='text-decoration: none; color: white;'>Cancel </a></button>
          <button type="submit" name='register' class="btn btn-secondary">Add to Catalog</button>
        </div>  

      </div>
    </div>
  </form>
  </div>
<?php require APPROOT . '/views/includes/footer.php'; ?>