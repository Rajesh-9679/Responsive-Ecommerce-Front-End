<!DOCTYPE html>
<html>

<head>
    <title>Varanga-Woman Black Quirky... | ShopYard, the Fashion Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap library css cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome library for all the modern project icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap js library cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS StyleSheets -->
    <link rel="stylesheet" href="css/product-info.css">
</head>

<body>
    <!-------- Header (Toolbar & Navigation Bar)------------>
    <?php
        include 'common/header.html'; ?>

    <!------------ Product information -------------->
    <div class="hero">
        <div class="row product-info-row">
            <div class="col-4 images-section">

                <div class="slider">
                    <div class="product">

                        <img src="img/product1.png" alt="" onclick="clickme(this)">
                        <img src="img/product2.png" alt="" onclick="clickme(this)">
                        <img src="img/product3.png" alt="" onclick="clickme(this)">
                        <img src="img/product4.png" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="img/product1.png" id="imagebox" alt="">
                    </div>
                </div>

            </div>

            <div class="col">
                <p class="brand">Brand: Varanga</p>
                <h1>Woman Black Quirky Print Empire Dress</h1>
                <p class="description">An amazing range of women dress in soft and solid colors for summer that looks perfect for regular wear. With beautiful designs and patterns, these apparels are very stylish and comfortable too.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <p>(256 reviews &#38; 986 ratings)</p>
                </div>
                <p class="price">Price: $49.99 <del>$56.25</del><small> (12.5% off)</small></p>
                <p>Size: <select name="size">

                        <option value="select size">select size</option>
                        <option value="small">small</option>
                        <option value="medium">medium</option>
                        <option value="large">large</option>

                    </select></p>
                <p>Quantity: <input type="text" value="1"></p>
                <div class="table btn-options">
                    <ul>
                        <li><a href="#">Buy Now</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="product-desc">
        <div class="container">
            <div class="title-box">
                <h2>Description</h2>
            </div>
            <p class="desc">
                Talking concerning western dresses, the culture has influenced several of the traditional dresses still. One will embrace their style with the mash-up of their own fashion statement too. And this freedom makes these dresses a lot of likable to wear anytime with none reconsideration.

                The dress has Indian traditional charm. Suddenly, in a Sunday breezy morning, if you got the intuition of stepping into a laid-back attitude, then this dress can build desire you’re on the beach vacation. The dress hides the feminine curves fantastically to showcase the spirit of the woman. So, select a day and wear it matching with your mood. This dress may be a excellent apparel for any kind of body shape.
            </p>
        </div>
    </section>

    <section class="similar">
        <div class="container">
            <div class="title-box">
                <h2>Similar Items</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/onsale1.png">
                        <div class="overlay-right">
<!--
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
-->
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Realme Watch S</h3>
                        <h4><i>(Black Strap, Regular)</i></h4>
                        <h5>$68.00 <del>$79.00</del></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/onsale2.jpg">
                        <div class="overlay-right">
<!--
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
-->
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>LEVI's</h3>
                        <h4><i>Skinny Men dark blue jeans</i></h4>
                        <h5>$19.99 <del>$24.99</del></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/onsale3.jpg">
                        <div class="overlay-right">
<!--
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
-->
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Dunkaston</h3>
                        <h4><i>Sneakers for Men (white)</i></h4>
                        <h5>$8.99 <del>$12.99</del></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="img/onsale4.jpg">
                        <div class="overlay-right">
<!--
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
-->
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Libas</h3>
                        <h4><i>Women printed kurta (Yellow)</i></h4>
                        <h5>$20.00 <del>$25.00</del></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------- Footer -------------->
    <?php
        include 'common/footer.html'; ?>

    <!-------------------------- JS Scripts ---------------------------------->
    <script src="js/nav-drawer.js"></script>
    <script>
            function clickme(smallImg) {

                var fullImg = document.getElementById("imagebox");
                fullImg.src = smallImg.src;

            }
        </script>
    <!------------------------------------------------------------------------>

</body>

</html>
