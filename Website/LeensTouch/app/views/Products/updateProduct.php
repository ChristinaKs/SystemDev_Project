<?php require APPROOT . '/views/includes/header.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/Products/getProducts">Get Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/Products/createProducts">Create Products</a>
      </li>
    </ul>
  </div>
</nav>

    <h1>Update Products View</h1>
    
    <form action='' method='post' enctype="multipart/form-data">
    <?php
  // NEEDS EDITING
?>

    <div class="form-group">
        <label for="ProductName">Product Name</label>
        <input name="ProductName" type="text" class="form-control" id="ProductName" value="<?php echo $data->ProductName?>">
    </div><div class="form-group">
        <label for="ProductDescription">Product Description</label>
        <input name="ProductDescription" type="text" class="form-control" id="ProductDescription" value="<?php echo $data->ProductDescription?>">
    </div><div class="form-group">
        <label for="ProductPrice">Product Price</label>
        <input name="ProductPrice" type="text" class="form-control" id="ProductPrice" value="<?php echo $data->ProductPrice?>">
    </div><div class="form-group">
        <label for="ProductAmount">Product Amount</label>
        <input name="ProductAmount" type="text" class="form-control" id="ProductAmount" value="<?php echo $data->ProductAmount?>">
    </div>
    <div class="form-group">
        <label for="picture">Product picture</label>
        <input type='file' name='picture' class='form-control' />
    </div>

    <button type="submit" name='update' class="btn btn-primary">Update</button>
    </form>

   
<?php require APPROOT . '/views/includes/footer.php'; ?>