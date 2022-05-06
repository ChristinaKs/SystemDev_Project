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
<div class="title" style="margin-left: 50px; float: left;">
  <h1>Update a Product</h1>
</div>
<br><br>
    
    <!-- <form action='' method='post' enctype="multipart/form-data">


    <div class="form-group">
        <label for="product_name">Product Name</label>
        <input name="product_name" type="text" class="form-control" id="product_name" value="<?php echo $data->product_name?>">
    </div>
    <div class="form-group">
        <label for="description">Product Description</label>
        <input name="description" type="text" class="form-control" id="description" value="<?php echo $data->description?>">
    </div>
    <div class="form-group">
        <label for="price">Product Price</label>
        <input name="price" type="text" class="form-control" id="price" value="<?php echo $data->price?>">
    </div>
    <div class="form-group">
        <label for="colour">Product Colour</label>
        <input name="colour" type="text" class="form-control" id="colour" value="<?php echo $data->colour?>">
    </div>
    <div class="form-group">
        <label for="quantity">Product Amount</label>
        <input name="quantity" type="text" class="form-control" id="quantity" value="<?php echo $data->quantity?>">
    </div>
    <div class="form-group">
        <label for="image">Product picture</label>
        <input type='file' name='image' class='form-control' />
    </div>

    <button type="submit" name='update' class="btn btn-primary">Update</button>
    </form> -->

    <form action='' method='post' enctype="multipart/form-data">
    <div class="product-image mt-0">
      <div class="ms-5 mb-3 mt-5"><span class="h5 ">Product Picture:</span><br> 
        <div class="form-group">
          <input type='file' name='image' class='form-control' />
        </div>
      </div>
    </div>
        
        
    <div class="product-info d-grid ms-5 mt-0">  <!-- <div class="product-info mt-0"> -->
      <div class="ms-5 mb-3 mt-5"><span class="h5 ">Name:</span> <br> 
        <div class="form-group">
          <input name="product_name" type="text" class="form-control" id="product_name" value="<?php echo $data->product_name?>">
        </div>
      </div><br>

        <div class="ms-5 mb-3"><span class="h5 ">Price:</span> <br>
          <div class="form-group">
            <input name="price" type="text" class="form-control" id="price" value="<?php echo $data->price?>">
          </div>
        </div><br>

        <div class=" ms-5 mb-3 me-5"><span class="h5">Product Description:</span><br>
          <div class="form-group">
            <input name="description" type="text" class="form-control" id="description" value="<?php echo $data->description?>">
          </div>
        </div> <br>

        <div class="h5 ms-5"><span class="h5">Colors Available:</span><br>
          <div class="form-group">
            <input name="colour" type="text" class="form-control" id="colour" value="<?php echo $data->colour?>">
          </div>
        </div> <br>
          
        <div class="ms-5 mb-3"><span class="h5 ">Quantity Available:</span> <br>
          <div class="form-group">
            <input name="quantity" type="text" class="form-control" id="quantity" value="<?php echo $data->quantity?>">
          </div>
        </div> <br>
          
        <div class="form-group" style=" margin-left: 100px; float: left">
          <button type="submit" name='update' class="btn btn-primary" style="background-color: #e4c5bd; color: white;">Update</button>
        </div>  

      </div>
    </div>
  </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>