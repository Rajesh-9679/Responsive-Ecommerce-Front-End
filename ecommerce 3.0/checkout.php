<!DOCTYPE html>
<html>

<head>
    <title>Checkout | ShopYard</title>
    <!--    <link href='https://www.soengsouy.com/favicon.ico' rel='icon' type='image/x-icon'/>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="css/checkout.css">
</head>

<body>
    <!-------- Header (Toolbar & Navigation Bar)------------>
    <?php
        include 'common/header.html'; ?>

    <!------- Chckout form ---------->
    <section class="checkout">
        <h2 class="heading">Complete Checkout</h2>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form id="validate" action="/action_page.php">
                        <div class="row">
                            <div class="col-50">
                                <h3 class="section_heading">Billing Address</h3>
                                <label for="fname" class="field_title"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="fullname" placeholder="John Smith" required>
                                <label for="email" class="field_title2"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="john@example.com" required>
                                <label for="adr" class="field_title2"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="337 Russell St, Hadley MA 1035" required>
                                <label for="city" class="field_title2"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="Hadley" required>

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state" class="field_title2">State</label>
                                        <input type="text" id="state" name="state" placeholder="Massachusetts" required>
                                    </div>
                                    <div class="col-50">
                                        <label for="zip" class="field_title2">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="01035" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3 class="section_heading2">Payment</h3>
                                <label for="fname" class="field_title">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>

                                <label for="cname" class="field_title">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="John Smith" required>
                                <label for="ccnum" class="field_title2">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                                <label for="expmonth" class="field_title2">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear" class="field_title2">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2023" required>
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv" class="field_title2">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="352" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Place Your Order" class="submit">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <h3 class="summary_title">Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h3>
                    <p><a href="#" class="item_title">IPHONE 12 Pro</a> <span class="price2">$1499.99</span></p>
                    <p><a href="#" class="item_title">SAMSUNG S21</a> <span class="price2">$700.00</span></p>
                    <hr>
                    <p class="field_title">Total <span class="price"><b>$2199.99</b></span></p>
                </div>
            </div>
        </div>
    </section>

    <!----------- Footer -------------->
    <?php
        include 'common/footer.html'; ?>

    <!-- JS Scripts -->
    <script src="js/nav-drawer.js"></script>
    <script src="js/checkout_validate.js"></script>
</body>

</html>
