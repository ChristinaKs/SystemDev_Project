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

<!-- <?php
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    ?> -->

<div class="title" style="margin-left: 50px; float: left;">
  <h1>My Clients</h1>
</div> 
<div class="details" style="margin: 75px;">
  <table  class="table table-bordered" style="border: 1px solid black;">
    <tr>
      <td>User ID</td>
      <td>Email</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Promotions</td>
    </tr>
    <?php
    $count=0;
      foreach($data["users"] as $users){
        echo"<tr>";
        echo"<td>$users->user_id</td>";
        echo"<td>$users->email</td>";
        echo"<td>$users->fname</td>";
        echo"<td>$users->lname</td>";
        echo"<td>";
          if($users->promotions == '1'){
            echo 'Yes';
          } else {
            echo 'No';
        echo"
          </form>
          </td>";
        echo"</tr>";
      }
    }
    ?>
  </table>
</div>


   
<?php require APPROOT . '/views/includes/footer.php'; ?>