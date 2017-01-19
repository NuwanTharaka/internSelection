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
    
    <!-- Boxed -->
    <div class="boxed">
        <div class="site-header header-v2">
	  		 <div class="flat-top">
					<div class="container">
						<div class="row">
							<div class="flat-wrapper">
								<div class="custom-info">
									 <form class="login-form">                       
										<span><i class="fa fa-user"></i><input type="text" class="user-name" placeholder="Username"></span> 
										<span> <input type="submit" class="login-submit" value="Log Out"></span>
									 </form>
								</div>

								<div class="welcome-text">
									<span>Welcome to the Intern Portal </span>
								</div>
							</div><!-- /.flat-wrapper -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.flat-top -->
          
            <header id="header" class="header"> 
                <div class="header-wrap">
                    <div id="logo" class="logo">
                        <a href="index.html">
                            <img src="{URL::secureAsset('intern/images/logo.png')}}" alt="images">
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
                                <li><a href="services.html">Services</a>
                                    <ul class="submenu"> 
                                        <li><a href="services-detail.html">Packaged goods transport</a></li>
                                        <li><a href="services-detail-v2.html">Multimodal transport</a></li>
                                        <li><a href="services-detail-v3.html">Sea and air freight</a></li>
                                        <li><a href="services-detail-v4.html">Logistics solutions</a></li>
                                        <li><a href="services-detail-v5.html">Warehousing and storage</a></li>
                                        <li><a href="services-detail-v6.html">Forwarding services</a></li>
                                    </ul><!-- /.submenu -->
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

        <!-- Page title -->
        <div class="page-title parallax-style parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2>{{$student->username}}</h2>
                        </div><!-- /.page-title-heading -->                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->

        <div class="flat-row flat-general sidebar-right">
            <div class="container">
                <div class="row">
                    <div class="content-wrap col-sm-8">
                        <h3 class="flat-title-section style style1"><span>Available companies</span></h3>

                        <div class="flat-divider d20px"></div>

                        <p>We are your full support partner and very happy to take care of all your logistic needs. We can do more than simply take your cargo from origin to destination. We can pick it up, sort it, package it and take care of all additional processes. We can also manage all your transportation needs.</p>

                        <p>You can also decide to outsource your fleet with or without your employees. By doing this you will achieve a higher efficiency and a better focus on your core business. You will have the assurance your logistic processes are in the best of hands.</p>

                         <div class="clients-image clearfix">
                            <div class="item-three-column">
                                <div class="item-img">
                                    <img src="" id="img1" alt="images">
                                </div>
                                <p class="tooltip" id="imgc1">Logistics</p>
                            </div>
                            <div class="item-three-column">
                                <div class="item-img">
                                    <img src="images/client/2.png" id="img2" alt="images">
                                </div>
                                <p class="tooltip" id="imgc2">Royal Resort</p>
                            </div>
                            <div class="item-three-column">
                                <div class="item-img">
                                    <img src="images/client/3.png" id="img3"  alt="images">
                                </div>
                                <p class="tooltip" id="imgc3">Hexagon</p>
                            </div>
                        
                        </div><!-- /.flat-clients-image -->

                        <div class="promobox style1 clearfix">
                            <h5 class="promobox-title pad-left35px">Contact administrator for clarifications..</h5>
                                <a class="button black sm" href="contact.html">contact&nbsp;<i class="fa fa-chevron-right"></i></a>
                        </div><!-- /.promobox -->

                    </div><!-- /.general -->
                     <div class="flat-iconbox col-sm-4">
                            <div class="box-header">
                                <div class="box-icon"><img src="{{URL::secureAsset('intern/images/services/1.jpg" alt="images" class="img-rounded')}}"></div>
                            </div>
						<div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">Name:</h6></div><div class="col-sm-7 col-xs-6 "><h6 class="flat-title-section"><span>{{$student->username}}</span></h6></div>
										 <div class="clearfix"></div>
									<div class="bot-border"></div>

						<div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">E-mail:</h6></div><div class="col-sm-7"> <h6 class="flat-title-section"><span>{{$student->email}}</span></h6></div>
									  <div class="clearfix"></div>
									<div class="bot-border"></div>

						<div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">Current GPA:</h6></div><div class="col-sm-7"> <h6 class="flat-title-section"><span>{{$student->email}}</span></h6></div>
									  <div class="clearfix"></div>
									<div class="bot-border"></div>
									
						<form class="update_info">
						 <div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">GPA:</h6></div><div class="col-sm-7"><h6 class="flat-title-section"><span><input type="text" style="font-size: 10px; text-align: justify">{{$student->GPA}}</span></h6></div>

						 <div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">Description:</h6></div><div class="col-sm-7"><h6 class="flat-title-section"><span><input type="text" style="font-size: 10px; text-align: justify">{{$student->description}}</span></h6></div>
						 <input type="file" name="cv">
						 <input name="submit" type="submit" id="submit" class="submit" value="submit">
						 </form>
						
									
        				</div><!-- /.flat-iconbox -->
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
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery-waypoints.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery-countTo.js')}}"></script> 
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/parallax.js')}}"></script>
    <script type="text/javascript" src="{{URL::secureAsset('intern/	javascript/main.js')}}"></script>
    <script>
   $(document ).ready(function() {
	   var tempArray = <?php echo json_encode($companyurl); ?>;
	   var tempurl = "{{URL::secureAsset('images/replace')}}";
	   var temp1 = tempurl.replace("replace", tempArray[0]);
	   var temp2 = tempurl.replace("replace", tempArray[1]);
		
     $('#img1').attr('src',temp1);   

	  $('#img2').attr('src',temp2);   

	  $('#img3').attr('src',"");   
	   var tempArray1 = <?php echo json_encode($companyname); ?>;
	   document.getElementById('imgc1').innerHTML = tempArray1[0];
	   document.getElementById('imgc2').innerHTML = tempArray1[1];
	   document.getElementById('imgc3').innerHTML = tempArray1[2];
	  
	});
	</script>

</body>
</html>