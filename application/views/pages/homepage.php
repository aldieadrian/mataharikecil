<!DOCTYPE html>
<html>
<head>
	<title>Mataharikecil</title>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="robots" content="index, follow" > 
	<meta name="keywords" content="Mataharikecil" > 
	<meta name="description" content="Mataharikecil Indonesia Foundation" > 
	<meta name="author" content="Aldie Adrian">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#FFB547">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="<?= base_url().'assets/'?>images/favicon/favicon.png">
    <link rel="apple-touch-icon" href="<?= base_url().'assets/'?>images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url().'assets/'?>images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url().'assets/'?>images/favicon/apple-touch-icon-114x114.png">
    <link rel="icon" sizes="192x192" href="<?= base_url().'assets/'?>images/favicon/icon-192x192.png">
	
    <!-- CSS -->
    <!--  GOOGLE FONT -->		
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,300%7COpen+Sans:400,300,700" rel="stylesheet" type="text/css">

    <!-- REVOSLIDER CSS SETTINGS -->

    <!-- REVOLUTION STYLE SHEETS -->
    <link href="<?= base_url().'assets/'?>revo-slider/css/settings.css" rel="stylesheet" type="text/css">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/'?>revo-slider/css/navigation-skins/hermes-custom.css">

    <!--  BOOTSTRAP -->
	<link rel="stylesheet" href="<?= base_url().'assets/'?>css/bootstrap.min.css"> 

    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->		
	<link rel="stylesheet" href="<?= base_url().'assets/'?>css/icons-fonts.css" >	

    <!--  CSS THEME -->		
	<link rel="stylesheet" href="<?= base_url().'assets/'?>css/style.css" >

    <!-- ANIMATE -->	
	<link rel="stylesheet" href="<?= base_url().'assets/'?>css/animate.min.css">
	
</head>

