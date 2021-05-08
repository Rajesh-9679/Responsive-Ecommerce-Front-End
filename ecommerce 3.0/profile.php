<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Account | ShopYard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap library css cdn-->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome library for all the modern project icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap js library cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/profile.css" rel="stylesheet">
</head>

<body>


    <div class="main-body">
        <!-------- Header (Toolbar & Navigation Bar)------------>
        <?php
        include 'common/header.html'; ?>

        <div class="container body-container">
            <!---- Nav text & Page Heading ------>
            <p class="page-nav">Homepage / My Account</p>
            <h1 class="page-title">My Account</h1>

            <div class="row main-row">
                <!------ Profile Card with nav elements ---------->
                <div class="profile-nav col-lg-3 col-12">
                    <div class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                            </a>
                            <h1 class="user-name">Camila Smith</h1>
                            <p>deydey@theEmail.com</p>
                        </div>

                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
                        </ul>
                    </div>
                </div>

                <!------ Account informations ---------->
                <div class="profile-info col-lg-9 col-12">
                    <div class="panel">

                        <!------ Personal Info ---------->
                        <div class="panel-body bio-graph-info">
                            <h1>Personal Details</h1>
                            <div class="row">
                                <div class="col-sm-6 bio-row">
                                    <p><span>First Name </span>: Camila</p>
                                </div>
                                <div class="col-sm-6 bio-row">
                                    <p><span>Last Name </span>: Smith</p>
                                </div>
                                <div class="col-sm-6 bio-row">
                                    <p><span>Email </span>: jsmith@flatlab.com</p>
                                </div>
                                <div class="col-sm-6 bio-row">
                                    <p><span>Mobile </span>: (12) 03 4567890</p>
                                </div>
                                <div class="col-sm-6 bio-row">
                                    <p><span>Gender </span>: Female</p>
                                </div>
                                <div class="col-sm-6 bio-row">
                                    <p><span>Birthday </span>: 13 July 1983</p>
                                </div>
                                <div class="col-sm-6 bio-row">
                                    <p><span>Country </span>: Australia</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!------ Row 1 Panel Card 1 (Recent Orders) ---------->
                        <div class="col-md-6 col-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>Recent Orders</h3>
                                    <!------ Orders card ------>
                                    <div class="row orders-row">
                                        <div class="col-4">
                                            <img src="https://rukminim1.flixcart.com/image/612/612/jfsknm80/smart-assistant/y/v/e/home-mini-ghmini-charcoal-google-original-imaf46ejynztyzrk.jpeg" class="recent-orders-img">
                                        </div>
                                        <div class="col-8 orders-info">
                                            <h5 class="recent-orders-h5">Delivery expected on May 1</h5>
                                            <p class="recent-orders-p">Google Home Mini with Google Assistant</p>
                                        </div>
                                    </div>
                                    <!------ Orders card ------>
                                    <div class="row orders-row">
                                        <div class="col-4">
                                            <img src="https://m.media-amazon.com/images/I/61u0y9ADElL._AC_UY327_FMwebp_QL65_.jpg" class="recent-orders-img">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="recent-orders-h5">Delivered on April 12</h5>
                                            <p class="recent-orders-p">Amazon Echo Dot with built-in Amazon Alexa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------ Row 1 Panel Card 2 (Saved Addresses) ---------->
                        <div class="col-md-6 col-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="address-title">Saved Addresses</h3>
                                    <div class="row address-row">
                                        <div class="col-12 address-col">
                                            <h5 class="recent-orders-h5">Subhajit Kar</h5>
                                            <p class="recent-orders-p">Kanjiakhali, Uluberia, Howrah district, West Bengal, India - 711315 | Phone: 1234567890</p>
                                        </div>
                                        <div class="col-12 address-col">
                                            <h5 class="recent-orders-h5">Rajesh Bera</h5>
                                            <p class="recent-orders-p">Kanjiakhali, Uluberia, Howrah district, West Bengal, India - 711315 | Phone: 9583217810</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------ Row 2 Panel Card 1 --------->
                    </div>
                    <div class="row">
                        <!------ Row 2 Panel Card 1 (Wishlist) ---------->
                        <div class="col-md-6 col-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>My Wishlist</h3>
                                    <!------ Wishlist product card ------>
                                    <div class="row orders-row">
                                        <div class="col-4">
                                            <img src="https://rukminim1.flixcart.com/image/580/696/kl9rssw0/shoe/u/h/0/7-hkk72-adidas-conavy-scrora-stone-original-imagyfkkzvykmgwz.jpeg" class="recent-orders-img">
                                        </div>
                                        <div class="col-6">
                                            <h5 class="recent-orders-h5">ADIDAS <span class="wishlist-price">$ 55.45</span></h5>
                                            <p class="recent-orders-p">Adi-Dash M Running Shoes For Men</p>
                                        </div>
                                    </div>
                                    <!------ Wishlist product card ------>
                                    <div class="row orders-row">
                                        <div class="col-4">
                                            <img src="https://rukminim1.flixcart.com/image/580/696/kdnf98w0hlty2aw-0/t-shirt/i/i/5/-original-imafunx3fzsrxjwh.jpeg?q=50" class="recent-orders-img">
                                        </div>
                                        <div class="col-6">
                                            <h5 class="recent-orders-h5">TRIPR <span class="wishlist-price">$ 21.99</span></h5>
                                            <p class="recent-orders-p">Abstract Men Hooded Neck Dark Blue T-Shirt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------ Row 2 Panel Card 2 (Saved Cards) ---------->
                        <div class="col-md-6 col-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>Saved Cards</h3>
                                    <!------ Orders card ------>
                                    <div class="row orders-row">
                                        <div class="col-4">
                                            <img src="img/visa.png" class="recent-orders-img" style="padding: 8px;">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="recent-orders-h5">**** **** **** 4256</h5>
                                            <p class="recent-orders-p">VISA Platinum</p>
                                        </div>
                                    </div>
                                    <!------ Orders card ------>
                                    <div class="row orders-row">
                                        <div class="col-4">
                                            <img src="img/mastercard.png" class="recent-orders-img" style="padding: 8px;">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="recent-orders-h5">**** **** **** 1120</h5>
                                            <p class="recent-orders-p">MasterCard</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----------- Footer -------------->
        <?php
        include 'common/footer.html'; ?>
    </div>

    <!------ JS Scripts ---------->
    <script src="js/nav-drawer.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
</body>

</html>
