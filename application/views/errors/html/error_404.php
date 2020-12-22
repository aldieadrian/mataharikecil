<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>

<!doctype html>
<html>
 	<head>
		<title>Blocked by QID</title>
		<meta charset="utf-8" >
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="robots" content="index, follow" > 
		<meta name="keywords" content="HTML5 Template" > 
		<meta name="description" content="Quarter Software Developer" > 
		<meta name="author" content="Aldie Adrian">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="theme-color" content="#2a2b2f">
    
		<!-- FAVICONS -->
		<link rel="shortcut icon" href="<?= base_url().'page_template/'?>images/favicon/favicon.png">
		<link rel="apple-touch-icon" href="<?= base_url().'page_template/'?>images/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url().'page_template/'?>images/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url().'page_template/'?>images/favicon/apple-touch-icon-114x114.png">
		<link rel="icon" sizes="192x192" href="<?= base_url().'page_template/'?>images/favicon/icon-192x192.png">

		<!-- CSS -->
		<!--  GOOGLE FONT -->		
		<link href="https://fonts.googleapis.com/css?family=Poppins:500,600,300%7COpen+Sans:400,300,700" rel="stylesheet" type="text/css">

		<!--  BOOTSTRAP -->
		<link rel="stylesheet" href="<?= base_url().'page_template/'?>css/bootstrap.min.css"> 

		<!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->		
		<link rel="stylesheet" href="<?= base_url().'page_template/'?>css/icons-fonts.css" >	

		<!--  CSS THEME -->		
		<link rel="stylesheet" href="<?= base_url().'page_template/'?>css/style.css" >

		<!-- ANIMATE -->	
		<link rel="stylesheet" href="<?= base_url().'page_template/'?>css/animate.min.css">
		
	</head>
	
	<body>
		<!-- LOADER -->	
		<div id="loader-overflow">
			<div id="loader3" class="loader-cont">Please enable JS</div>
		</div>	

		
			<div class="grey-bg"> <!-- Grey BG  -->	
				
				<!-- HEADER 1 FONT BLACK TRANSPARENT -->
				<header id="nav" class="header header-1 ">
				 
					<div class="container-m-30 clearfix">
					  <div class="logo-row">
					  
						<!-- LOGO --> 
				<div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="<?= base_url().'blocked'?>" class="clearfix">
                                        <img src="<?= base_url().'page_template/'?>images/logo/logo-black.png" class="logo-img" alt="Logo">
                                    </a>
                                </div>
                            </div>

						<!-- BUTTON --> 
					 </div>
					</div>
				  
				</header>
        
        <!-- COTENT CONTAINER -->
        <div class="container p-160-cont">

          <div class="text-center" >
          	<img src="<?= base_url().'page_template/'?>images/logo/quarterlogo2.png" alt="img">
            <!--<h1 class="error404-numb2">Quarter</h1>-->
            <h3 class="error404-text2">This website has been bloked by Quarter IT Developer,
            	<br>because the foundation didn't complete the terms and conditions.</h3>
            
            <!--<a class="button medium rounded gray" href="<?= base_url().'page_template/'?>about-us.html">BACK TO HOMEPAGE</a>
        	</div>-->
       
        </div>
         
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<!-- JS begin -->

		<!-- jQuery  -->
		<script  src="<?= base_url().'page_template/'?>js/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url().'page_template/'?>js/bootstrap.min.js"></script>	

		<!-- MAGNIFIC POPUP -->
		<script src="<?= base_url().'page_template/'?>js/jquery.magnific-popup.min.js"></script>    
    
    <!-- PORTFOLIO SCRIPTS -->
    <script  src="<?= base_url().'page_template/'?>js/imagesloaded.pkgd.min.js"></script>
    
    <!-- APPEAR -->    
    <script  src="<?= base_url().'page_template/'?>js/jquery.appear.js"></script>
    
    <!-- MAIN SCRIPT -->
		<script src="<?= base_url().'page_template/'?>js/main.js"></script>
    
    <!-- JQUERY TWEETS -->
		<script src="<?= base_url().'page_template/'?>js/twitter/jquery.tweet.js"></script> 
    
    <!-- TWITTER FEED reINITIALIZE -->    
    <script>
        function initTwitterFeeds(){
      $("#twitter-feeds").tweet({
        // join_text: false,
        username: "abcgomel", // Change username here
        modpath: './js/twitter/', // Twitter files path
        avatar_size: false, // you can active avatar
        count: 1, // number of tweets
        loading_text: "loading tweets..."
      });
    };
    </script>

<!-- JS end -->	
	
	</body>
</html>		