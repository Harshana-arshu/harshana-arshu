<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/classipost/classipost/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 04:33:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ClassiPost | Home 3</title>
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
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/meanmenu.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/assets/css/magnific-popup.css">
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
        <form action="{{url('search_index')}}" method="get" enctype="multipart/form-data">
         {{csrf_field()}}
            <div id="header-three" class="header-style2 header-fixed bg-body">
                <div class="header-top-bar top-bar-style2">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="top-bar-left">
                                    <a href="{{url('/post-add')}}" class="cp-default-btn d-lg-none">Post Your Ad</a>
                                    <p class="d-none d-lg-block">
                                        <i class="fa fa-life-ring" aria-hidden="true"></i>Have any questions? +088 199990 or mail@classipost
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="top-bar-right">
                                    <ul>
                                        <li>
                                        <a href="{{url('login/')}}"  ><button type="button" class="login-btn" >
                                                <i class="fa fa-lock" aria-hidden="true"></i>Login
                                            </button></a>
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
                <div class="main-menu-area" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="index.html" class="img-fluid"><img src="{{URL::to('/')}}/assets/img/logo-dark.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-l g-8 col-md-8 col-sm-6 possition-static">
                                <div class="cp-main-menu">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="#">Home</a>
                                                <ul class="cp-dropdown-menu">
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li class="active"><a href="index3.html">Home 3</a></li>
                                                    <li><a href="index4.html">Home 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">Who We Are</a></li>
                                            <li><a href="how-it-works.html">How It Works?</a></li>
                                            <li class="menu-justify"><a href="#">Pages</a>
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
                                                                    <li><a href="{{url('pr')}}">My Account</a></li>
                                                                    <li><a href="{{url('login')}}">Login</a></li>
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
                                  
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                                <a href="{{url('/post-add')}}" class="cp-default-btn ">Post Your Ad</a>
                            </div>
                        </div>
                    </div>
                    <div class="search-layout3">
                        <div class="search-layout3-holder">
                            <div class="container">
                                <div id="cp-search-form2" class="bg-primary search-layout3-inner">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="form-group search-input-area input-icon-location">
                                                  <select id="location" class="select2">
                                <option >Select location</option>
                                @foreach($loc as $locs)
                                <option class="first" value="0">{{$locs->name}}</option>
                               @endforeach
                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-5">
                                            <div class="form-group search-input-area input-icon-keywords">
                                                <input placeholder="Enter Keywords here ..." value="" name="key-word" type="text">
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 text-right">
                                            <button type="submit" onclick="{{'search_index/'}}"  class="cp-search-btn"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
        <div class="search-layout3 d-lg-none bg-accent">
            <div class="search-layout3-holder">
                <div class="container">
                    <form id="cp-search-form" class="bg-primary search-layout3-inner">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12 mb15--sm">
                                <div class="form-group search-input-area input-icon-location">
                              <select id="location" class="select2">
                               <option >Select location</option>
                                @foreach($loc as $locs)
                               <option class="first" value="0">{{$locs->name}}</option>
                               @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-6 col-12 mb15--sm">
                                <div class="form-group search-input-area input-icon-keywords">
                                    <input placeholder="Enter Keywords here ..." value="" name="key-word" type="text">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 text-right text-left-mb mb15--sm">
                                <a href="#" class="cp-search-btn"><i class="fa fa-search" aria-hidden="true"></i>Search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Search Area End Here -->
        <!-- Products Area Start Here -->
        <section class="bg-accent s-space-custom fixed-menu-mt">
            <div class="container">
                <div class="row">
                    <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 mb--sm">
                        <div class="section-title-left-dark title-bar mb-40">
                            <h2>Featured Product</h2>
                        </div>
                        <div class="row category-grid-layout3 zoom-gallery">
                             @foreach($addon as $orgs)
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="product-box item-mb zoom-gallery">
                                    <div class="item-mask-wrapper">
                                        <div class="item-mask bg-body"><img src="{{url('uploads/'.$orgs->image)}}" alt="categories" class="img-fluid">
                                            <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                            @foreach($orgs->caty as $model)
                                            <div class="title-ctg">{{$model->category_name}}
                                                                </div>
                                                                @endforeach
                                            <ul class="info-link">
                                                <li><a href="{{url('uploads/'.$orgs->image)}}" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                <li><a href="{{url('inner_page/'.$orgs->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <div class="title-ctg">Iphones</div>
                                        <h3 class="short-title"><a href="{{url('uploads/'.$orgs->image)}}">{{$orgs->ad_title}}</a></h3>
                                        
                                       
                                
                                        <div class="price">{{$orgs->price}}</div>
                                        <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            







                            
                            

                         
                            
                            
                        </div>
                    </div>
                    <div class="order-xl-1 order-lg-1 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="category-menu-layout1" id="category-menu-area">
                            <h3 class="sidebar-ctg-title">Categories</h3>
                            <ul class="sidebar-category-list">
                                <li>
                                    <a href="{{url('iphone/')}}"><img src="{{URL::to('/')}}/assets/img/product/ctg1.png" alt="category" class="img-fluid">iphones<span>(50)</span></a>
                                </li>
                                <li>
                                    <a href="{{url('mac/')}}"><img src="{{URL::to('/')}}/assets/img/product/mac.png" style="width:30px;height:30px;" alt="category" class="img-fluid"> mac<span>(20)</span></a>
                                </li>
                                <li>
                                    <a href="{{url('watches/')}}"><img src="{{URL::to('/')}}/assets/img/product/iwatch.png" style="width:20px;height:30px" alt="category" class="img-fluid">Watches<span>(50)</span></a>
                                </li>
                                <li>
                                    <a href="{{url('airpod/')}}"><img src="{{URL::to('/')}}/assets/img/product/airpods.png"style="width:30px;height:20px" alt="category" class="img-fluid">Airpods<span>(20)</span></a>
                                </li>
                                <li>
                                    <a href="{{url('tv/')}}"><img src="{{URL::to('/')}}/assets/img/product/tv.png" style="width:30px;height:20px" alt="category" class="img-fluid">Tv & home<span>(100)</span></a>
                                </li>
                                <li>
                                    <a href="{{url('accessories/')}}"><img src="{{URL::to('/')}}/assets/img/product/ctg6.png" alt="category" class="img-fluid">Accessories<span>(70)</span></a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products Area End Here -->
        <!-- Counter Area Start Here -->
        <section class="overlay-default s-space-equal overflow-hidden" style="background-image: url('img/banner/counter-back1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="d-md-flex justify-md-content-center counter-box text-center--md">
                            <div>
                                <img src="img/banner/counter1.png" alt="counter" class="img-fluid mb20-auto--md">
                            </div>
                            <div>
                                <div class="counter counter-title" data-num="100000">1,00,000</div>
                                <h3 class="title-regular-light">Our Products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="d-md-flex justify-md-content-center counter-box text-center--md">
                            <div>
                                <img src="img/banner/counter2.png" alt="counter" class="img-fluid mb20-auto--md">
                            </div>
                            <div>
                                <div class="counter counter-title" data-num="500000">5,00,000</div>
                                <h3 class="title-regular-light">Our Happy Buyers</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="d-md-flex justify-md-content-center counter-box text-center--md">
                            <div>
                                <img src="img/banner/counter3.png" alt="counter" class="img-fluid mb20-auto--md">
                            </div>
                            <div>
                                <div class="counter counter-title" data-num="200000">2,00,000</div>
                                <h3 class="title-regular-light">Verified Users</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Area End Here -->
        <!-- Pricing Plan Area Start Here -->
        <section class="bg-body s-space-default">
            <div class="container">
                <div class="section-title-dark">
                    <h2>Start Earning From Things You Don’t Need Anymore</h2>
                    <p>It’s very Simple to choose pricing &amp; Plan</p>
                </div>
                <div class="row d-md-flex">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="pricing-box bg-box">
                            <div class="plan-title">Free Post</div>
                            <div class="price">
                                <span class="currency">$</span>0
                                <span class="duration">/ Per mo</span>
                            </div>
                            <h3 class="title-bold-dark size-xl">Always FREE Ad Posting</h3>
                            <p>Post as many ads as you like for 30 days without limitations and 100% FREE SUBMIT AD</p>
                            <a href="#" class="cp-default-btn-lg">Submit Ad</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center col-lg-2 col-md-12 col-sm-12 col-12">
                        <div class="other-option bg-primary">or</div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="pricing-box bg-box">
                            <div class="plan-title">Premium Post</div>
                            <div class="price">
                                <span class="currency">$</span>19
                                <span class="duration">/ Per mo</span>
                            </div>
                            <h3 class="title-bold-dark size-xl">Featured Ad Posting</h3>
                            <p>Post as many ads as you like for 30 days without limitations and 100% FREE SUBMIT AD</p>
                            <a href="#" class="cp-default-btn-lg">Submit Ad</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Plan Area End Here -->
        <!-- Selling Process Area Start Here -->
        <section class="bg-accent s-space-regular">
            <div class="container">
                <div class="section-title-dark">
                    <h2>How To Start Selling Your Products</h2>
                    <p>It’s very simple to choose pricing &amp; level of exposure on pricing page</p>
                </div>
                <ul class="process-area">
                    <li>
                        <img src="img/banner/process1.png" alt="process" class="img-fluid">
                        <h3>Upload Your Products</h3>
                        <p> Bmply dummy text of the printing and typesing industrypsum been the induse.</p>
                    </li>
                    <li>
                        <img src="img/banner/process2.png" alt="process" class="img-fluid">
                        <h3>Set Your Price</h3>
                        <p> Bmply dummy text of the printing and typesing industrypsum been the induse.</p>
                    </li>
                    <li>
                        <img src="img/banner/process3.png" alt="process" class="img-fluid">
                        <h3>Start Your Business</h3>
                        <p> Bmply dummy text of the printing and typesing industrypsum been the induse.</p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Selling Process Area End Here -->
        <!-- Subscribe Area Start Here -->
        <section class="bg-body s-space full-width-border-top">
            <div class="container">
                <div class="section-title-dark">
                    <h2 class="size-sm">Receive The Best Offers</h2>
                    <p>Stay in touch with Classified Ads Wordpress Theme and we'll notify you about best ads</p>
                </div>
                <div class="input-group subscribe-area">
                    <input type="text" placeholder="Type your e-mail address" class="form-control">
                    <span class="input-group-addon">
                        <button type="submit" class="cp-default-btn-xl">Subscribe</button>                        
                    </span>
                </div>
            </div>
        </section>
        <!-- Subscribe Area End Here -->
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
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Remember Me</label>
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
                                <input type="text" id="first-name" class="form-control" placeholder="Type your mail here ...">
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
    <!-- Owl Cauosel JS -->
    <script src="{{URL::to('/')}}/assets/vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="{{URL::to('/')}}/assets/js/jquery.meanmenu.min.js"></script>
    <!-- Srollup js -->
    <script src="{{URL::to('/')}}/assets/js/jquery.scrollUp.min.js"></script>
    <!-- jquery.counterup js -->
    <script src="{{URL::to('/')}}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/waypoints.min.js"></script>
    <!-- Select2 Js -->
    <script src="{{URL::to('/')}}/assets/js/select2.min.js"></script>
    <!-- Isotope js -->
    <script src="{{URL::to('/')}}/assets/js/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{URL::to('/')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom Js -->
    <script src="{{URL::to('/')}}/assets/js/main.js"></script>
</body>


<!-- Mirrored from radiustheme.com/demo/html/classipost/classipost/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 04:35:12 GMT -->
</html>