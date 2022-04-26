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

    <h1>Get Products View</h1>

    <table  class="table table-bordered">
        <tr>
            <td>Image</td>
            <td>UPC</td>
            <td>Product Name</td>
            <td>Description</td>
            <td>Colour</td>
            <td>Price</td>
            <td>Quantity Available</td>
            <td colspan="3" class="text-center"> Actions</td>
        </tr>
        <?php
            foreach($data["products"] as $products){
                echo"<tr>";
                echo '<td>
                <div class="d-flex align-items-center"><img class="img-thumbnail" src="'.URLROOT.'/public/img/'.$products->image.'" width="100" height="100"></div>
                </td>';
                echo"<td>$products->upc</td>";
                echo"<td>$products->product_name</td>";
                echo"<td>$products->description</td>";
                echo"<td>$products->price</td>";
                echo"<td>$products->colour</td>";
                echo"<td>$products->quantity</td>";
                echo"<td>
                <a href='/LeensTouch/AdminProducts/update/$products->upc'> Update</a>
                </td>";
                echo"<td>
                <a href='/LeensTouch/AdminProducts/delete/$products->upc'> Delete</a>
                </td>";
                echo"</tr>";
            }
        ?>
    </table>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>