<?php global $global_variable; ?>

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- Page Title -->
    <title>Freelancerroni - Personal Portfolio Template</title>
    
    <!---Font Icon-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/flaticon.css">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Plugins css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/plugins.css">
    
    <!-- Modernizr js-->
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- stylesheet linking -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <style>
        #sticky_header{
            background-color: <?php echo $global_variable['sticky_bg_color']?>;
        }
        .site_header{
            background-color: <?php echo $global_variable['header_bg_color']?>;
        }
        .navigation_area > .mainmenu_area .mainmenu > li > a{
            color: <?php echo $global_variable['header_text_color']?>;
        }
        #sticky_header .site_navigation .navigation_area > .mainmenu_area .mainmenu > li > a{
            color: <?php echo $global_variable['sticky_header_text_color']?>;
        }
        #sticky_header .site_navigation .navigation_area > .mainmenu_area .mainmenu > li > a.active{
            color: <?php echo $global_variable['header_text_active_color']?>;
        }
        .dot_effect{
            background-color: <?php echo $global_variable['header_dot_effect_color']?>;
        }
        .navigation_area > .mainmenu_area .mainmenu > li > a{
            font-size: <?php echo $global_variable['header_font_size']?>;
        }
        #header .site_navigation a.site_logo .logo_class.scroll_block{
            display:none;
        }
        #sticky_header .site_navigation a.site_logo .logo_class{
            display:none;
        }
        #sticky_header .site_navigation a.site_logo .logo_class.scroll_block{
            display:block;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navigation_area">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!--~~~~~ Start Preloader Area ~~~~~-->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!--~./ end prealoader area ~-->
    
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Site Header
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header id="header" class="site_header">
        <!--~~~~~ Start Site Navigarion ~~~~~-->
        <div class="site_navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navigation_area">
                            <a class="navbar-brand site_logo" href="<?php esc_url(home_url()); ?>">
                                <img class="logo_class" width="<?php echo $global_variable['header_logo_size']?>" src="<?php echo $global_variable['header_logo_1']['url']?>" alt="<?php echo $global_variable['alt']?>">
                                <img class="logo_class scroll_block" width="<?php echo $global_variable['header_logo_size']?>" src="<?php echo $global_variable['header_logo_2']['url']?>" alt="<?php echo $global_variable['alt']?>">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse mainmenu_area" id="navbarNav">
                                <ul class="navbar-nav mainmenu">
                                    <li class="nav-item">
                                        <a class="nav-link smoot_scroll dots_effect active" href="#home" data-scroll-nav="0">Home <span class="dot_effect dot_hover"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link smoot_scroll dots_effect" href="#about" data-scroll-nav="1">About <span class="dot_effect dot_hover"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link smoot_scroll dots_effect" href="#services" data-scroll-nav="2">services <span class="dot_effect dot_hover"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link smoot_scroll dots_effect" href="#work" data-scroll-nav="3">Work <span class="dot_effect dot_hover"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link smoot_scroll dots_effect" href="#client" data-scroll-nav="4">client <span class="dot_effect dot_hover"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link smoot_scroll dots_effect" href="#blog" data-scroll-nav="5">blog <span class="dot_effect dot_hover"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link smoot_scroll dots_effect" href="#contact" data-scroll-nav="6">contact <span class="dot_effect dot_hover"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--~./ end site navigation ~-->
    </header>  
    <!--~~/. end site header ~~-->
    <div id="sticky_header"></div>
    
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Site Wrapper
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="site_wrapper bg_white">
        <!--~~~~~ Start Welcome Area ~~~~~-->
        <section id="home" class="section_scroll welcome_area" data-scroll-index="0">
            <div class="bg_overlay bg_image page_cover" style="background-image:url('images/bg/1.jpg')"></div>
        
            <div id="particles-js"></div>
            
            <!--~~~~~ Start Home Wrapper Info ~~~~~-->
            <div class="home_wrapper_info">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="home_text_block text-center">
                                <h3><span>Hello</span></h3>
                                <h1 class="cd-headline clip">
                                    <span>I am</span>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Zman</b>
                                        <b>Developer</b>
                                        <b>Designer</b>
                                    </span>
                                </h1>
                                <ul class="expart_list">
                                    <li>Web developer</li>
                                    <li>Ux/Ui Designer</li>
                                    <li>Web designer</li>
                                </ul>
                                <ul class="header_social_share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--~./ end home wrapper info ~-->

            <div class="scroll_indicator_wrapper">
                <a href="#about" class="scroll_indicator scroll_down" data-scroll-goto="1"></a>
            </div>
        </section>
        <!--~./ end welcome area ~-->
        
        <!--~~~~~ Start About Area ~~~~~-->
        <section id="about" class="section_scroll" data-scroll-index="1">
            <div class="about_area pb-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="about_content text-center">
                                <div class="info">
                                    <img src="images/about.jpg" alt="about">
                                    <h3>James William</h3>
                                    <h5>Web Developer</h5>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi facere perspiciatis doloremque vero rerum inventore, consequatur, suscipit. Aperiam totam, praesentium? Dolore porro dolorum animi veritatis maxime alias fugit, rerum perspiciatis eius aperiam ipsam optio explicabo.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sit suscipit ratione hic, doloribus maxime perspiciatis iste sapiente error illo.</p>

                                <ul class="tag_list">
                                    <li>bootstrap</li>
                                    <li>html5</li>
                                    <li>css3</li>
                                    <li>PSD</li>
                                    <li>jquery</li>
                                    <li>github</li>
                                    <li>javaScript</li>
                                    <li>PHP</li>
                                    <li>wordpress</li>
                                    <li>git</li>
                                    <li>Photoshop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--~~~~~ Start Skill Area ~~~~~-->
            <div class="skill_area ptb-110 bg_gray">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12">
                            <div class="skill_list">
                                <div class="single_skill">
                                    <h3>Graphics design</h3>
                                    <div class="progress_bar">
                                        <span data-percent="88"><strong>88%</strong></span>
                                    </div>
                                </div><!--/.single_skill-->
                                <div class="single_skill">
                                    <h3>SEO</h3>
                                    <div class="progress_bar">
                                        <span data-percent="80"><strong>80%</strong></span>
                                    </div>
                                </div><!--/.single_skill-->
                                <div class="single_skill">
                                    <h3>responsive web design</h3>
                                    <div class="progress_bar">
                                        <span data-percent="98"><strong>98%</strong></span>
                                    </div>
                                </div><!--/.single_skill-->
                                <div class="single_skill">
                                    <h3>website development</h3>
                                    <div class="progress_bar">
                                        <span data-percent="95"><strong>95%</strong></span>
                                    </div>
                                </div><!--/.single_skill-->
                                <div class="single_skill">
                                    <h3>internet marketing</h3>
                                    <div class="progress_bar">
                                        <span data-percent="78"><strong>78%</strong></span>
                                    </div>
                                </div><!--/.single_skill-->
                                <div class="single_skill">
                                    <h3>data management</h3>
                                    <div class="progress_bar">
                                        <span data-percent="92"><strong>92%</strong></span>
                                    </div>
                                </div><!--/.single_skill-->
                            </div>
                        </div><!--/.col-md-12-->
                    </div><!--/.row-->
                </div><!--/.container-->
            </div>
            <!--~./ end skill area ~-->
        </section>
        <!--~./ end about area ~-->
        
        <!--~~~~~ Start Services Area ~~~~~-->
        <section id="services" class="services_area section_scroll ptb-110" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title text-center">
                            <h3><span>services</span></h3>
                            <h2 class="title">My <span>Services.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!--~~ Start Single Service ~~-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-settings"></i>
                            </div>
                            <div class="info">
                                <h2>Branding &amp; identity</h2>
                                <p>We will make you a brand that is catchy and leaves a trace. maybe that a Your target group will never forget you.</p>
                            </div>
                        </div>
                    </div><!--~./end single service ~-->
                    <!--~~ Start Single Service ~~-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-paper-plane"></i>
                            </div>
                            <div class="info">
                                <h2>Graphic Design</h2>
                                <p>We will make you a brand that is catchy and leaves a trace. maybe that a Your target group will never forget you.</p>
                            </div>
                        </div>
                    </div><!--~./end single service ~-->
                    <!--~~ Start Single Service ~~-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-idea"></i>
                            </div>
                            <div class="info">
                                <h2>Digital Merketing</h2>
                                <p>We will make you a brand that is catchy and leaves a trace. maybe that a Your target group will never forget you.</p>
                            </div>
                        </div>
                    </div><!--~./end single service ~-->
                    <!--~~ Start Single Service ~~-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-photo-camera"></i>
                            </div>
                            <div class="info">
                                <h2>Photography</h2>
                                <p>We will make you a brand that is catchy and leaves a trace. maybe that a Your target group will never forget you.</p>
                            </div>
                        </div>
                    </div><!--~./end single service ~-->
                    <!--~~ Start Single Service ~~-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-layers"></i>
                            </div>
                            <div class="info">
                                <h2>Customizability</h2>
                                <p>We will make you a brand that is catchy and leaves a trace. maybe that a Your target group will never forget you.</p>
                            </div>
                        </div>
                    </div><!--~./end single service ~-->
                    <!--~~ Start Single Service ~~-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-responsive"></i>
                            </div>
                            <div class="info">
                                <h2>Responsive</h2>
                                <p>We will make you a brand that is catchy and leaves a trace. maybe that a Your target group will never forget you.</p>
                            </div>
                        </div>
                    </div><!--~./end single service ~-->
                </div>
            </div>
        </section>
        <!--~./ end services area ~-->
        
        <!--~~~~~ Start Fanfact Area ~~~~~-->
        <section class="fanfact_area ptb-100 funfact_bg bg_image bg_overlay" style="background-image:url('images/bg/2.jpg')">
            <div class="container">
                <div class="row">
                    <!--~~ Start Fanfact ~~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fanfact">
                            <span class="flaticon-clock"></span>
                            <h3 class="counter">985</h3>
                            <p>working hours</p>
                        </div>
                    </div><!--~~/. end fanfact ~~-->
                    <!--~~ Start Fanfact ~~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fanfact">
                            <span class="flaticon-gift"></span>
                            <h3 class="counter">1287</h3>
                            <p>completed project</p>
                        </div>
                    </div><!--~~/. end fanfact ~~-->
                    <!--~~ Start Fanfact ~~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fanfact">
                            <span class="flaticon-users"></span>
                            <h3 class="counter">205</h3>
                            <p>Happy client</p>
                        </div>
                    </div><!--~~/. end fanfact ~~-->
                    <!--~~ Start Fanfact ~~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fanfact">
                            <span class="flaticon-trophy"></span>
                            <h3 class="counter">12</h3>
                            <p>winner award</p>
                        </div>
                    </div><!--~~/. end fanfact ~~-->
                </div>
            </div>
        </section>
        <!--~./ end fanfact area ~-->
        
        <!--~~~~~ Start Work Area ~~~~~-->
        <section id="work" class="work_area section_scroll ptb-110" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title text-center">
                            <h3><span>portfolio</span></h3>
                            <h2 class="title">Recent <span>Work.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="recent_work_nav">
                            <li>
                                <a href="#" data-filter="*" class="dots_effect filter active">all<span class="dot_effect dot_hover"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter=".graphic" class="dots_effect filter">Graphic<span class="dot_effect dot_hover"></span></a>
                            </li>
                            <li>
                                <a href="#" data-filter=".brand" class="dots_effect filter">Brand<span class="dot_effect dot_hover"></span></a>
                            </li>
                            <li>
                                <a href="#" data-filter=".print" class="dots_effect filter">print<span class="dot_effect dot_hover"></span></a>
                            </li>
                            <li>
                                <a href="#" data-filter=".web" class="dots_effect filter"> web<span class="dot_effect dot_hover"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="masonry" class="row justify-content-center portfolio_items_list">
                    <!--~~ Start Sigle Work ~~-->
                    <div class="col-lg-4 col-md-6 brand grid print">
                        <a href="images/portfolio/1.jpg" class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/1.jpg" alt="project1" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask_container text-center">
								    <h3>web design</h3>
								    <p>Work description here</p>
								</div>
								<span class="fa fa-picture-o"></span>
							</div>
						</a>
                    </div><!--~/. end single work ~-->
                    <!--~~ Start Sigle Work ~~-->
                    <div class="col-lg-4 col-md-6 grid web">
                        <a href="images/portfolio/2.jpg" class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/2.jpg" alt="project1" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask_container text-center">
								    <h3>web design</h3>
								    <p>Work description here</p>
								</div>
								<span class="fa fa-picture-o"></span>
							</div>
						</a>
                    </div><!--~/. end single work ~-->
                    <!--~~ Start Sigle Work ~~-->
                    <div class="col-lg-4 col-md-6 grid graphic">
                        <a href="images/portfolio/5.jpg" class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/5.jpg" alt="project1" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask_container text-center">
								    <h3>web design</h3>
								    <p>Work description here</p>
								</div>
								<span class="fa fa-picture-o"></span>
							</div>
						</a>
                    </div><!--~/. end single work ~-->
                    <!--~~ Start Sigle Work ~~-->
                    <div class="col-lg-4 col-md-6 grid brand print">
                        <a href="images/portfolio/4.jpg" class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/4.jpg" alt="project1" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask_container text-center">
								    <h3>web design</h3>
								    <p>Work description here</p>
								</div>
								<span class="fa fa-picture-o"></span>
							</div>
						</a>
                    </div><!--~/. end single work ~-->
                    <!--~~ Start Sigle Work ~~-->
                    <div class="col-lg-4 col-md-6 grid graphic">
                        <a href="images/portfolio/3.jpg" class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/3.jpg" alt="project1" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask_container text-center">
								    <h3>web design</h3>
								    <p>Work description here</p>
								</div>
								<span class="fa fa-picture-o"></span>
							</div>
						</a>
                    </div><!--~/. end single work ~-->
                    <!--~~ Start Sigle Work ~~-->
                    <div class="col-lg-4 col-md-6 grid brand web">
                        <a href="images/portfolio/6.jpg" class="work_item">
							<div class="work_thumb">
								<img src="images/portfolio/6.jpg" alt="project1" class="img-responsive">
							</div>
							<div class="work_hover_mask">
								<div class="mask_container text-center">
								    <h3>web design</h3>
								    <p>Work description here</p>
								</div>
								<span class="fa fa-picture-o"></span>
							</div>
						</a>
                    </div><!--~/. end single work ~-->
                </div>
            </div>
        </section>
        <!--~./ end work area ~-->
        
        <!--~~~~~ Start Testimonial Area ~~~~~-->
        <section id="client" class="testimonial_area section_scroll bg_gray ptb-110" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3><span>client say</span></h3>
                            <h2 class="title">Client <span>Testimonials.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="testimonial_carousel owl-carousel">
                            <!--~~~~~ Start Single Testimonial ~~~~~-->
                            <div class="single_testimonial text-center">
                                <img src="images/testimonial/01.png" alt="thumb">
                                <div class="info">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, neque. Modi consequuntur eius, quas ducimus inventore perspiciatis ut ex illo sapiente pariatur voluptatum totam, mollitia sit dignissimos rem obcaecati. Dignissimos."</p>
                                    <h5>
                                        <span class="recomenders-name">Jeffrey Way,</span> 
                                        <span class="recomenders-role">envato+</span>
                                    </h5>
                                </div>
                            </div><!--~./ end single testimonail ~-->
                            <!--~~~~~ Start Single Testimonial ~~~~~-->
                            <div class="single_testimonial text-center">
                                <img src="images/testimonial/02.png" alt="thumb">
                                <div class="info">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, neque. Modi consequuntur eius, quas ducimus inventore perspiciatis ut ex illo sapiente pariatur voluptatum totam, mollitia sit dignissimos rem obcaecati. Dignissimos."</p>
                                    <h5>
                                        <span class="recomenders-name">Jeffrey Way,</span> 
                                        <span class="recomenders-role">envato+</span>
                                    </h5>
                                </div>
                            </div><!--~./ end single testimonail ~-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~./ end testimonial area ~-->
        
        <!--~~~~~ Start Blog Area ~~~~~-->
        <section id="blog" class="section_scroll blog_area ptb-110" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3><span>Blog</span></h3>
                            <h2 class="title">Latest <span>News.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <article class="entry_post text-center">
                            <figure class="post_thumb">
                                <a href="#">
                                    <img class="img-responsive" src="images/post/1.jpg" alt="img">
                                </a>
                                <span class="entry_date">june 15, 2017</span>
                            </figure><!--/.entry-thumb-->
                            <h2 class="entry_title">
                                <a href="#">Hiking the Isle of Skye</a>
                            </h2>
                            <div class="entry_content">
                                <p>We lysses by James Joyce: a Classic for a Reason Snth Schlitz, tempor duis single-origin coffee ea next level fanny pack nostrud.</p>
                            </div><!--/.entry-footer-->
                            <footer class="entry_footer clearfix">
                                <div class="entry_meta">
                                    <span class="entry_user"><img class="img-responsive" src="images/testimonial/01.png" alt="img"><a href="#">Smith</a></span>
                                </div><!--/.entry_meta-->
                                <div class="social_share_area">
                                    <div class="share_btn">
                                        <i class="fa fa-share-alt"></i>
                                        <div class="social_share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div><!--/.share_btn-->
                                </div><!--/.social_share_area-->
                            </footer><!--/.entry_post-->
                        </article><!--/.entry_post-->
                    </div><!--/.col-md-4-->
                    <div class="col-lg-4 col-md-6">
                        <article class="entry_post text-center">
                            <figure class="post_thumb">
                                <a href="#">
                                    <img class="img-responsive" src="images/post/2.jpg" alt="img">
                                </a>
                                <span class="entry_date">june 15, 2017</span>
                            </figure><!--/.entry-thumb-->
                            <h2 class="entry_title">
                                <a href="#">The Best Template</a>
                            </h2>
                            <div class="entry_content">
                                <p>We lysses by James Joyce: a Classic for a Reason Snth Schlitz, tempor duis single-origin coffee ea next level fanny pack nostrud.</p>
                            </div><!--/.entry-footer-->
                            <footer class="entry_footer clearfix">
                                <div class="entry_meta">
                                    <span class="entry_user"><img class="img-responsive" src="images/testimonial/02.png" alt="img"><a href="#">Smith</a></span>
                                </div><!--/.entry_meta-->
                                <div class="social_share_area">
                                    <div class="share_btn">
                                        <i class="fa fa-share-alt"></i>
                                        <div class="social_share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div><!--/.share_btn-->
                                </div><!--/.social_share_area-->
                            </footer><!--/.entry_post-->
                        </article><!--/.entry_post-->
                    </div><!--/.col-md-4-->
                    <div class="col-lg-4 col-md-6">
                        <article class="entry_post text-center">
                            <figure class="post_thumb">
                                <a href="#">
                                    <img class="img-responsive" src="images/post/3.jpg" alt="img">
                                </a>
                                <span class="entry_date">june 15, 2017</span>
                            </figure><!--/.entry_thumb-->
                            <h2 class="entry_title">
                                <a href="#">Hiking the Isle of Skye</a>
                            </h2>
                            <div class="entry_content">
                                <p>We lysses by James Joyce: a Classic for a Reason Snth Schlitz, tempor duis single-origin coffee ea next level fanny pack nostrud.</p>
                            </div><!--/.entry-footer-->
                            <footer class="entry_footer clearfix">
                                <div class="entry_meta">
                                    <span class="entry_user"><img class="img-responsive" src="images/testimonial/01.png" alt="img"><a href="#">Smith</a></span>
                                </div><!--/.entry_meta-->
                                <div class="social_share_area">
                                    <div class="share_btn">
                                        <i class="fa fa-share-alt"></i>
                                        <div class="social_share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div><!--/.share_btn-->
                                </div><!--/.social_share_area-->
                            </footer><!--/.entry_post-->
                        </article><!--/.entry_post-->
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <!--~./ end Blog Area~~-->
        
        <!--~~~~~ Start Contact Area ~~~~~-->
        <section class="contact_area section_scroll bg_gray ptb-110"  data-scroll-index="6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3><span>contact</span></h3>
                            <h2 class="title">Get In <span>Touch.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!--~~~~~ Start Single Contact Info ~~~~~-->
                        <div class="single_contact_info">
                            <span class="fa fa-phone"></span>
                            <div class="info">
                                <h4>Phone : </h4>
                                <p>+20 010 2517 8918</p>
                            </div>
                        </div><!--~./ end single contact info~-->
                        <!--~~~~~ Start Single Contact Info ~~~~~-->
                        <div class="single_contact_info">
                            <span class="fa fa-map-marker"></span>
                            <div class="info">
                                <h4>Phone : </h4>
                                <p>Upper East Side, San Francisco</p>
                            </div>
                        </div><!--~./ end single contact info~-->
                        <!--~~~~~ Start Single Contact Info ~~~~~-->
                        <div class="single_contact_info">
                            <span class="fa fa-envelope"></span>
                            <div class="info">
                                <h4>Email : </h4>
                                <p>Support@website.com</p>
                            </div>
                        </div><!--~./ end single contact info~-->
                    </div>
                    <div class="col-lg-6">
                        <form class="form" id="contact-form" method="post">
                            

                                <?php 
                                
                                $editor = isset($global_variable['contact_form_7']) ? $global_variable['contact_form_7'] : '';
                                $output = do_shortcode($editor);
                                echo $output;
                                
                                ?>

                            
                        </form>
                    </div>
                </div>
            </div>
        </section><!--~./ end contact area~~-->
    </div>
    <!--~~/. end site wrapper ~~-->
    
    
    <!--~~~~~ Start Section Sroller Button ~~~~~-->
    <div id="section_scroller_button">
        <span class="fa fa-angle-down"></span>
    </div><!--/#section_scroller_button-->
    
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Site Footer
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <footer id="footer" class="footer section_scroll">
        <div class="footer-widgets-area ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="footer_description text-center">
                            <a class="footer_logo site_logo" href="index.html">

                            </a>
                            <a class="footer_logo site_logo" href="<?php esc_url(home_url()); ?>">
                                <img class="logo_class" width="<?php echo $global_variable['header_logo_size']?>" src="<?php echo $global_variable['header_logo_3']['url']?>" alt="<?php echo $global_variable['alt']?>">
                            </a>
                            <p>We love who we are and we are very proud to be Curabitur sit amet magnaquam. Praesent in libero vel turpis</p>
                            <ul class="footer_social_share">
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul><!-- Footer Social Share -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer widgets area -->
        
        <div class="footer-bottom-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>&copy; 2018 Copyright <a href="#">Theme_Bangla</a> All rights reserved.</p>
                        </div><!-- Copyright Text -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--~~/. end site footer ~~-->
    
   
    <!-- jQuery javascripts -->
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/vendor/jquery-v3.2.1.min.js"></script>
    <!-- Bootstrap javascrits -->
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/bootstrap.min.js"></script>
    <!-- Popper javascrits -->
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/popper.min.js"></script>
    <!-- Plugins javascrits -->
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/plugins.js"></script>
    <!-- Plugins Appear -->
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.appear.js"></script>
    <!-- Main scripts -->
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/main.js"></script>
    <script type="text/javascript">
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 160,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 1,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 4,
                        "size_min": 0.3,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 600
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 250,
                        "size": 0,
                        "duration": 2,
                        "opacity": 0,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 400,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);;
    </script>
</body>

</html>
