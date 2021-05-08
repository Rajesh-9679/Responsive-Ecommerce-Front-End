<!DOCTYPE html>
<html>

<head>
    <title>About Us | ShopYard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap library css cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome library for all the modern project icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap js library cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS StyleSheets -->
    <link rel="stylesheet" href="css/about.css">
</head>

<body>
    <!-------- Header (Toolbar & Navigation Bar)------------>
    <?php
        include 'common/header.html'; ?>

    <!-- Main Body -->
    <div class="main-body">
        <div class="banner">
            <div class="category-image">
                <img src="img/shopyard_story.png" alt="" width="100%">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="banner-scondary">
            <div class="category-image">
                <img src="img/who_we_are.png" alt="" width="100%">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="banner">
            <div class="category-image">
                <img src="img/how_it_started.png" alt="" width="100%">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="banner">
            <div class="category-image">
                <img src="img/tagline.png" alt="" width="100%">
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
