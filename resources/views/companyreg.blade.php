
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <title>companyreg</title>
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
  								<form action='{{route('SignIn')}}' method="post">                   
									<span><i class="fa fa-user"></i> <input id="user"  name = "index_no" type="text" class="user-name" required="" autocomplete="off"></span> 
									<span><i class="fa fa-key"></i> <input id="pass" name = "password" type="password" class="password" required="" autocomplete="off"></span> 
									 <input type="hidden" name="_token" value = "{{Session::token()}}">
									<span> <input type="submit" class="login-submit" value="Login"></span>
                                 </form>
                            </div>

                            <div class="welcome-text">
								<span>Welcome to the Internship Login Portal </span>
                            </div>
                        </div><!-- /.flat-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.flat-top --><!-- /.flat-top -->
          
            <header id="header" class="header"> 
                <div class="header-wrap">
                    <div id="logo" class="logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="images">
                        </a>
                    </div><!-- /.logo -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
               
                    <div class="nav-wrap">                                
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu"> 
                                <li class="home">
                                    <a href="index.html">Home</a> 
                                </li>
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
                                        <h4 class="comment-reply-title">Company Registration</h4>

<form action='{{route('RegisterCoordinator')}}' method="post" id="regForm">
<fieldset >
<label for='Index_no' >NIC NO*: </label>
<input type='text' name='Index_no' id='Index_no' maxlength="50" required />
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50"required/>
<label for='Company_Name' >Company_Name*:</label>
<input type='text' name='Company_Name' id='Company_Name' maxlength="50" required/>
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" required/>
<input type="hidden" name="_token" value = "{{ csrf_token() }}" >
<br>
<label for='username' >Company profile Pic*:</label>
<input type="file" name="image" required/>
<label for='password' style="margin-top:5px;">Password*:</label>
<br>
<input type='password' name='password' id='password' maxlength="50" style=" width: 1500px;" required/>
<br>
<label for='password2' style="margin-top:5px;">Password Retype*:</label>
<br>
<input type='password' name='password2' id='password2' maxlength="50"  style="width:1500px;"required/>
<br>
<input type='submit' name='Submit' value='Submit' style="margin-top:20px;" id="submit" />

</fieldset>
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
                                                <div class="numb-count" data-to="23" data-speed="3000" data-waypoint-active="yes">23</div>
                                                <div class="counter-title">
                                                    Offices worldwide
                                                </div>
                                            </div>
                                        </div><!-- /.col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="counter ft-style1">
                                                <div class="counter-image"><i class="fa fa-group"></i></div>
                                                <div class="numb-count" data-to="14" data-speed="3000" data-waypoint-active="yes">14</div>
                                                <div class="counter-title">
                                                    Hardworking people
                                                </div>
                                            </div>
                                        </div><!-- /.col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="counter ft-style2">
                                                <div class="counter-image"><i class="fa fa-globe"></i></div>
                                                <div class="numb-count" data-to="15" data-speed="3000" data-waypoint-active="yes">15</div>
                                                <div class="counter-title">
                                                    Countries covered
                                                </div>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                </div><!-- /.footer-50 -->

                                <div class="footer-50">
                                    <div class="subscribe-form">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                            </div><!-- /.col-md-8 -->

                                            <div class="col-md-4">
                                                <input type="submit" value="Subscribe">
                                            </div><!-- /.col-md-4 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.subscribe-form -->
                                </div><!-- /.footer-50 -->
                            </div><!-- /.ft-wrapper -->
                        </div><!-- /.flat-wrapper -->
                    </div><!-- /.row -->    
                </div><!-- /.container -->
            </div><!-- /.footer-widgets -->

            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widge widget_text">
                                <div class="textwidget">
                                    <h2>canava - business, transport, logistic &amp; warehouse.</h2>
                                </div>
                            </div><!-- /.widget_text -->
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget widget_recent_entries">
                                <h4 class="widget-title">Recent News</h4>
                                <ul>
                                    <li>
                                        <a href="blog-single.html">Raising productivity &amp; morale in the warehouse</a>
                                        <span class="post-date">March 25, 2016</span>
                                    </li>
                                    <li>
                                        <a href="blog-single.html">Seafield logistics goes into administration</a>
                                        <span class="post-date">March 25, 2016</span>
                                    </li>
                                </ul>
                            </div><!-- /.widget_recent_entries -->
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title">Information</h3>
                                <div class="menu-footer-menu-container">
                                    <ul class="menu-footer-menu">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Partners</a></li>
                                        <li><a href="#">History</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3">
                            <div class="widget widget_text information">
                                <h3 class="widget-title">Contact Us</h3>
                                <div class="textwidget">
                                    <p><strong>66 Nicholson Street Buffalo New York US 14214</strong></p>
                                    <p>
                                        <i class="fa fa-phone"></i>  001-123-456-7890<br>
                                        <i class="fa fa-envelope"></i>themesflat@gmail.com
                                    </p>
                                    <p>
                                        <i class="fa fa-phone"></i>  007-123-456-7890<br>
                                        <i class="fa fa-envelope"></i>themesflat@gmail.com
                                    </p>
                                </div>          
                            </div>
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-content -->

            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="flat-wrapper">
                            <div class="ft-wrap clearfix">
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <div class="copyright">
                                    <div class="copyright-content">
                                        Copyright © 2016 Canava. Theme by <a href="#">Themesflat.</a>   
                                    </div>
                                </div>
                            </div><!-- /.ft-wrap -->
                        </div><!-- /.flat-wrapper -->
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
    <script type="text/javascript" src="{{URL::secureAsset('intern/javascript/main.js')}}"></script>
<script>
jQuery('#regForm').validate({
            rules : {
                password : {
                    minlength : 5
                },
                password2 : {
                    minlength : 5,
                    equalTo : "#password"
                }
            }
});

$('#submit').click(function(){
    console.log($('#regForm').valid());
});
</script>
</body>
</html>
