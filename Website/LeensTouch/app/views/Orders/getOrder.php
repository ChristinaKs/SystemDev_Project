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
        <a class="nav-link" href="/LeensTouch/Clients/viewClients">My Clients</a>
      </li>
    </ul>
  </div>
</nav>
<br><br>

<div class="title" style="margin-left: 50px; float: left;">
  <h1>Order Details</h1>
</div>

<div class="details" style="margin: 75px; border: 1px solid black;">
  <table  class="table table-bordered" style="border: 1px solid black;">
    <tr>
      <td>Order ID</td>
      <td>Product upc</td>
      <td>Product Name</td>
      <td>Quantity</td>
      <td>Unit Price</td>
      <td>Customization text</td>
      <td>Customization Image</td>
    </tr>
    <?php
      foreach($data["order_details"] as $order_details=>$d){
        echo"<tr>";
        echo"<td>$d->order_id</td>";
        echo"<td>$d->upc</td>";
        echo"<td>$d->product_name</td>";
        echo"<td>$d->quantity</td>";
        echo"<td>$d->unit_price</td>";
        echo"<td>$d->custom_text</td>";
        echo"<td>$d->custom_image</td>";
        // echo"</td>";
        echo"</tr>";
      }
    ?>
  </table>
</div>
  <form>
    <button id='Back' name='Back' class='btn btn-primary' style="background-color: #e4c5bd; margin-left: 50px;"> <a href='/LeensTouch/Orders/getOrders' style='text-decoration: none; color: white;'>Back to Orders </a></button>
  </form>

<?php require APPROOT . '/views/includes/footer.php'; ?>