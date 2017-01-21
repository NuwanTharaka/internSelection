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
                            <img src="{URL::secureAsset('intern/images/logo.png')}}" alt="images">
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

                        <div class="flat-divider d20px"></div><p>

						Getting work experience while you study will help you to gain the skills employers are looking for. Internships and placements are two types of work experience but lots of other options are available. It is also possible to find your own by contacting employers speculatively.</p><p>

Many employers use internships and placements as a fast track onto their graduate programmes.
						</p>
                         <div class="clients-image clearfix">
                            <div class="item-three-column">
                                <div class="item-img">
                                    <img src="{{URL::secureAsset('intern/images/member/at&t.jpg')}}" id="img1" alt="images">
                                </div>
                                <p class="tooltip" id="imgc1">AT & T</p>
                            </div>
                            <div class="item-three-column">
                                <div class="item-img">
                                    <img src="{{URL::secureAsset('intern/images/member/mobitel.png')}}" id="img2" alt="images">
                                </div>
                                <p class="tooltip" id="imgc2">Mobitel Sri Lanka</p>
                            </div>
                            <div class="item-three-column">
                                <div class="item-img">
                                    <img src="{{URL::secureAsset('intern/images/member/dialog.jpg')}}" id="img3"  alt="images">
                                </div>
                                <p class="tooltip" id="imgc3">Dialog Axiata</p>
                            </div>
                        
                        </div><!-- /.flat-clients-image -->

                        <div class="promobox style1 clearfix">
                            <h5 class="promobox-title pad-left35px">Contact administrator for clarifications..</h5>
                                <a class="button black sm" href="contact.html">contact&nbsp;<i class="fa fa-chevron-right"></i></a>
                        </div><!-- /.promobox -->

                    </div><!-- /.general -->
                     <div class="flat-iconbox col-sm-4">
                            <div class="box-header">
                                <div class="box-icon"><img src="{{URL::secureAsset('intern/images/member/avatar.png')}}" alt="images" class="img-rounded"></div>
                            </div>
						<div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">Name:</h6></div><div class="col-sm-7 col-xs-6 "><h6 class="flat-title-section"><span>{{$student->username}}</span></h6></div>
										 <div class="clearfix"></div>
									<div class="bot-border"></div>

						<div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">E-mail:</h6></div><div class="col-sm-7"> <h6 class="flat-title-section"><span>{{$student->email}}</span></h6></div>
									  <div class="clearfix"></div>
									<div class="bot-border"></div>

						<div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">Current GPA:</h6></div><div class="col-sm-7"> <h6 class="flat-title-section"><span>{{$student->GPA}}</span></h6></div>
									  <div class="clearfix"></div>
									<div class="bot-border"></div>
									
						<form class="update_info" action='{{route('UpdateInfo')}}' method="post"  enctype='multipart/form-data'>
						 <div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">GPA:</h6></div><div class="col-sm-7"><h6 class="flat-title-section"><span><input type="text" name="updateGPA" style="font-size: 10px; text-align: justify" required="required">{{$student->GPA}}</span></h6></div>
						<input type="hidden" name="_token" value = "{{Session::token()}}">
						 <div class="col-sm-5 col-xs-6 tital " ><h6 class="flat-title-section">Description:</h6></div><div class="col-sm-7"><h6 class="flat-title-section"><span><input type="text" name="updatedes" style="font-size: 10px; text-align: justify" required="required">{{$student->description}}</span></h6></div>
						 <input type="file" name="filePDF">
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
  /* $(document ).ready(function() {
	   var tempArray = <?php echo json_encode($companyurl); ?>;
	   var tempArray1 = <?php echo json_encode($companyname); ?>;
	   var tempurl = "{{URL::secureAsset('images/replace')}}";
	   if (tempArray[0]!=null){
	   var temp1 = tempurl.replace("replace", tempArray[0]);
	    $('#img1').attr('src',temp1);   
		document.getElementById('imgc1').innerHTML = tempArray1[0];
	   }
	  if (tempArray[1]!=null){
	   var temp2 = tempurl.replace("replace", tempArray[1]);
	     $('#img2').attr('src',temp2); 
		document.getElementById('imgc2').innerHTML = tempArray1[1];
	  }
	  if (tempArray[2]!=null){
	   var temp3 = tempurl.replace("replace", tempArray[2]);
    	 $('#img3').attr('src',temp3);
		document.getElementById('imgc3').innerHTML = tempArray1[2];
	  }
	    
	   
	
	
	   
	  
	});*/
	</script>

</body>
</html>