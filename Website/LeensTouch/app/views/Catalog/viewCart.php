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
}
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

<?php foreach ($data as $item){ ?>
    <form action="cart" method="post">
        <div class="item">
            <div class="row">
                <div class="column-1">
                    <div class="image">
                        <img src="<?= URLROOT.$item['image'] ?>" alt="image" width="140" height="140">
                        <div class="buttons" style="margin-top: 10px; margin-bottom: 10px;">
                            <input type="submit" value="Remove" name="remove" style="margin-right: 20px;">
                            <input type="submit" value="Edit" name="edit">
                        </div>
                    </div>
                </div>

                <div class="column-2">
                    <h5><?= $item['name']?></h5>
                    <select name="quantity" id="quantity">
                        <option value="x">X</option>
                    </select>
                    <p style="margin-top: 10px; font-size: 13px; width: 50%;">
                        Personalizations: <br> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo 
                        recusandae unde a ipsa. Recusandae sunt perferendis deserunt
                    </p>
                </div>
                <div class="column-3">
                    <h5><?= $item['total_price'] ?>$</h5>
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
            $price = 0;
            foreach ($data as $item) {
                $price += $item['total_price'];
            }
            echo $price;
        ?>
    </span>
    <input style="float: right; margin-right: 170px;" type="submit" value="Checkout" name="checkout"> 
</div>


<?php require APPROOT . '/views/includes/footer.php'; ?>