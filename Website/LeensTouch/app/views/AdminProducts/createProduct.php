<?php require APPROOT . '/views/includes/header.php'; 
?>

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

    <h1>Create Products View</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_name">Product Name</label>
        <input name="product_name" type="text" class="form-control" id="product_name" placeholder="Name of the product">
    </div><div class="form-group">
        <label for="description">Product Description</label>
        <input name="description" type="text" class="form-control" id="description" placeholder="Description of the product">
    </div>
    <div class="form-group">
        <label for="price">Product Price</label>
        <input name="price" type="text" class="form-control" id="price" placeholder="Price of the product">
    </div>
    <div class="form-group">
        <label for="colour">Product Volour</label>
        <input name="colour" type="text" class="form-control" id="colour" placeholder="Product colour">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity Available</label>
        <input name="quantity" type="text" class="form-control" id="quantity" placeholder="Quantity available">
    </div>
    <div class="form-group">
        <label for="image">Product picture</label>
        <input type='file' name='image' class='form-control' />
    </div>

    <button type="submit" name='register' class="btn btn-primary">Register</button>
    </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>