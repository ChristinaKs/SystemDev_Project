<?php require APPROOT . '/views/includes/header.php';?>

<div class="container-sm container-fluid w-50">
    <br>

<div class="mt-4 mb-5 h1 text-center">Edit My Personalization</div>
<form action="" method='POST' enctype="multipart/form-data">

    <div class="form-group ">
        <label class="fs-4 fw-bold" for="textinput">Text: </label>
        <input name="text" type="text" class="form-control fs-5" id="textinput" value="<?php echo $data->text ?>">
    </div>
    <div class="form-group">
        <label class="fs-4 fw-bold" for="imageinput">Image: </label>
        <input style="width: 100%; margin-top: 10px;" type='file' name='picture' />
        <p style="float: left;">*Leave field empty to keep last image</p>
    </div>

    <a href="/LeensTouch/Catalog/viewCart" class="mt-3 btn btn-secondary color float-end">Cancel</a>
    <button type="submit" name='update' class="mt-3 me-3 btn btn-secondary color float-end">Save Changes</button>   
</form>

<?php require APPROOT . '/views/includes/footer.php';?>