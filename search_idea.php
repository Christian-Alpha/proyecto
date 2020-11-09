<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SEARCH IDEA</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/tooplate-style.css">

    <script>
        var renderPage = true;

        if (navigator.userAgent.indexOf('MSIE') !== -1 ||
            navigator.appVersion.indexOf('Trident/') > 0) {
            alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
            renderPage = false;
        }
    </script>
</head>

<body>

    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>

        <div class="container-fluid tm-main">
            <div class="row tm-main-row">
                <!--COMIENZA MENU-->
                <div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

                    <button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

                    <div class="inner">
                        <nav id="tmMainNav" class="tm-main-nav">
                          
                                <li>
                                    <a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="pag8.jpeg" data-page="#tm-section-1">
                                        <i class="fas fa-home tm-nav-fa-icon"></i>
                                        <span>¿Quienes somos?</span>
                                    </a>
                                </li>

                                
                                <li>
                                    <a href="#daidea" id="tmNavLink2" class="scrolly" data-bg-img="orange.jpg" data-page="#tm-section-2" data-page-type="carousel">
                                     
                                        <i class="  fas fa-comments tm-nav-fa-icon"></i>
                                        <span>Generador de ideas</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="#miraidea" class="scrolly" data-bg-img="blue.jpeg" data-page="#tm-section-3">
                                        <i class="fas fa-users tm-nav-fa-icon"></i>
                                        <span>Ideas que se han generado</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#dona" class="scrolly" data-bg-img="black.jpg" data-page="#tm-section-4">
                                        <i class="fas fa-map tm-nav-fa-icon"></i>
                                        <span>Haz una donación</span>
                                    </a>
                                </li>

                    </div>
                </div>

                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

                    <section id="tm-section-1" class="tm-section">
                        <div class="ml-auto">
                            <header class="mb-4">
                        
                            </header>
                            <center>
                                <p class="mb-5 tm-font-big">Somos un sitio en cual, usuarios de diferentes partes del mundo pueden opinar o dar idea sobre un tema dirigido a los objetivos de desarrollo sostenible (ODS), así como también mirar que avances e ideas hay, con el fin de llevar a cabo un proyecto, también podrán apoyar dichas ideas haciendo donaciones.</p>
                                <a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Conocer más...</a>
                                <!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
                            </center>

                        </div>
                    </section>



                    <section id="tm-section-2" class="tm-section tm-section-carousel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                                <div class="media tm-bg-transparent-black tm-border-white">
                                    <div class="media-body">
                                        <center>
                                            <h2>CÓDIGO:101</h2>
                                        </center>
                                        <h3>2.3 mil millones</h3>
                                        <p>En todo el mundo, 2.300 millones de personas carecen de acceso a saneamiento básico y casi 800 millones de personas carecen de acceso a agua potable.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                                <div class="media tm-bg-transparent-black tm-border-white">
                                    <div class="media-body">
                                        <center>
                                            <h2>CÓDIGO:102</h2>
                                        </center>
                                        <h3>2.3 millones</h3>
                                        <p>Los sectores de energía renovable actualmente emplean a más de 2,3 millones de personas; el número podría llegar a 20 millones para 2030. 
                                                                                           </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <center>
                            <a href="dar_idea_search.php" class="btn tm-btn tm-font-big">Quiero dar una idea</a>
                        </center>


                    </section>



                    <section id="tm-section-3" class="tm-section">

                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                                <div class="media tm-bg-transparent-black tm-border-white">
                                    <div class="media-body">
                                        <h3>Ideas que se han compartido</h3>
                                        <p>Hecha un vistazo a ideas, las cuales diferentes usuarios de todo el mundo han aportado una opiniòn.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <center>
                            <a href="ver_idea_search.php" class="btn tm-btn tm-font-big">Quiero ver ideas</a>
                        </center>

                    </section>


                    <section id="tm-section-4" class="tm-section">


                        <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                            <div class="media tm-bg-transparent-black tm-border-white">
                                <div class="media-body">
                                    <h3>¡APOYA!</h3>
                                    <p>Con tu donación, podemos cambiar el rumbo del desarrollo mundial.
                                        <?php
