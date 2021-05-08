<!DOCTYPE html>

<html>

<head>

    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap library css cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome library for all the modern project icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap js library cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/cart.css">

</head>

<body>
    <!-------- Header (Toolbar & Navigation Bar)------------>
    <?php
        include 'common/header.html'; ?>

    <!--------- Cart Items ----------->
    <div class="container">
        <div class="title-box">
                <h2>Shopping Cart</h2>
            </div>
        <div class="cart">
            <div class="products">
                <div class="product">
                    <img src="img/shoes.jpg">
                    <div class="product-info">
                        <h2 class="product-name">Dunkaston - Sneakers for Men (white)</h2>
                        <h4 class="product-price">$ 56.99  <del>$ 79</del></h4>
                        <h4 class="product-offer">40% discount applied</h4>
                        <p class="product-quantity">Quantity: <input value="1" name="">
                        <p class="product-remove">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <span class="remove">Remove</span>
                        </p>
                    </div>
                </div>

                <div class="product">
                    <img src="img/bag.jpg">
                    <div class="product-info">
                        <h2 class="product-name">Cuzdan - Brown Men Sling Bag</h2>
                        <h4 class="product-price">$ 185.79  <del>$ 235.50</del></h4>
                        <h4 class="product-offer">30% discount applied</h4>
                        <p class="product-quantity">Quantity: <input value="1" name="">
                        <p class="product-remove">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <span class="remove">Remove</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="cart-total">
                <p>
                    <span class="cart-summary-title">Total Price</span>
                    <span class="cart-summary-price">$ 242.78</span>
                </p>
                <p>
                    <span class="cart-summary-title">Number of Items</span>
                    <span class="cart-summary-price">2</span>
                </p>
                <p>
                    <span class="cart-summary-title">You will Save</span>
                    <span class="cart-summary-price">$ 314.50</span>
                </p>
                <a href="checkout.php">Proceed to Checkout</a>
            </div>
        </div>
    </div>

    <!----------- Footer -------------->
    <?php
        include 'common/footer.html'; ?>

    <!-------------------------- JS Scripts ---------------------------------->
    <script src="js/nav-drawer.js"></script>
    <!------------------------------------------------------------------------>
</body>

</html>
