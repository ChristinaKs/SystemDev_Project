<?php require APPROOT . '/views/includes/header.php'; ?>

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
    
<div class="title" style="margin-left: 50px; float: left;">
  <h1>All Orders</h1>
</div>

<div class="details" style="margin: 75px;">
  <table class="table table-bordered" style="border: 1px solid black;">
    <tr>
      <td>Order ID</td>
      <td>Client ID</td>
      <td>Order Status</td>
      <td>Total Price</td>
      <td>View Details</td>
    </tr>
    <?php
      $totalPrice = 0;
      foreach($data["orders"] as $orders){
        echo"<tr>";
        echo"<td>$orders->order_id</td>";
        echo"<td>$orders->user_id</td>";
        echo"<td>
          <form action='/LeensTouch/Orders/updateOrderStatus/$orders->order_id' method='post'> 
          <input type='checkbox' name='OrderStatusCB' onChange='this.form.submit()'";
        if($orders->status == 'Shipped'){
          echo "checked";
        }
        echo "> Shipped
          </form>
          </td>";
        echo"<td>$orders->total_price</td>";
        echo"<td>
          <a href='/LeensTouch/Orders/getOrder/$orders->order_id'>View Details</a>
          </td>";
        echo"</tr>";
      }
    ?>
  </table>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>