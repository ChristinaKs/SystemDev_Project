<?php require APPROOT . '/views/includes/header.php'; 
?>

<div class="container-sm container-fluid w-50">
    <br>
    <?php 
        if(isset($_GET['status'])):
            if($_GET['status'] == 'success'):
                echo '<div class="alert alert-success d-flex align-items-center " role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                                <div class="ms-2">
                                    Success: Profile updated!
                                </div>
                        </div>';
            endif;
        endif;
    ?>

    <div class="mt-4 mb-5 h1 text-center">Edit My Account</div>
    <form action="<?= URLROOT ?>/User/update/<?= $_SESSION['user_id'] ?>" method='POST' enctype="multipart/form-data">

    <div class="form-group ">
        <label class="fs-4 fw-bold" for="fnameinput">First Name: </label>
        <input name="fname" type="text" class="form-control fs-5" id="nameinput" value="<?php echo $data->fname ?>">
    </div>
    <div class="form-group">
        <label class="fs-4 fw-bold" for="lnameinput">Last Name: </label>
        <input name="lname" type="text" class="form-control fs-5" id="nameinput" value="<?php echo $data->lname ?>">
    </div>

    <a href="/LeensTouch/User/editProfile" class="mt-3 btn btn-secondary color float-end">Cancel</a>
    <button type="submit" name='update' class="mt-3 me-3 btn btn-secondary color float-end"  data-toggle="popover" title="Popover title" data-content="Success: Profile updated!">Save Changes</button>   
</form>

</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>