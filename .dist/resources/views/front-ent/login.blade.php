<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/classipost/classipost/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 04:40:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ClassiPost | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/font-awesome.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/meanmenu.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/style.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header-three" class="header-style1 header-fixed">
                <div class="header-top-bar top-bar-style1">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-8">
                                <div class="top-bar-left">
                                    <a href="post-ad.html" class="cp-default-btn d-lg-none">Post Your Ad</a>
                                    <p class="d-none d-lg-block">
                                        <i class="fa fa-life-ring" aria-hidden="true"></i>Have any questions? +088 199990 or mail@classipost
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                                <div class="top-bar-right">
                                    <ul>
                                        <li>
                                            <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                <i class="fa fa-lock" aria-hidden="true"></i>Login
                                            </button>
                                        </li>
                                        <li class="hidden-mb">
                                            <a class="login-btn" href="#" id="login-button">
                                                <i class="fa fa-comments-o" aria-hidden="true"></i>Live Chat
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-primary" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="index.html" class="img-fluid">
                                        <img src="{{URL::to('/')}}/assets/img/logo.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 possition-static">
                                <div class="cp-main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="#">Home</a>
                                                <ul class="cp-dropdown-menu">
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li><a href="index3.html">Home 3</a></li>
                                                    <li><a href="index4.html">Home 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">Who We Are</a></li>
                                            <li><a href="how-it-works.html">How It Works?</a></li>
                                            <li class="menu-justify active"><a href="#">Pages</a>
                                                <div class="rt-dropdown-mega container">
                                                    <div class="rt-dropdown-inner">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="index.html">Home 1</a></li>
                                                                    <li><a href="index2.html">Home 2</a></li>
                                                                    <li><a href="index3.html">Home 3</a></li>
                                                                    <li><a href="index4.html">Home 4</a></li>
                                                                    <li><a href="pricing.html">Pricing Plan</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="category-grid-layout1.html">Grid View 1</a></li>
                                                                    <li><a href="category-grid-layout2.html">Grid View 2</a></li>
                                                                    <li><a href="category-grid-layout3.html">Grid View 3</a></li>
                                                                    <li><a href="category-list-layout1.html">List View 1</a></li>
                                                                    <li><a href="category-list-layout2.html">List View 2</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="category-list-layout3.html">List View 3</a></li>
                                                                    <li><a href="single-product-layout1.html">Product Details 1</a></li>
                                                                    <li><a href="single-product-layout2.html">Product Details 2</a></li>
                                                                    <li><a href="single-product-layout3.html">Product Details 3</a></li>
                                                                    <li><a href="favourite-ad-list.html">Favourite Ad</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="my-account.html">My Account</a></li>
                                                                    <li class="active"><a href="login.html">Login</a></li>
                                                                    <li><a href="post-ad.html">Post Ad</a></li>
                                                                    <li><a href="https://www.radiustheme.com/demo/html/classipost/classipost/report-abuse.html" data-toggle="modal" data-target="#report_abuse">Report Abuse</a></li>
                                                                    <li><a href="faq.html">Faq</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="category-grid-layout1.html">Features</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                                <a href="post-ad.html" class="cp-default-btn">Post Your Ad</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li><a href="index3.html">Home 3</a></li>
                                                <li><a href="index4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">Who We Are</a></li>
                                        <li><a href="how-it-works.html">How It Works?</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="pricing.html">Pricing Plan</a></li>
                                                <li><a href="category-grid-layout1.html">Grid View 1</a></li>
                                                <li><a href="category-grid-layout2.html">Grid View 2</a></li>
                                                <li><a href="category-grid-layout3.html">Grid View 3</a></li>
                                                <li><a href="category-list-layout1.html">List View 1</a></li>
                                                <li><a href="category-list-layout2.html">List View 2</a></li>
                                                <li><a href="category-list-layout3.html">List View 3</a></li>
                                                <li><a href="single-product-layout1.html">Product Details 1</a></li>
                                                <li><a href="single-product-layout2.html">Product Details 2</a></li>
                                                <li><a href="single-product-layout3.html">Product Details 3</a></li>
                                                <li><a href="favourite-ad-list.html">Favourite Ad</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="post-ad.html">Post Ad</a></li>
                                                <li><a href="https://www.radiustheme.com/demo/html/classipost/classipost/report-abuse.html" data-toggle="modal" data-target="#report_abuse">Report Abuse</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="category-grid-layout1.html">Features</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        <!-- Search Area Start Here -->
        <section class="search-layout1 bg-body full-width-border-bottom fixed-menu-mt">
        
            <div class="container">
                <form id="cp-search-form">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="form-group search-input-area input-icon-location">
                                <select id="location" class="select2">
                                    <option class="first" value="0">Select Location</option>
                                    <option value="1">Paypal</option>
                                    <option value="2">Master Card</option>
                                    <option value="3">Visa Card</option>
                                    <option value="4">Scrill</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="form-group search-input-area input-icon-category">
                                <select id="categories" class="select2">
                                    <option class="first" value="0">Select Categories</option>
                                    <option value="1">Paypal</option>
                                    <option value="2">Master Card</option>
                                    <option value="3">Visa Card</option>
                                    <option value="4">Scrill</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="form-group search-input-area input-icon-keywords">
                                <input placeholder="Enter Keywords here ..." value="" name="key-word" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-right text-left-mb">
                            <a href="#" class="cp-search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>Search
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Search Area End Here -->
        <!-- Login Area Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body">
            <div class="container">
                <div class="breadcrumbs-area">
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li class="active">SignUp Page</li>
                    </ul>
                </div>
            </div>
            <div class="container">
             <form action="{{url('login-post')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="gradient-wrapper mb--sm">
                            <div class="gradient-title">
                                <h2>Creat An Account</h2>
                            </div>
                            <div class="input-layout1 gradient-padding">
                                <form id="login-page-form">
                                    <div class="row">
                                        <div class="col-sm-3 col-12">
                                    
                                    
                                            <label class="control-label" for="first-name">Username<span>*</span></label>
                                        </div>
                                        <div class="col-sm-9 col-12">
                                            <div class="form-group">
                                                <input type="text"  name="username"id="first-name" class="form-control" placeholder="Enter your phone_number">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                        
                                    <div class="row">
                                        <div class="col-sm-3 col-12">
                                            <label class="control-label" for="password">Password <span>*</span></label>
                                        </div>
                                        <div class="col-sm-9 col-12">
                                            <div class="form-group">
                                                <input type="text"  name="password" id="password" class="form-control" placeholder="Type  Your Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="ml-auto col-sm-9 col-12 ml-none--mb">
                                            <div class="form-group">
                                                <button type="submit" Align="center" class="cp-default-btn-sm">Login Now!</button>
                                            </div>
                                            <div class="form-group">
                                                <a href="{{url('user/')}}">Add an new account</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="sidebar-item-box">
                            <ul class="sidebar-more-option">
                                <li>
                                    <a href="post-ad.html"><img src="{{URL::to('/')}}/assets/img/banner/more1.png" alt="more" class="img-fluid">Post a Free Ad</a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{URL::to('/')}}/assets/img/banner/more2.png" alt="more" class="img-fluid">Manage Product</a>
                                </li>
                                <li>
                                    <a href="favourite-ad-list.html"><img src="{{URL::to('/')}}/assets/img/banner/more3.png" alt="more" class="img-fluid">Favorite Ad list</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item-box">
                            <img src="{{URL::to('/')}}/assets/img/banner/sidebar-banner1.jpg" alt="banner" class="img-fluid m-auto">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
        <!-- Login Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top s-space-equal">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">About us</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="about.html">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Career</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms &amp; Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Sitemap</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">How to sell fast</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="#">How to sell fast</a>
                                    </li>
                                    <li>
                                        <a href="#">Buy Now on Classipost</a>
                                    </li>
                                    <li>
                                        <a href="#">Membership</a>
                                    </li>
                                    <li>
                                        <a href="#">Banner Advertising</a>
                                    </li>
                                    <li>
                                        <a href="#">Promote your ad</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Help &amp; Support</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="#">Live Chat</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="#">Stay safe on classipost</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Follow Us On</h3>
                                <ul class="folow-us">
                                    <li>
                                        <a href="#">
                                            <img src="img/footer/follow1.jpg" alt="follow">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/footer/follow2.jpg" alt="follow">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="social-link">
                                    <li class="fa-classipost">
                                        <a href="#">
                                            <img src="img/footer/facebook.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="tw-classipost">
                                        <a href="#">
                                            <img src="img/footer/twitter.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="yo-classipost">
                                        <a href="#">
                                            <img src="img/footer/youtube.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="pi-classipost">
                                        <a href="#">
                                            <img src="img/footer/pinterest.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="li-classipost">
                                        <a href="#">
                                            <img src="img/footer/linkedin.jpg" alt="social">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-center-mb">
                            <p>Copyright © classipost</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-right text-center-mb">
                            <ul>
                                <li>
                                    <img src="img/footer/card1.jpg" alt="card">
                                </li>
                                <li>
                                    <img src="img/footer/card2.jpg" alt="card">
                                </li>
                                <li>
                                    <img src="img/footer/card3.jpg" alt="card">
                                </li>
                                <li>
                                    <img src="img/footer/card4.jpg" alt="card">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-default-bold mb-none">Login</div>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form>
                            <label>Username or email address *</label>
                            <input type="text" placeholder="Name or E-mail" />
                            <label>Password *</label>
                            <input type="password" placeholder="Password" />
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">Remember Me</label>
                            </div>
                            <button class="default-big-btn" type="submit" value="Login">Login</button>
                            <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                            <label class="lost-password"><a href="#">Lost your password?</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <!-- Report Abuse Modal Start-->
    <div class="modal fade" id="report_abuse" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content report-abuse-area radius-none">
                <div class="gradient-wrapper">
                    <div class="gradient-title">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="item-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>There's Something Wrong With This Ads?</h2>
                    </div>
                    <div class="gradient-padding reduce-padding">
                        <form id="report-abuse-form">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Your E-mail</label>
                                <input type="text" id="first-name3" class="form-control" placeholder="Type your mail here ...">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Your Reason</label>
                                    <textarea placeholder="Type your reason..." class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="cp-default-btn-sm">Submit Now!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Report Abuse Modal End-->
    <!-- jquery-->
    <script src="{{URL::to('/')}}/assets/js/jquery-3.2.1.min.js"></script>
    <!-- Popper js -->
    <script src="{{URL::to('/')}}/assets/js/popper.js"></script>
    <!-- Bootstrap js -->
    <script src="{{URL::to('/')}}/assets/js/bootstrap.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="{{URL::to('/')}}/assets/js/jquery.meanmenu.min.js"></script>
    <!-- Srollup js -->
    <script src="{{URL::to('/')}}/assets/js/jquery.scrollUp.min.js"></script>
    <!-- Select2 Js -->
    <script src="{{URL::to('/')}}/assets/js/select2.min.js"></script>
    <!-- Custom Js -->
    <script src="{{URL::to('/')}}/assets/js/main.js"></script>
</body>


<!-- Mirrored from radiustheme.com/demo/html/classipost/classipost/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 04:40:19 GMT -->
</html>