<body>

	<!-- LOADER -->	
    <div id="loader-overflow">
        <div class="loader-cont"><img src="<?= base_url().'assets/'?>images/preloaders/matcil.gif" alt="loader"></div>
    </div>	

	<div id="wrap" class="boxed ">
		<div class="grey-bg">
            <div class="header-black-bg"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->
            <header id="nav" class="header header-1 header-black affix-on-mobile">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">

                            <!-- LOGO --> 
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="<?= base_url().'home'?>" class="clearfix">
                                        <img src="<?= base_url().'assets/'?>images/logo/logo-white.png" class="logo-img" alt="Logo">
                                    </a>
                                </div>
                            </div>

                            <!-- BUTTON --> 
                            <div class="menu-btn-respons-container">
                                <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                                    <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- MAIN MENU CONTAINER -->
                    <div class="main-menu-container">
                        <div class="container-m-30 clearfix">	
                            
                            <!-- MAIN MENU -->
                            <div id="main-menu">
                                <div class="navbar navbar-default" role="navigation">
                                    
                                    <!-- MAIN MENU LIST -->
                                    <nav class="collapse collapsing navbar-collapse right-1024">
                                        <ul class="nav navbar-nav">
                                            
                                            <!-- MENU ITEM -->
                                            <li class="parent current">
                                                <a href="<?= base_url().'home'?>"><div class="main-menu-title">Home</div></a>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li class="parent">
                                                <a href="#" class="open-sub"><div class="main-menu-title">About</div></a>
                                                <ul class="sub">
                                                    <li><a href="<?= base_url().'home/about_bandung'?>">Mataharikecil Bandung</a></li>
                                                    <li><a href="<?= base_url().'home/about_jakarta'?>">Mataharikecil Jakarta</a></li>
                                                    <li><a href="<?= base_url().'home/about_foundation'?>">Mataharikecil Indonesia Foundation</a></li>
                                                </ul>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li class="parent">
                                                <a href="#" class="open-sub"><div class="main-menu-title">Programs</div></a>
                                                <ul class="sub">
                                                    <li><a href="<?= base_url().'home/programs_vtp'?>">Voluntary Teaching Program</a></li>
                                                    <li><a href="<?= base_url().'home/programs_mc'?>">Mataharikecil Community</a></li>
                                                    <li><a href="<?= base_url().'home/programs_iys'?>">Indonesia Youth Sociopreneur</a></li>
                                                </ul>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li class="parent">
                                                <a href="<?= base_url().'home/events'?>"><div class="main-menu-title">Events</div></a>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li class="parent">
                                                <a href="#" class="open-sub"><div class="main-menu-title">Voluntary</div></a>
                                                <ul class="sub">
                                                    <li><a href="<?= base_url().'home/vtp_bandung'?>">Bandung</a></li>
                                                    <li><a href="<?= base_url().'home/vtp_jakarta'?>">Jakarta</a></li>
                                                </ul>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li class="parent">
                                                <a href="<?= base_url().'home/contact'?>"><div class="main-menu-title">Contact</div></a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
							<!-- END main-menu -->
                        </div>
                        <!-- END container-m-30 -->
                    </div>
                    <!-- END main-menu-container -->
                </div>
                <!-- END header-wrapper -->
            </header>

            <!-- SLIDER Revo 2 -->
            <div id="index-link" class="relative" style="overflow:hidden;">
                <div class="rev_slider_wrapper fullscreen-container" id="rev_slider_280_1_wrapper" style="background-color:#fff;padding:0px;">

                    <!-- START REVOLUTION SLIDER fullscreen mode -->
                    <div id="rev_slider_202_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.1RC">
                        <ul>

                            <!-- SLIDE  -->
                            <li data-index="rs-672" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?= base_url().'assets/'?>images/matcil_slider/1-180x110.jpg" data-rotate="0" data-saveperformance="off" data-title="HELLO" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url().'assets/'?>images/matcil_slider/1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption font-gotham font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-1" style="z-index: 8; white-space: nowrap;"
                                data-fontsize="['90','70','62','52']" 
                                data-fontweight="600" 
                                data-height="none" 
                                data-lineheight="['102','82','74','64']" 
                                data-responsive_offset="on" 
                                data-splitin="none" 
                                data-splitout="none"
                                
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1050,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                
                                data-whitespace="nowrap" 
                                data-width="none" 
                                data-x="['left','left','left','left']" 
                                data-hoffset="['40','40','40','20']" 
                                data-y="['center','center','center','center']" 
                                data-voffset="['-30','-30','-30','-30']">

                                    Hello, we are<br>Mataharikecil
                                </div> 

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption font-gotham font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-2" style="z-index: 8; white-space: nowrap;"
                                data-fontsize="['24','24','24','20']" 
                                data-fontweight="300" 
                                data-height="none" 
                                data-lineheight="['40','40','40','40']" 
                                data-responsive_offset="on" 
                                data-splitin="none" 
                                data-splitout="none"
                                
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1450,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                
                                data-whitespace="nowrap" 
                                data-width="none" 
                                data-x="['left','left','left','left']" 
                                data-hoffset="['40','40','40','20']" 
                                data-y="['center','center','center','center']" 
                                data-voffset="['90','80','70',50']">

                                    spreading goodness
                                </div>
                            </li>

                            <!-- SLIDE  -->
                            <li data-index="rs-673" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?= base_url().'assets/'?>images/matcil_slider/2-180x110.jpg" data-rotate="0" data-saveperformance="off" data-title="MATAHARIKECIL" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url().'assets/'?>images/matcil_slider/2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                                <!-- LAYERS -->
                                <!-- BACKGROUND VIDEO LAYER -->
                                <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="<?= base_url().'assets/'?>video/slider2.mp4" data-videopreload="preload" data-videoloop="loop" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"></div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption   tp-resizeme rs-parallaxlevel-9" id="slide-696-layer-1" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" 
                                data-voffset="['0','0','0','0']" 
                                data-width="none" 
                                data-height="none" 
                                data-whitespace="nowrap" 
                                
                                data-type="image" 
                                data-responsive_offset="on" 

                                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1850,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"rZ:0deg;sX:0.7;sY:0.7;opacity:0;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Back.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7;">

                                    <div class="rs-looped rs-pulse" data-easing="Power1.easeInOut" data-speed="3" data-zoomstart="0.98" data-zoomend="1"><img src="<?= base_url().'assets/'?>images/revo-slider/dummy.png" alt="creative studio" width="1400" height="1200" data-ww="['700px','700px','700px','350']" data-hh="['600px','600px','600px','300']" data-lazyload="<?= base_url().'assets/'?>images/matcil_slider/2-logo.png" data-no-retina>
                                    </div>
                                </div>
                            </li>

                            <!-- SLIDE  -->
                            <li data-index="rs-674" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?= base_url().'assets/'?>images/matcil_slider/3-180x110.jpg" data-rotate="0" data-saveperformance="off" data-title="EDUCATION" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url().'assets/'?>images/matcil_slider/3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-899-layer-1" style="z-index: 8; white-space: nowrap;"
                                data-fontsize="['98','78','70','60']" 
                                data-fontweight="600" 
                                data-height="none" 
                                data-lineheight="['112','92','84','72']" 
                                data-responsive_offset="on" 
                                data-splitin="none" 
                                data-splitout="none"
                                
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1050,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                
                                data-whitespace="nowrap" 
                                data-width="none" 
                                data-x="['left','left','left','left']" 
                                data-hoffset="['40','40','40','20']" 
                                data-y="['center','center','center','center']" 
                                data-voffset="['-100','-90','-80','-70']">
                                
                                    Social
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-899-layer-2" style="z-index: 8; white-space: nowrap;"
                                data-fontsize="['98','78','70','60']" 
                                data-fontweight="600" 
                                data-height="none" 
                                data-lineheight="['112','92','84','72']" 
                                data-responsive_offset="on" 
                                data-splitin="none" 
                                data-splitout="none"
                                
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1350,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                
                                data-whitespace="nowrap" 
                                data-width="none" 
                                data-x="['left','left','left','left']" 
                                data-hoffset="['40','40','40','20']" 
                                data-y="['center','center','center','center']" 
                                data-voffset="['0','0','0','0']">
                                    
                                    foundation
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-899-layer-3" style="z-index: 8; white-space: nowrap;"
                                data-fontsize="['98','78','70','60']" 
                                data-fontweight="600" 
                                data-height="none" 
                                data-lineheight="['112','92','84','72']" 
                                data-responsive_offset="on" 
                                data-splitin="none" 
                                data-splitout="none" 
                                
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                
                                data-whitespace="nowrap" 
                                data-width="none" 
                                data-x="['left','left','left','left']" 
                                data-hoffset="['40','40','40','20']" 
                                data-y="['center','center','center','center']" 
                                data-voffset="['100','90','80','70']">
                                    Education<span class="orange-dot">.</span>
                                </div>
                            </li>
                        </ul>

                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->

                <!-- SCROLL ICON -->
                <div class="local-scroll-cont font-white">
                    <a href="#about" class="scroll-down smooth-scroll">
                        <div class="icon icon-arrows-down"></div>
                    </a>
                </div>
            </div>

            <!-- FEATURES 15 WE ARE CREATIVE -->
            <div id="about" class="page-section">
            	<div class="container fes1-cont">
            		<div class="row">
            			<div class="col-lg-4 col-md-4">
            				<div class="fes1-main-title-cont wow fadeInUp">
            					<div class="fes15-title-32">
            						About<br>Mataharikecil
            					</div>
            				</div>
            			</div>
            			<div class="col-lg-offset-1 col-lg-7 col-md-8">
            				<div class="row">

            					<div class="col-md-6 col-sm-6 pb-20">
            						<div class="fes11-box wow fadeIn" >
            							<div class="fes1-box-icon">
            								<div class="icon icon-basic-pencil-ruler-pen"></div>
            							</div>
            							<h3>Voluntary Teaching</h3>
            						</div>
				                </div>
				                  
				                <div class="col-md-6 col-sm-6 pb-20">
				                  	<div class="fes11-box wow fadeIn" data-wow-delay="200ms">
				                  		<div class="fes1-box-icon">
				                  			<div class="icon icon-ecommerce-graph-increase"></div>
				                  		</div>
				                  		<h3>Indonesia Youth Sociopreneur</h3>
				                  	</div>
				                </div>
				            </div>

				            <div class="row">
				              	<div class="col-md-6 col-sm-6 pb-20">
				              		<div class="fes11-box wow fadeIn" data-wow-delay="400ms">
				              			<div class="fes1-box-icon">
				              				<div class="icon icon-basic-world"></div>
				              			</div>
				              			<h3>Community</h3>
				              		</div>
				              	</div>
				            </div>                    
				        </div>
				    </div>
				</div>
			</div>

  
        <!-- FEATURES 16 TABS 2 -->
        <div class="page-section">
          <div class="bg-orange mb-100">
            <div class="container">
              
              <!-- TABS NAV -->
              <div class="row">
                <div class="col-md-12">
                  
                  <ul class="fes14-nav-tabs nav nav-tabs bootstrap-tabs">
                    <li class="active"><a href="#web-design" class="fes14-nav-a" data-toggle="tab"><div class="tab-nav-icon icon icon-basic-lightbulb"></div><div class="tab-nav-text">Foundation</div></a></li>
                    <li><a href="#graphic-design"  class="fes14-nav-a" data-toggle="tab"><div class="tab-nav-icon icon icon-basic-pencil-ruler-pen"></div><div class="tab-nav-text">Voluntary</div></a></li>
                    <li><a href="#ui-design"  class="fes14-nav-a" data-toggle="tab"><div class="tab-nav-icon icon icon-basic-world"></div><div class="tab-nav-text">Community</div></a></li>
                    <li><a href="#branding-tab"  class="fes14-nav-a" data-toggle="tab"><div class="tab-nav-icon icon icon-ecommerce-graph-increase"></div><div class="tab-nav-text">IYS</div></a></li>
                  </ul>
                  
                </div>
              </div>
              
              <!-- TABS CONTENT & IMAGES -->
              <div class="row">
              
                <!-- TABS CONTENT -->
                <div class="col-md-6">
                  <div class="fes14-tab-content tab-content">
                  
                    <!-- TAB 1 -->
                    <div class="tab-pane fade in active" id="web-design">
                      <h1 class="fes14-tab-title"><strong>Foundation</strong></h1>
                      <h2 class="fes14-tab-sub-title"><strong>Mataharikecil Indonesia Foundation</strong></h2>
                      <p class="fes14-tab-text mb-60">
                        Mataharikecil Indonesia Foundation merupakan yayasan yang fokus untuk mengurangi angka putus sekolah di Indonesia melalui pendekatan economic empowerement quality access education for all.
                      </p>
                      <div class="fes12-btn-cont mt-30">
                        <a class="button medium rounded gray" href="<?= base_url().'home/about_foundation'?>">BACA SELENGKAPNYA</a>
                      </div>
                    </div>
                    
                    <!-- TAB 2 -->
                    <div class="tab-pane fade" id="ui-design">
                      <h1 class="fes14-tab-title"><strong>Community</strong></h1>
                      <h2 class="fes14-tab-sub-title"><strong>Mataharikecil Community</strong></h2>
                      <p class="fes14-tab-text mb-60">
                        Mataharikecil Community adalah wadah bagi generasi muda untuk berbagi, berkolaborasi dan berkontribusi dalam bidang pendidikan.
                      </p>
                      <div class="fes12-btn-cont mt-30">
                        <a class="button medium rounded gray" href="<?= base_url().'home/programs_mc'?>">BACA SELENGKAPNYA</a>
                      </div>
                    </div>
                    
                    <!-- TAB 3 -->
                    <div class="tab-pane fade" id="graphic-design">
                      <h1 class="fes14-tab-title"><strong>Voluntary</strong></h1>
                      <h2 class="fes14-tab-sub-title"><strong>Voluntary Teaching Program</strong></h2>
                      <p class="fes14-tab-text mb-60">
                        Voluntary Teaching Program merupakan sebuah program mengajar anak didik tingkat TK dan SMP secara sukarela bagi pelajar atau mahasiswa maupun pekerja yang memiliki waktu luang di Kota Bandung dan Jakarta. 
                      </p>
                      <div class="fes12-btn-cont mt-30">
                        <a class="button medium rounded gray" href="<?= base_url().'home/programs_vtp'?>">BACA SELENGKAPNYA</a>
                      </div>
                    </div>
                    
                    <!-- TAB 4 -->
                    <div class="tab-pane fade" id="branding-tab">
                      <h1 class="fes14-tab-title"><strong>IYS</strong></h1>
                      <h2 class="fes14-tab-sub-title"><strong>Indonesia Youth Sociopreneur</strong></h2>
                      <p class="fes14-tab-text mb-60">
                        Indonesia Youth Sociopreneur merupakan program dari Mataharikecil Indonesia Foundation dimana kami mengumpulkan pemuda terbaik bangsa guna untuk meningkatkan ekonomi keluarga anak didik kami melalui sociopreneurship.
                      </p>
                      <div class="fes12-btn-cont mt-30">
                        <a class="button medium rounded gray" href="<?= base_url().'home/programs_iys'?>">BACA SELENGKAPNYA</a>
                      </div>
                    </div>

                  </div>
                </div>
                
                <!-- IMAGES -->
                <div class="col-md-6 fes9-img-cont clearfix">
                  <div class="fes16-img-center clearfix">
                    <img src="<?= base_url().'assets/'?>images/kevin/1.png" alt="img" class="wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1s">
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <!-- FEATURES 12 HALF COLORED FONT MONTSERRAT -->
				<div class="page-section">
					<div class="container-fluid">
						<div data-equal=".equal-height" class="row row-sm-fix">
            
							<div class="col-md-6 fes12-img equal-height" style="background-image: url(assets/images/konten/bdg.jpg)">
                <div class="fes2-main-text-cont text-white">
                  <div class="fes2-title-45 font-gotham text-white">
                    <strong>Mataharikecil<br>Bandung</strong>
                  </div>
                  <div class="line-5-100 bg-white"></div>
                  <div class="fes2-text-cont">Mataharikecil Bandung memiliki program utama untuk membantu dan meringankan beban baik pendidikan, ekonomi maupun sosial dari anak-anak SMP Terbuka Firdaus.</div>
                  <div class="fes12-btn-cont mt-30">
                  	<a class="button medium thin white btn-4 btn-4cc" href="<?= base_url().'home/about_bandung'?>"><span class="button-text-anim"><strong>Baca Selengkapnya </strong></span><span aria-hidden="true" class="button-icon-anim arrow_right"></span></a>
                  </div>
                </div>
							</div>
              
							<div class="col-md-6 fes12-img equal-height" style="background-image: url(assets/images/konten/jkt.jpg)">
                <div class="fes2-main-text-cont text-black">
                  <div class="fes2-title-45 font-gotham">
                    <strong>Mataharikecil<br>Jakarta</strong>
                  </div>
                  <div class="line-5-100"></div>
                  <div class="fes2-text-cont">Mataharilkecil Jakarta menyediakan bantuan untuk TK Warga Teladan berupa sistem, program, dan sumber daya secara sukarela bagi pelajar/mahasiswa dan pekerja di Kota Jakarta sejak tahun 2017.</div>
                  <div class="fes12-btn-cont mt-30">
                  	<a class="button medium thin gray btn-4 btn-4cc" href="<?= base_url().'home/about_jakarta'?>"><span class="button-text-anim"><strong>Baca Selengkapnya </strong></span><span aria-hidden="true" class="button-icon-anim arrow_right"></span></a>
                  </div>
                </div>
							</div>
              
						</div>
					</div>
				</div>
        
        <!-- PORTFOLIO SECTION (3 COLS, WIDE) -->
        <div id="portfolio-link" class="page-section">
          <div class="relative">
          
            <div class="container">
              <div class="pt-80-b-30-cont">
              
                <!-- TITLE -->
              	<div class="mb-10">
              	  <h2 class="section-title2 font-light">Our Documentations</h2>
              	</div>
   
           			<!-- PORTFOLIO FILTER -->                    
           			<div class="pl-xxs-10">
                
           			  <ul class="port-filter font-poppins">
           			  	<li>
           			  		<a href="#" class="filter active" data-filter="*">All Documentations</a>
           			  	</li>
           			  	<li>
           			  		<a href="#" class="filter" data-filter=".foundation">Foundation</a>
           			  	</li>
           			  	<li>
           			  		<a href="#" class="filter" data-filter=".voluntary">Voluntary</a>
           			  	</li>
           			  	<li>
           			  		<a href="#" class="filter" data-filter=".community">Community</a>
           			  	</li>
                    <li>
                      <a href="#" class="filter" data-filter=".iys">IYS</a>
                    </li>
           			  </ul>
                  
           			</div>
                
              </div>
            </div>
            
            <!-- ITEMS GRID -->
            <ul class="port-grid port-grid-3 clearfix" id="items-grid">
              
              <!-- Item -->
              <li class="port-item mix foundation">
                <a href="<?= base_url().'home/about_foundation'?>">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="<?= base_url().'assets/'?>images/documentations/1.jpg" alt="img" >
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-title-cont2">
                      <h3>Foundation</h3>
                      <span>our team</span>
                    </div>
                  </div>
                </a>
              </li>
                                           
              <!-- Item -->
              <li class="port-item mix voluntary">
                <a href="<?= base_url().'home/programs_vtp'?>">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="<?= base_url().'assets/'?>images/documentations/2.jpg" alt="img" >
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-title-cont2">
                      <h3>Voluntary Teaching Program</h3>
                      <span>vtp Bandung batch 11</span>
                    </div>
                  </div>
                </a>
              </li>
                       
              <!-- Item -->
              <li class="port-item mix community">
                <a href="<?= base_url().'home/programs_mc'?>">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="<?= base_url().'assets/'?>images/documentations/3.jpg" alt="img" >
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-title-cont2">
                      <h3>Community</h3>
                      <span>first meeting</span>
                    </div>
                  </div>
                </a>
              </li>
                             
              <!-- Item -->
              <li class="port-item mix community">
                <a href="<?= base_url().'home/programs_mc'?>">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="<?= base_url().'assets/'?>images/documentations/4.jpg" alt="img" >
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-title-cont2">
                      <h3>Community</h3>
                      <span>first meeting</span>
                    </div>
                  </div>
                </a>
              </li>
              
              <!-- Item -->
              <li class="port-item mix iys">
                <a href="<?= base_url().'home/programs_iys'?>">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="<?= base_url().'assets/'?>images/documentations/5.jpg" alt="img" >
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-title-cont2">
                      <h3>IYS</h3>
                      <span>public speaking training</span>
                    </div>
                  </div>
                </a>
              </li>
 
              <!-- Item -->
              <li class="port-item mix iys">
                <a href="<?= base_url().'home/programs_iys'?>">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="<?= base_url().'assets/'?>images/documentations/6.jpg" alt="img" >
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-title-cont2">
                      <h3>IYS</h3>
                      <span>public speaking training</span>
                    </div>
                  </div>
                </a>
          
              </li>

            </ul>
          
          </div>
        </div>

        <!-- VIEW MORE PROJECTS  -->
        <!--<div class="port-view-more-cont">
          <a class="port-view-more" href="<?= base_url().'home/index_documentations'?>">Lihat Dokumentasi Lainnya</a>
        </div>-->
        <!-- END PORTFOLIO SECTION -->
			
                 
        <!-- TESTIMONIALS CAROUSEL 3 -->
        <div id="clients-link" class="pt-110-b-80-cont pb-md-80 owl-plugin fullwidth-slider owl-bg-black font-white" style="background: url(assets/images/testimonials/bg.jpg);" >
          
          <!-- Slide Item -->
          <div class="container">
            <div class="relative">
              <div class="row">

                <div class="col-md-3">
                  <div class="ts3-author-cont">
                    <div class="ts3-author-img">
                      <img class="img-circle" src="<?= base_url().'assets/'?>images/testimonials/1.jpg" alt="photo" >
                    </div>
                    <div class="ts-author-info text-center">
                      <div class="ts-name font-white">
                        <strong>Amaro Juna</strong>
                      </div>
                      <div class="ts-type">Leader, Mataharikecil Bandung</div>
                    </div>
                    
                  </div>
                </div>
                
                <div class="col-md-9">
                  <blockquote class="testimonial-3">
                    <p class="font-white">Mataharikecil tidak hanya berupa yayasan yang peduli dengan pendidikan di Indonesia, namun menjadi wadah bagi para pemuda untuk melakukan kebaikan dan menemukan keluarga baru.</p>
                  </blockquote>
                </div>
                
              </div>
            </div>
          </div>
           
          <!-- Slide Item -->
          <div class="container">
            <div class="relative">
              <div class="row">

                <div class="col-md-3">
                  <div class="ts3-author-cont">
                    <div class="ts3-author-img">
                      <img class="img-circle" src="<?= base_url().'assets/'?>images/testimonials/2.jpg" alt="photo" >
                    </div>
                    <div class="ts-author-info text-center">
                      <div class="ts-name font-white">
                        <strong>Aldie Adrian</strong>
                      </div>
                      <div class="ts-type">IT, Mataharikecil</div>
                    </div>
                    
                  </div>
                </div>
                
                <div class="col-md-9">
                  <blockquote class="testimonial-3">
                    <p class="font-white">Bergabung dengan Mataharikecil Indonesia Foundation sangat menyenangkan, bukan hanya bisa berbagi kebaikan, tapi juga bisa menemukan keluarga baru didalamnya.</p>
                  </blockquote>
                </div>
                
              </div>
            </div>
          </div>
           
          <!-- Slide Item -->
          <div class="container">
            <div class="relative">
              <div class="row">

                <div class="col-md-3">
                  <div class="ts3-author-cont">
                    <div class="ts3-author-img">
                      <img class="img-circle" src="<?= base_url().'assets/'?>images/testimonials/3.jpg" alt="photo" >
                    </div>
                    <div class="ts-author-info text-center">
                      <div class="ts-name font-white">
                        <strong>Rafi Hidayat</strong>
                      </div>
                      <div class="ts-type">Co Founder, Mataharikecil</div>
                    </div>
                    
                  </div>
                </div>
                
                <div class="col-md-9">
                  <blockquote class="testimonial-3">
                    <p class="font-white">Mataharikecil merupakan gabungan dari pemuda yang kreatif dan peduli dengan pendidikan di Indonesia. Dengan tujuan yang sama untuk memajukan pendidikan di Indonesia.</p>
                  </blockquote>
                </div>
                
              </div>
            </div>
          </div>

        </div>
 
        
        <!-- COUNTERS 2 -->
        <div id="counter-2" class="page-section p-80-cont bg-gray">
          <div class="container">
        
            <div  class="row text-center">
                            
              <!-- Item -->
              <div class="col-xs-6 col-sm-3 border-none">
                <div class="count-number bold">
                  1266
                </div>
                <div class="count-descr">
                  <span class="count-title bold">Volunteers</span>
                </div>
              </div>
              
              <!-- Item -->
              <div class="col-xs-6 col-sm-3 border-none">
                <div class="count-number bold">
                 186
                </div>
                <div class="count-descr">
                  <span class="count-title bold">Members</span>
                </div>
              </div>
              
              <!-- Item -->
              <div class="col-xs-6 col-sm-3 border-none">
                <div class="count-number bold">
                  140
                </div>
                <div class="count-descr">
                  <span class="count-title bold">Students</span>
                </div>
              </div>
              
              <!-- Item -->
              <div class="col-xs-6 col-sm-3 border-none">
                <div class="count-number bold">
                 50
                </div>
                <div class="count-descr">
                  <span class="count-title bold">Cooperations</span>
                </div>
              </div>  
              
            </div>
          </div>
        </div>
        
  
        <!-- FOOTER 4 BLACK WITH TWITTER FEED -->
        <footer id="footer4" class="page-section pt-95 pb-50 footer2-black">
          <div class="container">
            <div class="row">
            
              <div class="col-md-3 col-sm-3 widget">
                <div class="logo-footer-cont">
                  <a href="<?= base_url().'home'?>">
                    <img class="logo-footer" src="<?= base_url().'assets/'?>images/logo/logo-footer-orange.png" alt="logo">
                  </a>
                </div>
                <div class="footer2-text-cont">
                  <address>
                   SMP Terbuka Firdaus<br>
                   Jalan Paralayang No. 2<br>
                   Kota Bandung, 40293
                  </address>
                </div>
                <div class="footer2-text-cont">
                  +62 811-2277-217<br>
                  <a class="a-text" href="mailto:mataharikecil.id@gmail.com">mataharikecil.id@gmail.com</a>
                </div>
                <div class="footer2-text-cont a-text-main-cont">
                  <a class="popup-gmaps mfp-plugin font-poppins" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7276703411003!2d107.66989941431713!3d-6.923122469685354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd5455b22e7d%3A0x424ed11f928f271c!2sSMP%20Terbuka%20Firdaus!5e0!3m2!1sid!2sid!4v1567293271903!5m2!1sid!2sid">Open Map</a>
                </div>
              </div>
              
              <div class="col-md-2 col-sm-2 widget">
                <h4>Navigate</h4>
                <ul class="links-list a-text-cont a-text-main-cont font-poppins">
                  <li><a href="<?= base_url().'home'?>">Home</a></li>
                  <li><a href="<?= base_url().'home/events'?>">Events</a></li>
                  <!--<li><a href="<?= base_url().'home/documentations'?>">Documentations</a></li>-->
                  <li><a href="<?= base_url().'home/contact'?>">Contact</a></li>
                </ul>
              </div>
              
              <div class="col-md-3 col-sm-3 widget">
                <h4>About Us</h4>
                <ul class="links-list a-text-cont font-poppins" >
                  <li><a href="<?= base_url().'home/about_bandung'?>">Mataharikecil Bandung</a></li>
                  <li><a href="<?= base_url().'home/about_jakarta'?>">Mataharikecil Jakarta</a></li>
                  <li><a href="<?= base_url().'home/about_foundation'?>">Mataharikecil Indonesia Foundation</a></li>
                </ul>
              </div>

               <div class="col-md-3 col-sm-3 widget">
                <h4>Our Programs</h4>
                <ul class="links-list a-text-cont font-poppins" >
                  <li><a href="<?= base_url().'home/programs_vtp'?>">Voluntary Teaching Program</a></li>
                  <li><a href="<?= base_url().'home/programs_mc'?>">Mataharikecil Community</a></li>
                  <li><a href="<?= base_url().'home/programs_iys'?>">Indonesia Youth Sociopreneur</a></li>
                </ul>
              </div>
              
            
            </div>    
            
            <!-- SUB FOOTER -->
            <div class="footer2-copy-cont clearfix">
              <!-- Social Links -->
              <div class="footer2-soc-a right">
                <a href="https://instagram.com/mataharikecil_id/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://linkedin.com/company/mataharikecil_id/" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="mailto:mataharikecil.id@gmail.com" title="Gmail" target="_blank"><i class="icon_mail"></i></a>
              </div>
              
              <!-- Copyright -->
              <div class="left">
                <a class="footer2-copy" href="<?= base_url().'home'?>">&copy; mataharikecil</a>
              </div>

            </div>
                    
          </div>
        </footer>
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<!-- JS begin -->

		<!-- jQuery  -->
		<script  src="<?= base_url().'assets/'?>js/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url().'assets/'?>js/bootstrap.min.js"></script>		

		<!-- MAGNIFIC POPUP -->
		<script src="<?= base_url().'assets/'?>js/jquery.magnific-popup.min.js"></script>
    
    <!-- PORTFOLIO SCRIPTS -->
    <script  src="<?= base_url().'assets/'?>js/isotope.pkgd.min.js"></script>
    <script  src="<?= base_url().'assets/'?>js/imagesloaded.pkgd.min.js"></script>
    <script  src="<?= base_url().'assets/'?>js/masonry.pkgd.min.js"></script>
    
    <!-- COUNTER -->
    <script  src="<?= base_url().'assets/'?>js/jquery.countTo.js"></script>
    
    <!-- APPEAR -->    
    <script  src="<?= base_url().'assets/'?>js/jquery.appear.js"></script>
    
    <!-- OWL CAROUSEL -->    
    <script  src="<?= base_url().'assets/'?>js/owl.carousel.min.js"></script>
    
    <!-- JQUERY TWEETS -->
		<script src="<?= base_url().'assets/'?>js/twitter/jquery.tweet.js"></script> 
    
    <!-- MAIN SCRIPT -->
		<script src="<?= base_url().'assets/'?>js/main.js"></script>
		
		<!-- REVOSLIDER SCRIPTS  -->
    <script src="<?= base_url().'assets/'?>revo-slider/js/jquery.themepunch.tools.min.js" >
    </script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/jquery.themepunch.revolution.min.js" >
    </script>
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.actions.min.js" ></script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.carousel.min.js" ></script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.kenburn.min.js" ></script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.layeranimation.min.js" >
    </script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.migration.min.js" ></script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.navigation.min.js" ></script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.parallax.min.js" ></script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.slideanims.min.js" ></script>
    <script src="<?= base_url().'assets/'?>revo-slider/js/extensions/revolution.extension.video.min.js" ></script>
      
    <!-- SLIDER REVOLUTION INITIALIZATION  -->
    <script>
      jQuery(document).ready(function() {
          
        jQuery("#rev_slider_202_1").show().revolution({
          sliderType: "standard",
          jsFileLocation: "revo-slider/js/",
          sliderLayout: "fullscreen",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 50,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            },
            arrows: {
              style: "hermes",
              enable: true,
              hide_onmobile: true,
              hide_onleave: true,
              tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 0,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 0,
                v_offset: 0
              }
            },
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [868, 768, 960, 720],
          lazyType: "none",
           parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
          },
          shadow: 0,
          spinner: "spinner2",
          stopLoop: "on",
          stopAfterLoops: 0,
          stopAtSlide: 1,
          shuffle: "off",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
       
      }); /*ready*/
    </script>
<!-- JS end -->	
	
	</body>
</html>		