echo "<br>";
?>
                                        Juntos, podemos construir un futuro mejor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <center>
                            <a href="donar_search.php" class="btn tm-btn tm-font-big">Quiero donar</a>
                        </center>
                    </section>
                </div>
            </div>

            <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
            <script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->

            <script>
                var sidebarVisible = false;
                var currentPageID = "#tm-section-1";

                function setupCarousel() {
                    if ($('#tm-section-2').css('display') == "none") {} else { // If current page is Carousel page, set up the Carousel.
                        var slider = $('.tm-img-slider');
                        var windowWidth = $(window).width();
                        if (slider.hasClass('slick-initialized')) {
                            slider.slick('destroy');
                        }

                        if (windowWidth < 640) {
                            slider.slick({
                                dots: true,
                                infinite: false,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            });
                        } else if (windowWidth < 992) {
                            slider.slick({
                                dots: true,
                                infinite: false,
                                slidesToShow: 2,
                                slidesToScroll: 1
                            });
                        } else {
                            // Slick carousel
                            slider.slick({
                                dots: true,
                                infinite: false,
                                slidesToShow: 3,
                                slidesToScroll: 2
                            });
                        }

                        // Init Magnific Popup
                        $('.tm-img-slider').magnificPopup({
                            delegate: 'a', // child items selector, by clicking on it popup will open
                            type: 'image',
                            gallery: {
                                enabled: true
                            }
                            // other options
                        });
                    }
                }

                // Setup Nav
                function setupNav() {
                    // Add Event Listener to each Nav item
                    $(".tm-main-nav a").click(function(e) {
                        e.preventDefault();

                        var currentNavItem = $(this);
                        changePage(currentNavItem);

                        setupCarousel();
                        setupFooter();

                        // Hide the nav on mobile
                        $("#tmSideBar").removeClass("show");
                    });
                }

                function changePage(currentNavItem) {
                    // Update Nav items
                    $(".tm-main-nav a").removeClass("active");
                    currentNavItem.addClass("active");

                    $(currentPageID).hide();

                    currentPageID = currentNavItem.data("page");
                    $(currentPageID).fadeIn(1000);

                    var bgImg = currentNavItem.data("bgImg");
                    $.backstretch("img/" + bgImg);
                }

                // Setup Nav Toggle Button
                function setupNavToggle() {

                    $("#tmMainNavToggle").on("click", function() {
                        $(".sidebar").toggleClass("show");
                    });
                }

                function setupFooter() {
                    var padding = 100;
                    var footerPadding = 40;
                    var mainContent = $("section" + currentPageID);
                    var mainContentHeight = mainContent.outerHeight(true);
                    var footer = $(".footer-link");
                    var footerHeight = footer.outerHeight(true);
                    var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
                    var windowHeight = $(window).height();

                    if (totalPageHeight > windowHeight) {
                        $(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
                        footer.css("bottom", footerHeight + "px");
                    } else {
                        $(".tm-content").css("margin-bottom", "0");
                        footer.css("bottom", "20px");
                    }
                }
                $(window).on("load", function() {
                    if (renderPage) {
                        // Remove loader
                        $('body').addClass('loaded');
                        var allPages = $(".tm-section");
                        var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
                        if (linkToAnotherPage != null) {
                            linkToAnotherPage.on("click", function() {
                                var navItemToHighlight = linkToAnotherPage.data("navLink");
                                $("a" + navItemToHighlight).click();
                            });
                        }
                        allPages.hide();
                        $("#tm-section-1").fadeIn();
                        var bgImg = $("#tmNavLink1").data("bgImg");
                        $.backstretch("img/" + bgImg, {
                            fade: 500
                        });
                        setupCarousel();
                        setupNav();
                        setupNavToggle();
                        setupFooter();
                        $(window).resize(function() {
                            setupCarousel();
                            setupFooter();
                        });
                    }
                });
            </script>
