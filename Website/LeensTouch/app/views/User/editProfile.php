<?php require APPROOT . '/views/includes/header.php'; 
?>

<form action='' method='post' enctype="multipart/form-data">

<div class="form-group">
    <label for="fnameinput">First Name</label>
    <input name="fname" type="text" class="form-control" id="nameinput" value="<?php echo $_SESSION['user_fname'] ?>">
</div>
<div class="form-group">
    <label for="lnameinput">Last Name</label>
    <input name="lname" type="text" class="form-control" id="nameinput" value="<?php echo $_SESSION['user_lname'] ?>">
</div>


<button type="submit" name='update' class="btn btn-primary">Update</button>
</form>


<?php require APPROOT . '/views/includes/footer.php'; ?>