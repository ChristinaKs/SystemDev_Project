<?php require APPROOT . '/views/includes/header.php'; ?>

<style>
* {
    box-sizing: border-box;
}
.row {
    width: 100%;
    overflow: hidden;
}
.column-1 {
    margin-left: 50px; 
    margin-top: 30px;
    float: left;
    width: 170px;
}
.column-2 {
    margin-top: 30px;
    width: 70%;
}
.column-3 {
    margin-top: 30px;
    width: 15%;
}
.checkout {
    margin-left: 50px;
    <?php if(empty($data)){?>
        display: none;
    <?php } ?>
}
.emptyMessage{
    <?php if(!empty($data)){?>
        display: none;
    <?php }else{ ?>
        margin: auto;
        width: 12%;
        padding: 10px;
    <?php } ?>
}
/* .removeButton{
    background-color: #199319;
    color: white;
    padding: 15px 25px;
    text-decoration: none;
    cursor: pointer;
    border: none;
} */
</style>

<pre>
<?php
//   echo $data['subtotal'];
//   var_dump($data);
//   foreach ($data['cart'] as $item) {
//     echo $item->upc;   
//   }
//   foreach ($_SESSION['cart'] as $product ) {
//     echo $product;
//   }
//   foreach ($data['product_amount'] as $product ) {
//     echo $product;
//   }
?>
</pre> 

<?php $total = 0; foreach ($data as $item){ ?>
    <form action="" method="post">
        <div class="item">
            <div class="row">
                <div class="column-1">
                    <div class="image">
                        <img src="<?= URLROOT.'/public/img/'.$item['image'] ?>" alt="image" width="140" height="140">
                        <div class="buttons" style="margin-top: 10px; margin-bottom: 10px;">
                            <!-- <input type="submit" value="Remove" name="remove" style="margin-right: 20px;" onclick=""> -->
                            <a class="btn btn-secondary btn-sm" href="viewCart?remove=<?=$item['cart_id']?>" name="remove" class="remove">Remove</a>
                            <a class="btn btn-secondary" href="/LeensTouch/Catalog/editPersonalization/<?=$item['custom_id']?>" name="edit">Edit</a>
                            <button style="margin-top: 10px;" class="btn btn-secondary" type="submit" name="update">Update</button>
                        </div>
                    </div>
                </div>

                <div class="column-2">
                    <h5><?= $item['name']?></h5>
                    <input style="display: none;" hidden type='number' name='dropdown[0][cart_id]' value="<?=$item['cart_id']?>"/>
                    <select name="dropdown[0][quantity]" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:60px">
                        <?php $count = 1; for ($i=0; $i < $item['itemquantity']; $i++) {?>
                            <option <?php if($count == $item['quantity']){ ?> selected <?php } ?> value="<?=$count?>"><?=$count?></option>
                        <?php $count++; } ?>
                    </select>
                    <p style="margin-top: 10px; font-size: 13px; width: 50%;">
                        Personalizations: <br> 
                        <?=$item['custom']['0']['text']?>
                    </p>
                </div>
                <div class="column-3">
                    <h5><?php echo $item['total_price'] * $item['quantity']; $total += $item['total_price'] * $item['quantity']?>$</h5>
                </div>
            </div>
        </div>
    </form>
    <hr>
<?php } ?>

<div class="checkout">
    <span class="text">Subtotal</span>
    <span class="price">&dollar;
        <?php
            // $price = 0;
            // foreach ($data as $item) {
            //     $price += $item['total_price'] ;
            // }
            echo $total;
        ?>
    </span>
    <a class="btn btn-secondary" href="/LeensTouch/Checkout/index/<?=$total?>">Checkout</a>
</div>

<div class="emptyMessage">
    <span class="text">Your cart is Empty</span>
    <a href="/LeensTouch/Catalog/catalog" style="margin-top:10px;">Continue Shopping</a>
</div>


<?php require APPROOT . '/views/includes/footer.php'; ?>