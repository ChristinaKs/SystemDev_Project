<?php require APPROOT . '/views/includes/header.php';  ?>
<?php if (isAdminLoggedIn()) { ?>
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
<?php } ?>
<div class="container">
<h1>Contact Us</h1>
<form>
  <div class="float-container">
    <div class="form-group" style="width: 50%; float: left;">
        <label for="fnameInput">First Name</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter your first name">
    </div>
    <div class="form-group" style="width: 50%; float: left;">
        <label for="lnameInput">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter your last name">
    </div>
  </div>
  <div class="form-group">
    <label for="emailInput">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="addressInput">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Enter your address">
    <p style="float: right;">*Only if pertaining to a delivery</p>
  </div>
  <br>
  <div class="form-group">
    <label for="messageInput">Message</label>
    <textarea class="form-control" id="message" cols="174" rows="5" placeholder="Write your message here"></textarea>
    <!-- <input type="text" class="form-control" id="message" placeholder="Write your message here" style="height:200px;"> -->
  </div>
  <div class="form-group">
        <label for="profileinput">Image</label>
        <input type='file' name='picture' class='form-control'/>
   </div>
    <button style="float: right;" type="submit" name='send' class="btn btn-primary">Send</button>
    <button style="float: right;" type="submit" name='cancel' class="btn btn-primary">Cancel</button>
</form>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>