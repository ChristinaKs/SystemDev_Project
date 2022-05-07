<?php require APPROOT . '/views/includes/header.php';  ?>
    <div class="container-flex">
    <div class="col-lg-12 mt-4 text-center">
                        <h1 class="display-6">Payment Form</h1>
                    </div>
        <div class="row mx-auto">
            <div class="col-lg-4 w-25  " style="padding-top:4rem; padding-left:2rem;  border-right: 1px solid;">
                <table class="table col-xs-5 table-borderless ">
                    <tbody class="text-center ">
                        <tr >
                            <td class="lead">Subtotal</td>
                            <?php echo '<td class="lead">$'.number_format($data, 2, '.', ' ').'</td>'?>
                        </tr>
                        <tr class="border-dark border-bottom "> 
                             <td class="lead pt-3 pb-5">Shipping</td>
                            <?php echo '<td class="lead pt-3 pb-5 ">$'.number_format(15, 2, '.', ' ').'</td>'?>
                        </tr>
                        <tr>
                            <th class="h3 pt-5">Total</th>
                            <?php echo '<th class="h3 pt-5">$'.number_format((intval($data)+15), 2, '.', ' ').'</th>'?>
                            
                        </tr>
                    </tbody>
                </table>
            
            </div>
            <div class="col-lg-8 w-75 " style="">
                <div class="container row-lg-7 py-5 justify-content-left">
         
                <div class="row ms-5">

                    <div class="col-lg-6 ms-5 ">
 
                        <div class="card ">
                            <div class="card-header ">
                            
                                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                    <!-- Credit card form tabs -->
                                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                        <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                                        <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                        
                                    </ul>
                                </div> <!-- End -->
                                <!-- Credit card form content -->
                                <div class="tab-content">
                                    <!-- credit card info-->
                                    <div id="credit-card" class="tab-pane fade show active pt-3">
                                        <!-- onsubmit="event.preventDefault()" -->
                                        <form role="form" action="<?= URLROOT ?>/Checkout-Session/" method="POST">
                                            <!-- <div class="form-group"> <label for="username">
                                                    <h6>Card Owner</h6>
                                                </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                            <div class="form-group"> <label for="cardNumber">
                                                    <h6>Card number</h6>
                                                </label>
                                                <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                                    <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group"> <label><span class="hidden-xs">
                                                                <h6>Expiration Date</h6>
                                                            </span></label>
                                                        <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                        </label> <input type="text" required class="form-control"> </div>
                                                </div>
                                            </div> -->
                                          
                                    <h6 class="pb-2"> Credit Card - Secure Payement</h6>
                                     <p> <button type="submit" id="checkout-button" class="subscribe btn btn-primary btn-block shadow-sm"> Pay with Stripe </button> </p>
                                    <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment on Stripe. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                              

                                            <div class="card-footer"> 
                                        </form>
                                    </div>
                                </div> <!-- End -->
                                <!-- Paypal info -->
                                <div id="paypal" class="tab-pane fade pt-3">
                                    <h6 class="pb-2">Select your paypal account type</h6>
                                    <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                                    <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                                    <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                                </div> <!-- End -->
                                <!-- bank transfer info -->
                                
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
    $('[data-toggle="tooltip"]').tooltip()
    })
        </script>

<?php require APPROOT . '/views/includes/footer.php'; ?>