<?php require APPROOT . '/views/includes/header.php';  ?>


        <div class="product-image mt-0">
            <img src=" <?php echo URLROOT.'/public/img/'.$data->image ?>" class=" float-start img-fluid" alt="" style="width:36%">  
        </div>
        
        <div class="product-info d-grid ms-5 mt-0">
            <div class="ms-5 mb-3 mt-5"><span class="h5 ">Name:</span> 
                        <?php echo $data->product_name ?> </div>
            <div class="ms-5 mb-3"><span class="h5 ">Price:</span> 
                        <?php echo number_format($data->price, 2, ',', ' ') ?>$</div>
            <div class=" ms-5 mb-3 me-5"><span class="h5">Product Description:</span>
                        <?php echo $data->description ?></div>
            <div class="h5 ms-5">Colors Available:</div>
                <select class="form-select w-25 ms-5 mb-3"  aria-label="size 3 select example">

                    <!-- Will devide multiple colors separated by comma and Uppercase the first Letter -->
                    <?php
                     $colors = explode (",", $data->colour);
                     foreach ($colors as $value) {
                      echo '<option value= "'.$value.'" selected>'.ucfirst($value).'</option>';
                     }
                     ?>
                </select>
      
            <div class="ms-5 mb-3"><span class="h5 ">Estimated Fulfillment Time:</span> X days</div>
            <div class="ms-5 mb-3"><span class="h5 ">Available:</span> 
                    <?php echo ($data->quantity<'1')?"Sold Out": $data->quantity." amounts" ?> </div>
               <div class="ms-5 mb-1 h5 ">Personalizations:</div>
            <textarea class="me-5 ms-5" id="message" cols="5" rows="2" placeholder="Write your message here"></textarea>
   
            <input type='file' name='picture' class='me-5 ms-5 mt-1'/>
            
    </div>
    <!-- If quantity greater than 0, the Add to Cart Button will be displayed. -->
<form action='' method='post' enctype="multipart/form-data">
    <?php
        if($data->quantity>'0'){
        echo
            '<button type="submit" name="add" class="btn btn-primary btn-lg float-end rounded-pill me-5" style="background-color:#e4c5bd; border: 1px solid #000000; color: #000000">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" class="bi bi-cart-plus-fill" viewBox="0 0 20 20">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                </svg>
                <span>Add to Cart</span>
            </button>';
        }
    ?>
</form>
  



<?php require APPROOT . '/views/includes/footer.php'; ?>
