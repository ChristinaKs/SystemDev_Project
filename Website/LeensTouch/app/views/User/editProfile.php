<?php require APPROOT . '/views/includes/header.php'; 
?>

<div class="container-sm container-fluid w-50">
    <br>
    <div class="mt-4 mb-5 h1 text-center">Edit My Account</div>
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group ">
        <label class="fs-4 fw-bold" for="fnameinput">First Name: </label>
        <input name="fname" type="text" class="form-control fs-5" id="nameinput" value="<?php echo $_SESSION['user_fname'] ?>">
    </div>
    <div class="form-group">
        <label class="fs-4 fw-bold" for="lnameinput">Last Name: </label>
        <input name="lname" type="text" class="form-control fs-5" id="nameinput" value="<?php echo $_SESSION['user_lname'] ?>">
    </div>

    <button type="submit" name='update' class="mt-3 btn btn-secondary color float-end">Cancel</button>
    <button type="submit" name='update' class="mt-3 me-3 btn btn-secondary color float-end">Save Changes</button>
    </form>

</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>