<?php require APPROOT . '/views/includes/header.php';  ?>

<style>
 body{
  
 }
.product-card{
  height: 450px;
  width: 300px;
  margin: 10px 60px;
  display: none;
  animation: blur .8s ease-out ;
  
}
.product-container{
  display: flex;
    flex-direction: row;
    flex-flow: row wrap;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
    overflow: hidden;
    overflow-x: hidden;
    overflow-y: hidden; /* Hide vertical scrollbar */

}

.product-thumb {
  height: 300px;
  width: 300px;
  margin-bottom: 10px;
  border:1px solid black;
  
}



.noContent {
  pointer-events: none;
  display: none!important;
}


.product-info{
  border-style: solid;
  border-width: 1px;
  background-color:#e4c5bd;
}
</style>
<div class="container-fluid">
<h1>Catalog View</h1>

  <div class="product-container">
    <div class="product-card">
        <div class=" product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class=" product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class=" product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class=" product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class=" product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class="product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class="product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class="product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class="product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">

            <a class="img-btn" href="/LeensTouch/Product">
            <img src="public/img/245222320_543794790063973_4504688221895774228_n.jpg" class="product-thumb" alt="" >
            </a>
        </div>
        <div class="product-info">
            <h5 class="product-brand">Name: Name of Item</h2>
            <div class="price">Price: $20</div>
            <div class="availability">Available</div>
            <a class="card-btn" href="http://">Add to cart</a>
        </div>
    </div>
  </div>
       
</div>


<button id = "loadMore" type="button" class="btn btn-primary btn-lg rounded-3 mx-auto mb-5" style="display: block; background-color:#e4c5bd; border: 1px solid #000000; color: #000000; ">
        Load More</button>
        
   <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
<script>
  $(document).ready(function () {
  $(".product-card").slice(0, 4).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".product-card:hidden").slice(0, 4).slideDown();
    if ($(".product-card:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  })
</script>

<?php require APPROOT . '/views/includes/footer.php'; ?>