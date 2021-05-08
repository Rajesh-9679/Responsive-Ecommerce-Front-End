<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | ShopYard</title>

    <!--Bootstrap library css cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome library for all the modern project icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap js library cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS StyleSheets -->
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <!-------- Header (Toolbar & Navigation Bar)------------>
    <?php
        include 'common/header.html'; ?>

    <section>
        <div class="container">
            <!------- Business location, contact info & social ---------->
            <div class="contactInfo">
                <div>
                    <h2> Contact Info</h2>
                    <hr>
                    <ul class="info">
                        <li>
                            <span><img src="icon/location.png"></span>
                            <span>2912 Meadowbrook Road<br>
                                Los Angeles, CA<br>90017</span>
                        </li>
                        <li>
                            <span><img src="icon/mail.png"></span>
                            <span>lorem@ipsum.com</span>

                        </li>
                        <li>
                            <span><img src="icon/call.png"></span>
                            <span>310-286-1623</span>

                        </li>
                    </ul>
                </div>
                <ul class="social">
                    <li><a href="#"><img src="icon/fb.png"></a></li>
                    <li><a href="#"><img src="icon/insta.png"></a></li>
                    <li><a href="#"><img src="icon/linkedin.png"></a></li>
                    <li><a href="#"><img src="icon/twitter.png"></a></li>
                    <li><a href="#"><img src="icon/pinterest.png"></a></li>
                </ul>
            </div>

            <!------- Contact form ---------->
            <div class="contactForm">
                <h2>Send a Message</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>First Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>Last Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="email" required>
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>Mobile Number</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea required></textarea>
                        <span>Write your message here...</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="Send">
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
    <!------------------------------------------------------------------------>
</body>

</html>
