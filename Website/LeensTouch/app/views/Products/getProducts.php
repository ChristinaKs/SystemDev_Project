<?php require APPROOT . '/views/includes/header.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/Products/getProducts">Get Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/LeensTouch/Products/createProduct">Create Product</a>
      </li>
    </ul>
  </div>
</nav>

    <h1>Get Products View</h1>
    <?php
  // NEEDS EDITING
?>
    <table  class="table table-bordered">
        <tr>
            <td>Image</td>
            <td>UPC</td>
            <td>Product Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Quantity Available</td>
            <td colspan="3" class="text-center"> Actions</td>
        </tr>
        <?php
            foreach($data["products"] as $products){
                echo"<tr>";
                echo '<td>
                <div class="d-flex align-items-center"><img class="img-thumbnail" src="'.URLROOT.'/public/img/'.$products->picture.'" width="100" height="100"></div>
                </td>';
                echo"<td>$products->UPC</td>";
                echo"<td>$products->ProductName</td>";
                echo"<td>$products->ProductDescription</td>";
                echo"<td>$products->ProductPrice</td>";
                echo"<td>$products->ProductAmount</td>";
                echo"<td>
                <a href='/LeensTouch/Products/update/$products->UPC'> Update</a>
                </td>";
                echo"<td>
                <a href='/LeensTouch/Products/delete/$products->UPC'> Delete</a>
                </td>";
                echo"</tr>";
            }
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>