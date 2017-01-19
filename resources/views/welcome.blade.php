<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
           <title>Laravel</title>
        <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="Nuwan Tharaka">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{URL::secureAsset('intern/stylesheets/bootstrap.css')}}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{URL::secureAsset('intern/stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{URL::secureAsset('intern/stylesheets/responsive.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{URL::secureAsset('intern/stylesheets/colors/color1.css')}}" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{URL::secureAsset('intern/stylesheets/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="{{URL::secureAsset('intern/icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{URL::secureAsset('intern/icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{URL::secureAsset('intern/icon/favicon.png')}}" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>                                                       
<body class="header-sticky page-loading header-v2">   
    <div class="loading-overlay">
    </div>
    
    <div class="boxed">
        <div class="site-header header-v3">
      <div class="flat-top">
                <div class="container">
                    <div class="row">
                        <div class="flat-wrapper">
                            <div class="custom-info">
                                 <form action='{{route('SignIn')}}' method="post" class="login-form">                       
									<span><i class="fa fa-user"></i><input type="text"  name = "index_no"  class="user-name" placeholder="Username"></span> 
									<span><i class="fa fa-key"></i><input type="password" name = "password"  class="password" placeholder="Password"></span> 
									<input type="hidden" name="_token" value = "{{ csrf_token() }}">
									<span> <input type="submit" class="login-submit" value="Login"></span>
                                 </form>
                            </div>

                            <div class="welcome-text">
								<span>Welcome to the Internship Selection Portal </span>
                            </div>
                        </div><!-- /.flat-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.flat-top --><!-- /.flat-top -->
          
            <header id="header" class="header"> 
                <div class="header-wrap">
                    <div id="logo" class="logo">
                        <a href="index.html">
                            <img src="{{URL::secureAsset('intern/images/logo.png')}}" alt="images">
                        </a>
                    </div><!-- /.logo -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
               
                    <div class="nav-wrap">                                
                        <nav id="mainnav" class="mainnav">
                            <div class="menu-extra">
                                <ul>
                                    <li id ="s" class="search-box">
                                        <a href="#search" class="flat-search"><i class="fa fa-search"></i></a>
                                        <div class="submenu top-search">
                                            <div class="widget widget_search">
                                                <form class="search-form">
                                                    <input type="search" class="search-field" placeholder="Search …">
                                                    <input type="submit" class="search-submit">
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shopping-cart">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="shopping-cart-items-count">2</span>
                                        </a>
                                        <div class="subcart">
                                            <div class="widget_shopping_cart_content">
                                                <ul class="cart_list product_list_widget">      
                                                    <li class="mini_cart_item">
                                                        <a href="#" class="remove" >x</a>
                                                        <a href="#"><img src="images/products/1.jpg" alt="images">Boskke Cube</a>
                                                        <p><span class="quantity">1 × <span class="amount">$39.00</span></span></p>
                                                    </li> 
                                                    <li class="mini_cart_item">
                                                        <a href="#" class="remove" >x</a>
                                                        <a href="#"><img src="images/products/2.jpg" alt="images">Cast Iron Casserole</a>
                                                        <p><span class="quantity">1 × <span class="amount">$230.00</span></span></p>
                                                    </li>    
                                                </ul>
                                                <p class="total">
                                                    <strong>Subtotal:</strong> <span class="amount">$269.00</span>
                                                </p>
                                                <div class="group-btn">
                                                    <a class="button" href="#">view cart</a>                                                
                                                    <a class="button bg-scheme3 style1" href="#">checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div><!-- /.menu-extra -->
                            <ul class="menu"> 
                                <li class="home">
                                    <a href="index.html">Home</a>
                                    <ul class="submenu"> 
                                        <li><a href="index.html">Home – Header Modern</a></li>
                                        <li><a href="home-header-classic.html">Home – Header Classic</a></li>                                        
                                        <li><a href="home-header-transparent.html">Home – Header Transparent</a></li>
                                        <li><a href="home-header-widget.html">Home – Header Widgetized</a></li>
                                        <li><a href="mega-menu.html">Home – Mega Menu</a></li>
                                        <li><a href="one-page.html">Home – One Page</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                    							<li><a href="about.html">Company</a>
                                    <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="company-history.html">Company History</a></li>
                                        <li><a href="our-people.html">Our People</a></li>
                                        <li><a href="partners.html">Partners</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
   <li><a href="{{route('RegisterCompany')}}">Company Register</a>
                                    
                                </li>
                                <li><a href="portfolio.html">Gallery</a>
                                    <ul class="submenu">
                                        <li><a href="portfolio-v1.html">Layout 01</a></li>
                                        <li><a href="portfolio-grid.html">Layout 02</a></li>
                                        <li><a href="portfolio-masonry.html">Layout 03</a></li>
                                    </ul><!-- /.submenu -->
                                </li>                                              
                                <li><a href="blog.html">News</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Default layout</a></li>
                                        <li><a href="blog-grid.html">Grid layout</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="one-page.html">One page</a></li>
                                        <li><a href="track-an-order.html">Track your shipment</a></li>
                                        <li><a href="quote.html">Request a quote</a></li>
                                        <li><a href="shortcode.html">Shortcode</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="404.html">404 page</a></li>
                                        <li><a href="search.html">Search results</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul><!-- /.menu -->                                        
                        </nav><!-- /.mainnav -->  
                    </div><!-- /.nav-wrap -->
                </div><!-- /.header-wrap --> 
            </header><!-- /.header -->
        </div><!-- /.site-header -->
        
          <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{URL::secureAsset('intern/images/slides/1.jpg')}}" alt="slider-image" />
                        <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                            Leading Companies<br>of Sri Lanka
                        </div>  
                        <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                            Apply now...
                        </div>
                    </li>

                    <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{URL::secureAsset('intern/images/slides/2.jpg')}}" alt="slider-image" />
                        <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                            International Internships
                        </div>  
                        <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                            Interested in research..?
                        </div>
                    </li>

                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{URL::secureAsset('intern/images/slides/3.jpg')}}" alt="slider-image"/>
                        <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                           For life changing <br>experience
                        </div>  
                        <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                            New things to discover..
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Page title -->
        <div class="page-title parallax-style parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2>Update Account Details</h2>
                        </div><!-- /.page-title-heading -->                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->



        <div class="blog-single">
            <div class="container">
                <div class="row">
                    <div class="content-wrap">
                        <div class="main-content">
                            <div class="main-content-wrap"> 
                                <div class="comments-area">
                                    <div class="comment-respond">
                                        <h4 class="comment-reply-title">Personel Details</h4>
 <form action='{{route('RegisterStudent')}}' method="post">
