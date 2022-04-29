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
    
<div class="title" style="max-width: 1200px; margin: auto;">
  <h1>All Orders</h1>
</div>

<div class="orderTable" style="max-width: 1200px; margin: auto;">
  <table  class="table table-bordered" >
    <tr>
      <td>Order ID</td>
      <td>User ID</td>
      <td>Total Price</td>
      <td>Order Status</td>
      <td>View Details</td>
    </tr>
    <?php
      $totalPrice = 0;
      foreach($data["orders"] as $orders){
        // $totalPrice += $product->ProductPrice*$product->Quantity;
        echo"<tr>";
        echo"<td>$orders->order_id</td>";
        echo"<td>$orders->user_id</td>";
        echo"<td>$orders->total_price</td>";
        echo"<td>
          <form action='/TermProject/Orders/updateOrderStatus/$orders->order_id' method='post'> 
          <input type='checkbox' name='OrderStatusCB' onChange='this.form.submit()'";
        if($orders->status == 'Shipped'){
          echo "checked";
        }
        echo "> Shipped
          </form>
          </td>";
        echo"<td>
          <a href='/TermProject/Orders/getOrder/$orders->order_id'>View Details</a>
          </td>";
        echo"</tr>";
      }
    ?>
  </table>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>