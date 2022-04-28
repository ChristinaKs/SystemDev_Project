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
    </ul>
  </div>
</nav>

    <h1>Update a Product</h1>
    
    <form action='' method='post' enctype="multipart/form-data">


    <div class="form-group">
        <label for="product_name">Product Name</label>
        <input name="product_name" type="text" class="form-control" id="product_name" value="<?php echo $data->product_name?>">
    </div><div class="form-group">
        <label for="description">Product Description</label>
        <input name="description" type="text" class="form-control" id="description" value="<?php echo $data->description?>">
    </div><div class="form-group">
        <label for="price">Product Price</label>
        <input name="price" type="text" class="form-control" id="price" value="<?php echo $data->price?>">
    </div><div class="form-group">
        <label for="colour">Product Colour</label>
        <input name="colour" type="text" class="form-control" id="colour" value="<?php echo $data->colour?>">
    </div>
    </div><div class="form-group">
        <label for="quantity">Product Amount</label>
        <input name="quantity" type="text" class="form-control" id="quantity" value="<?php echo $data->quantity?>">
    </div>
    <div class="form-group">
        <label for="image">Product picture</label>
        <input type='file' name='image' class='form-control' />
    </div>

    <button type="submit" name='update' class="btn btn-primary">Update</button>
    </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>