<fieldset >
<legend>Register</legend>
<label for='Index_no' >Index_no*: </label>
<input type='text' name='Index_no' id='Index_no' maxlength="50" />
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50" />

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
<input type="hidden" name="_token" value = "{{ csrf_token() }}">
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form><!-- /.comment-form -->
                                    </div><!-- /.comment-respond -->
                                </div><!-- /.comments-area -->
                            </div><!-- /.main-content-wrap -->
                        </div><!-- /.main-content -->

                       
                    </div><!-- /.content-wrap  -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.blog -->
       
        <!-- Footer -->
            <footer class="footer">
           <div class="content-bottom-widgets">        
                <div class="container">
                    <div class="row"> 
                        <div class="flat-wrapper">
                            <div class="ft-wrapper clearfix">
                                <div class="footer-50">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="counter">
                                                <div class="counter-image"><i class="fa fa-building-o"></i></div>
                                                <div class="numb-count" data-to="150" data-speed="3000" data-waypoint-active="yes">150</div>
                                                <div class="counter-title">
                                                    Companies
                                                </div>
                                            </div>
                                        </div><!-- /.col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="counter ft-style1">
                                                <div class="counter-image"><i class="fa fa-group"></i></div>
                                                <div class="numb-count" data-to="118" data-speed="3000" data-waypoint-active="yes">118</div>
                                                <div class="counter-title">
                                                    Applicants
                                                </div>
                                            </div>
                                        </div><!-- /.col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="counter ft-style2">
                                                <div class="counter-image"><i class="fa fa-calendar-o"></i></div>
                                                <div class="numb-count" data-to="10" data-speed="3000" data-waypoint-active="yes">10</div>
                                                <div class="counter-title">
                                                    More days to go..!
                                                </div>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                </div><!-- /.footer-50 -->
                            </div><!-- /.ft-wrapper -->
                        </div><!-- /.flat-wrapper -->
                    </div> 
                </div><!-- /.container -->
            </div><!-- /.footer-widgets -->

       

            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                                  <div class="copyright">
                                    <div class="copyright-content">
                                        Copyright © 2017 ENTC_MSD 
                                    </div>
								</div>
						</div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-content -->
        </footer>

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>   

    </div>
    
    <!-- Javascript -->
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery.easing.js')}}"></script> 
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery-waypoints.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery-countTo.js')}}"></script> 
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>    
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery-validate.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/parallax.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/main.js')}}"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/slider.js')}}"></script>


</body>
</html>
