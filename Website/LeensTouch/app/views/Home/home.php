<?php require APPROOT . '/views/includes/header.php'; 
?>
    <img src="public/img/leenstouch_home.png" class=" float-start img-fluid" alt="" style="width:100%" >

    <?php
        if($data != []){
            echo '<div class="alert alert-success" role="alert">'.
             $data['msg'].'
          </div>';
        }
    ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>