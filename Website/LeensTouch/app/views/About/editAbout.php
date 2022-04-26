<?php require APPROOT . '/views/includes/header.php'; 
?>


<?php
$about = $data[0];
?> 
    <h1>Update Products View</h1>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group">
        <label for="first_paragraph">First Paragraph: </label>
        <input name="first_paragraph" type="text" class="form-control" id="first_paragraph" value="<?php echo $about->first_paragraph?>">
    </div><div class="form-group">
        <label for="second_paragraph">Second Paragraph: </label>
        <input name="second_paragraph" type="text" class="form-control" id="second_paragraph" value="<?php echo $about->second_paragraph?>">
    </div><div class="form-group">
        <label for="third_paragraph">Third Paragraph: </label>
        <input name="third_paragraph" type="text" class="form-control" id="third_paragraph" value="<?php echo $about->third_paragraph?>">
    
    <br>
    <button type="submit" name='update' class="btn btn-primary">Update</button>
    <button id='cancel' name='cancel' class='btn btn-primary'> <a href='/LeensTouch/About/displayABout' >Cancel </a></button>
    </form>   
<?php require APPROOT . '/views/includes/footer.php'; ?>