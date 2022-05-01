<?php require APPROOT . '/views/includes/header.php'; 
?>

<div class="container-sm container-fluid w-50">
    <br>
    <div class="mt-4 mb-4 h1 text-center">Edit My Account</div>
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group ">
        <label for="fnameinput">First Name</label>
        <input name="fname" type="text" class="form-control" id="nameinput" value="<?php echo $_SESSION['user_fname'] ?>">
    </div>
    <div class="form-group">
        <label for="lnameinput">Last Name</label>
        <input name="lname" type="text" class="form-control" id="nameinput" value="<?php echo $_SESSION['user_lname'] ?>">
    </div>


    <button type="submit" name='update' class="btn btn-primary">Update</button>
    </form>

</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>