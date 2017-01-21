<?php
$companies=$data;
$sEmail=$email;
$sgpa=$gpa;
$sdescription=$description;

?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
           <title>Intern Selection Poratal</title>
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
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                          <span><i class="fa fa-user"></i>{{ Auth::user()->id }}<span>&nbsp</span>{{ Auth::user()->type }}</span> 
                                        {{ csrf_field() }}<input type="submit" value="Log Out" style="margin-left: 5px">
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
                            <h2>Student List</h2>
                        </div><!-- /.page-title-heading -->                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->   
<div class="clear">
<div> Student details </div>
    {{$email}}<br>
   {{$gpa}}<br>
    {{$description}}<br>
</div>

<form action='{{route('checked')}}' method="post">

<?php foreach($companies as $current): ?>
    <?php $myarray = array();
    ?>
	<div class="col-md-4">
    	<ul class="list-group">  
        <input type="checkbox" name="check_list[]" value=<?php echo $current->company_name; ?>> <?php echo $current->company_name; ?><br>
		 
    	</ul>
    </div>
<?php endforeach; ?>
<input type="hidden" name="_token" value = "{{Session::token()}}">
    <input type="hidden" name="student_id" value = "{{$student_id}}">

 <input type="submit" value="Click">
</form>
      
       
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
   
</body>
</html>





