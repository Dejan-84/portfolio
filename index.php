<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Dejan Djurdjev-Portfolio</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/page/favicon-32x32.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="./asset/page/favicon-16x16.jpg">
    <link rel="shortcut icon" href="./asset/page/favicon.jpg">
    <!-- metatag -->
    <meta name="author" content="Rama Hardian Sidik" />
    <meta property="og:title" content="Freeman - Multipurpose Personal One Page Html Template" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Freeman - Multipurpose Personal One Page Html Template" />
    <meta property="og:site_name" content="Freeman template" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Freeman - Multipurpose Personal One Page Html Template">
    <meta name="twitter:description" content="Freeman - Multipurpose Personal One Page Html Template">
    <meta name="twitter:image" content="">
    <meta id="tw_url" name="twitter:url" content="">
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <!-- main style -->
    <link href="css/main.css" rel="stylesheet">
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header id="headermain">
        <div class="container">
            <div class="row headerwrap">
                <div class="col-xs-12 col-md-12 col-lg-2">
            
                    <!-- navigation icon  -->
                    <div class="navicon d-block d-lg-none">
                        <div class="navicon__bar"></div>
                    </div>
                    <!-- end navigation icon  -->
                </div>
                <div class="col-lg-10 text-xl-left d-none d-lg-block justify-content-lg-left justify-content-xl-left">
                    <!-- navigation desktop -->
                    <nav class="navpage text-left">
                        <ul class="navpage__wrap">
                            <li class="navpage__list"><a href="#sectionhero" class="activelink">Intro</a></li>
                            <li class="navpage__list"><a href="#aboutsection">About Me</a></li>
                            <li class="navpage__list"><a href="#servicesection">Service</a></li>
                            <li class="navpage__list"><a href="#portfoliosection">Portfolio</a></li>
                            <li class="navpage__list"><a href="#contactsection">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- end navigation desktop -->
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- mobile nav -->
    <div class="overlay">
        <div class="overlay__navigation">
            <ul class="overlay__listnav">
                <li class="navpage__list"><a href="#herosection">Intro</a></li>
                <li><a href="#aboutsection">About Me</a></li>
                <li><a href="#servicesection">Services</a></li>
                <li><a href="#portfoliosection">Portfolio</a></li>
                <li><a href="#contactsection">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- end mobile nav -->
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="preloader__img">
            <img src="./asset/page/logo.png" alt="logopage" class="img-fluid" />
        </div>
    </div>
    <!-- main wrap -->
    <main id="mainwrap">
        <!-- section hero -->
        <div id="sectionhero" class="sectionblock">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-0 mr-0 pl-lg-0 pr-lg-5 mr-lg-0 mt-3 mt-lg-0 align-items-center justify-content-center align-items-lg-left justify-content-lg-left text-center text-lg-left d-flex order-1 order-lg-0 ">
                        <div class="infohero ">
                            <p class="infohero__p">Hello, i'm</p>
                            <h1 class="infohero__title">Dejan
                                <span>Djurdjev</span>
                            </h1>
                            <span id="typed-text"></span>
                            <span class="cursor blink">&nbsp;</span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center order-0 order-lg-1 mb-5 mb-lg-0">
                        <div class="heroimg">
                            <img src="./asset/hero/1.jpg" alt="poto" class="img-fluid heroimg__poto" />
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,128L60,149.3C120,171,240,213,360,192C480,171,600,85,720,85.3C840,85,960,171,1080,197.3C1200,224,1320,192,1380,176L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
              </svg>
        </div>
        <!-- end section hero -->
        <!-- about section -->
        <div id="aboutsection" class="sectionblock">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center text-lg-left">
                        <div class="abouthero">
                            <h3>Dejan Djurdjev</h3>
                        </div>
                    </div>
                    <div class="col-lg-8 pl-lg-5 text-center text-lg-left">
                        <div class="infoabout">
                            <p class="infoabout__title">
                            Writing code to create new applications or improve existing applications by adding new features or fixing bugs. Reviewing code written by other team members to ensure it meets quality standards.
                             Testing new applications to ensure they function as intended and meet industry standards for quality. Cooperation with other members of a development team, including software engineers, quality assurance engineers, project managers, and lead programmers.
                            </p>
                            <div class="row  text-center text-lg-left">
                                <div class="col-lg-6">
                                    <ul class="infoabout__list">
                                        <li>
                                            <div class="infoabout__wrap">
                                                <span class="mt-4 mb-2 d-block infoabout__title">FULL NAME</span>
                                                <p>
                                                    Dejan Djurdjev
                                                </p>
                                            </div>
                                        </li>
                                       
                                        <li>
                                            <div class="infoabout__wrap">
                                                <span class="mt-4 mb-2 d-block infoabout__title">PHONE NUMBER</span>
                                                <p>
                                                    +381 69 606557
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="infoabout__list">
                                        <li>
                                            <div class="infoabout__wrap">
                                                <span class="mt-4 mb-2 d-block infoabout__title">EMAIL ADDRESS</span>
                                                <p>
                                                    dekidjurdjev@gmail.com
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="infoabout__wrap">
                                            <a href="CV_Dejan_Djurdjev.pdf" download class="btn linkbtn aboutlink mt-4">
                                                Download CV
                                            </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                           
                        </div>
                    </div>
                   <!-- <div class="col-lg-12 mt-5 mb-4 pt-5">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="counterwrap">
                                    <p class="counterwrap__counternum"><span class="counterwrap__counter" data-Speed="5000">10</span><span class="icon">+</span></p>
                                    <p>Projects completed
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="counterwrap">
                                    <p class="counterwrap__counternum"><span class="counterwrap__counter" data-Speed="5000">3</span></p>
                                    <p>Winning Awards
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="counterwrap">
                                    <p class="counterwrap__counternum"><span class="counterwrap__counter" data-Speed="5000">100</span><span class="icon">+</span></p>
                                    <p>Happy Clients
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="counterwrap">
                                    <p class="counterwrap__counternum"><span class="counterwrap__counter" data-Speed="5000">10</span></p>
                                    <p>On Projects
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>   -->
                </div>
            </div>

        </div>
        <!-- end about -->
        <!-- service section -->
        <div id="servicesection" class="sectionblock">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,186.7C480,192,600,160,720,138.7C840,117,960,107,1080,117.3C1200,128,1320,160,1380,176L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
              </svg>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="sliderservice" class="sliderservice__contentinner keen-slider">
                            <div class="wrapservice keen-slider__slide text-center text-lg-left">
                                <i class="fas fa-drafting-compass"></i>
                                <h3 class="mt-3 wrapservice__title"> Web Design</h3>
                                <p>Web site design, organization of pages within the site. Creating the HTML code that realizes it and the CSS code that stylizes it all.</p>
                            </div>
                            <div class="wrapservice keen-slider__slide text-center text-lg-left">
                                <i class="fas fa-database"></i>
                                <h3 class="mt-3 wrapservice__title">MySQL</h3>
                                <p>Designing and creating databases. Content maintenance, query and data optimization.</p>
                            </div>
                            <div class="wrapservice keen-slider__slide text-center text-lg-left">
                                <i class="fa-brands fa-laravel"></i>
                                <h3 class="mt-3 wrapservice__title"> Laravel</h3>
                                <p>Using Laravel, the most popular PHP framework, for quick and easy web site creation.</p>
                            </div>
                            <div class="wrapservice keen-slider__slide text-center text-lg-left">
                                <i class="fa-brands fa-php"></i>
                                <h3 class="mt-3 wrapservice__title"> PHP</h3>
                                <p>Working with PHP server side language that communicates with databases. Creation of dynamic web sites.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,197.3C480,213,600,203,720,186.7C840,171,960,149,1080,160C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </div>
        <!-- end service section -->
        <!-- portfolio section -->
        <div id="portfoliosection" class="sectionblock">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- filter portfolio -->
                        <div class="warpfilter text-left">
                            <h3 class="contactdetail__title mb-4">My works</h3>
                             <ul id="filterwrap" class="warpfilter__filter justify-content-left text-center text-lg-left">
                              <!--  <li data-group="all" class="active">All</li>
                                <li data-group="web">Web Design</li>
                                <li data-group="branding">Branding</li> -->
                            </ul>
                        </div>
                        <!-- end filter portfolio -->
                        <div id="porfoliowarp" class="grid-gutter-md grid-col-3">
                            <!--  PORFOLIO ITEM -->
                            <div class="porfoliowarp__item" data-groups='["branding"]'>
                                <a class="porfoliowarp__portolink glightbox" data-glightbox="type: image" href="./asset/portfolio/1.jpg">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    <div class="porfoliowarp__content">
                                        <a href="https://dejandjurdjev.com/furniture/index.php" target="_blank">
                                            <img src="./asset/portfolio/furniture.png" alt="" style="max-width: 100%; height: 280px; border: 1px solid #cccccc; border-radius: 5px;">
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <!-- END PORTFOLIO ITEM -->
                            <!--  PORFOLIO ITEM -->
                            <div class="porfoliowarp__item" data-groups='["branding"]'>
                                <a class="porfoliowarp__portolink glightbox" data-glightbox="type: image" href="./asset/portfolio/2.jpg">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    <div class="porfoliowarp__content">
                                    <img src="./asset/portfolio/furniture.png" alt="" style="max-width: 100%; height: 280px; border: 1px solid #cccccc; border-radius: 5px;">
                                    </div>
                                </a>
                            </div>
                            <!-- END PORTFOLIO ITEM -->
                            <!--  PORFOLIO ITEM -->
                            <div class="porfoliowarp__item" data-groups='["web"]'>
                                <a class="porfoliowarp__portolink glightboxvideo" data-glightbox="type: video" href="https://www.youtube.com/watch?v=mqy98hcMV9w">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    <div class="porfoliowarp__content">
                                    <img src="./asset/portfolio/furniture.png" alt="" style="max-width: 100%; height: 280px; border: 1px solid #cccccc; border-radius: 5px;">
                                    </div>
                                </a>
                            </div>
                            <!-- END PORTFOLIO ITEM -->
                           
                           
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- end portfolio section -->
        <!-- contact section -->
        <div id="contactsection" class="sectionblock">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,186.7C480,192,600,160,720,138.7C840,117,960,107,1080,117.3C1200,128,1320,160,1380,176L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
              </svg>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-lg-5">
                        <div class="contactdetail">
                            <h3 class="contactdetail__title mb-4">
                                Let's get intouch
                            </h3>
                            <p>I am available by e-mail or by phone. You can also use my quick contact form to ask a question about my services and projects I'm working on.</p>
                            <ul class="contactdetail__list">
                                <li>
                                    <span class="contactdetail__span">
                                        Borcanskih Zrtava 26,Belgrade
                                     </span>
                                </li>
                                <li>
                                    <span class="contactdetail__span">
                                        +381 69 606557
                                    </span>
                                </li>
                                <li>
                                    <span class="contactdetail__span">
                                        dekidjurdjev@gmail.com
                                    </span>
                                </li>
                            </ul>
                            <ul class="contactdetail__sosmed">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-keyboard"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contactform">
                            <!-- form contact -->
                            <form method="post" action="javascript:void(0);" id="postComment" class="contactform" novalidate="novalidate">
                                <!-- input contact wrap -->
                                <div class="contactform__form-group row">
                                    <div class="col-lg-12 pt-4">
                                        <label for="name" class="pb-2 ">Input your name<em class="required">*</em></label>
                                        <input type="text" id="user" value="" class="contactform__inputtext input-control " placeholder="Your name" name="name" data-name="name" />
                                    </div>
                                    <!-- input contact wrap -->
                                    <div class="col-lg-12 pt-4">
                                        <label for="email" class="pb-2 ">Input your mail<em class="required">*</em></label>
                                        <input type="email" id="email" class="contactform__inputtext input-control " placeholder="Your email address" name="email" data-name="email" />
                                    </div>
                                    <!-- input contact wrap -->
                                    <div class="col-lg-12 pt-4">
                                        <label for="comment" class="pb-2">Input your message<em class="required">*</em></label>
                                        <textarea class="contactform__comentarea input-control" id="comment" placeholder="Your comment" name="message" data-name="comment"></textarea>
                                        <div class="text-danger">
                                        </div>
                                        <button name="submit" class="btn mt-5  contactform__submitbuton linkbtn mt-5 mb-3" type="submit">Submit now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact section -->
    </main>
    <!-- end main wrap -->
    <!-- footer section -->
    <footer id="footerwrap" class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center footwrap">
                    <p><span class="years"> </span> BY DEJAN DJURDJEV</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer section-->
    <!-- keen slider -->
    <script src="./javascript/vendor/keen-slider.js"></script>
    <!-- glightbox -->
    <script src="./javascript/vendor/glightbox.js"></script>
    <!-- shufle -->
    <script src="./javascript/vendor/shufle.js"></script>
    <!-- script -->
    <script src="./javascript/main.js"></script>
    <script src="javascript/message.js"></script>
</body>

</html>