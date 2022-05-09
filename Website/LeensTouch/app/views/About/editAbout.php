<?php require APPROOT . '/views/includes/header.php'; 
?>


<?php
$about = $data[0];
?> 
<div class="Title" style="margin-left: 75px">
    <h1>About Leen's Touch Edit Page</h1>
</div>
    
    <form action='' method='post' enctype="multipart/form-data">

    <div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="first_paragraph">First Paragraph: </label>
        <input name="first_paragraph" type="text" class="form-control" id="first_paragraph" value="<?php echo $about->first_paragraph?>">
    </div><br><div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="second_paragraph">Second Paragraph: </label>
        <input name="second_paragraph" type="text" class="form-control" id="second_paragraph" value="<?php echo $about->second_paragraph?>">
    </div><br><div class="form-group" style="max-width: 1200px; margin: auto;">
        <label for="third_paragraph">Third Paragraph: </label>
        <input name="third_paragraph" type="text" class="form-control" id="third_paragraph" value="<?php echo $about->third_paragraph?>">
    
    <br>
    <button type="submit" name='update' class="btn btn-primary" style="background-color: #e4c5bd; color: white;">Update</button>
    <button id='cancel' name='cancel' class='btn btn-primary' style="background-color: #e4c5bd;"> <a href='/LeensTouch/About/displayABout' style='text-decoration: none; color: white;'>Cancel </a></button>
    </form>   
<?php require APPROOT . '/views/includes/footer.php'; ?>