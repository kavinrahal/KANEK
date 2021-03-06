<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Cafe Crate</title>
    <meta name="keywords" content="FAQ, frequently asked questions, food, subscription, vegan, gluten free, standard, cafe, cafe crate, treat, goodies, sweets, cake, muffin, slice, cookie, pastry, monthly, australia, local">
    <meta name="description" content="FAQ for Cafe Crate">
    <meta name="author" content="KANEK">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/simpleCartjs/simpleCart.js"></script>
    <script src="js/simplecartjs-config.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php include('login.php'); ?>
   <!-- Start Main Top -->
   <header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo mainLogo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a href="shop-detail.php" class="nav-link">SHOP</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    <li class="nav-item active"><a class="nav-link" href="faq.php">FAQ</a></li>
                    <div class="login-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                            <option>Register Here</option>
                            <option>Sign In</option>
                        </select>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="logout.php" style = "color:red">Logout</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="side-menu"><a href="./cart.php">
                    <i class="fa fa-shopping-bag"></i>
                        <p>My Cart</p>
                        <sup class = "simpleCart_quantity"></sup>
                        </a>
                </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Frequently Asked Questions</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"> Frequently Asked Questions </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start FAQ-->
    <div class="faq-main">
        <div class="container">
            <div class="container">
                <div class="faq-right">
                    <h2>Frequently Asked Questions</h2>
                    <br>
                    <h3>I have dietary restrictions and food allergies. How do I ensure I can consume your products?</h3>
                    <p>We provide a list of ingrediants and certain food allergies with every box to ensure our customers can safely consume our products. We also offer special boxes for those with dietary restrictions.</p>
                </div>
            </div>
            <div class="container">
                <div class="faq-right">
                    <h3>Where do you ship?</h3>
                    <p>We currently ship Australia wide. </p>
                </div>
            </div>
            <div class="container">
                <div class="faq-right">
                    <h3>How much is shipping?</h3>
                    <p>Shipping is FREE with every order because we love our customer that much ????</p>
                </div>
            </div>
            <div class="container">
                <div class="faq-right">
                    <h3>When do you ship?</h3>
                    <p>We ship out our orders to ensure that you will recive them within the first week of the month. If you havent recieved your within a week, send us a friendly email at contact@cafecrate.com and we'll be happy to help.</p>
                </div>
            </div>
            <div class="container">
                <div class="faq-right">
                    <h3>What payment options are there?</h3>
                    <p>We offer multiple payments options such as Visa, Mastercard, Paypal and Giftcards</p>
                </div>
            </div>
            <div class="container">
                <div class="faq-right">
                    <h3>When will I be billed?</h3>
                    <p>Depending on your subscription plan, you will be billed on the 1st day of the month.</p>
                </div>
            </div>
            <div class="container">
                <div class="faq-right">
                    <h3>What payment options are there?</h3>
                    <p>We offer multiple payments options such as Visa, Mastercard, Paypal and Giftcards</p>
                </div>
            </div>
            <div class="container">
                <div class="faq-right">
                    <h3>How do I cancel my subscription??</h3>
                    <p>You can cancel your subscription through your account. 
                        You can also re-activate your subscription anytime through here as well.
                        Alternativly, you can send us an email at contact@cafecrate.com and we'll be happy to help
                    </p>
                </div>
            </div> 
        </div>
    </div>
    <!-- End FAQ-->
    
    <!-- Start Contact Us  -->
    <div class="contact-box-main2">
        <div class="container">
            <div class="faq-right">
                <h3>Couldn't find the answer to your question? Feel free to <b><a href="contact-us.php">contact us here.</a></b></h3>
            </div> 
        </div>
    </div>
    <!-- End -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <?php include "./footer.php" ?>

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>