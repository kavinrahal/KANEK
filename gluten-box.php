<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="Gluten Free, gluten-free, no gluten, food, subscription, vegan, gluten free, standard, cafe, cafe crate, treat, goodies, sweets, cake, muffin, slice, cookie, pastry, monthly, australia, local">
    <meta name="description" content="Gluten free subscription box">
    <meta name="author" content="KANEK">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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
                        <li class="nav-item active"><a href="shop-detail.php" class="nav-link">SHOP</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
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
                    <h2>Gluten-free Box</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="choose-box.php">Choose Box</a></li>
                        <li class="breadcrumb-item active">Gluten-free Box </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100 rounded" src="images/glutenfree.png" alt="First slide"> </div>
                        </div>
						

					</a>

					</a>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>Gluten-free Box</h2>
						<h4 class = "item_name">Short Description:</h4>
						<p>The Gluten-free box makes sure that all the pastries and treats made are 100% gluten-free, accomodated by all our awesome cafes!  </p>
						<p>Each box contains: 15 different goods from 3 cafes, a variety of gluten free snacks, a brochure telling you about each cafe</p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Choose subscription type</label>
									<div class="row">
										<div class="col-sm simpleCart_shelfItem">
                                            <p class="item_name" style="color:#fdfce5">Gluten-Free Box - 1 Month</p>
											<a class = "item_add" href = "javascript:;">
											<img border="0" alt="subscribe" src="images/1month.png" width="209" height="57">
											<a/>
											<div class = "item_price">$540 yearly</div>
											<p></p>
										</div>
										<div class="col-sm simpleCart_shelfItem">
                                            <p class="item_name" style="color:#fdfce5">Gluten-Free Box - 3 Month</p>
											<a class = "item_add" href = "javascript:;">
											<img border="0" alt="subscribe" src="images/3month.png" width="209" height="57">
											<a/>
											<div class = "item_price">$516 yearly</div>
											<p></p>
										</div>
										<div class="col-sm simpleCart_shelfItem">
                                            <p class="item_name" style="color:#fdfce5">Gluten-Free Box - 6 Month</p>
											<a class = "item_add" href = "javascript:;">
											<img border="0" alt="subscribe" src="images/6month.png" width="209" height="57">
											<a/>
											<div class = "item_price">$492 yearly</div>
											<p></p>
										</div>
										<div class="col-sm simpleCart_shelfItem">
                                            <p class="item_name" style="color:#fdfce5">Gluten-Free Box - 12 Month</p>
											<a class = "item_add" href = "javascript:;">
											<img border="0" alt="subscribe" src="images/12month.png" width="209" height="57">
											<a/>
											<div class = "item_price">$468 yearly</div>
										</div>

									</div>
		
								</div>
								
							</li>
						</ul>

						</div>

						<div class="add-to-btn">
							<div class="add-comp">
								<p>*Prices are per month, subscriptions are automatically renewed after their duration, you may cancel at any time.</p>
							</div>
							<div class="share-bar">

							</div>
						</div>
                    </div>
                </div>
            </div>
			


        </div>
    </div>
    <!-- End Cart -->

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