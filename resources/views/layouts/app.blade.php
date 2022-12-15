<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->


    <!-- BEGIN THEME STYLES -->
    <link href="/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/demos/default/css/themes/blue1.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->

    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">

<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-topbar c-topbar-light">
        <div class="container">
            <!-- BEGIN: INLINE NAV -->
            <nav class="c-top-menu c-pull-left">
                <ul class="c-icons c-theme-ul">
                    <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                    <li class="hide"><span>Phone: +99890345677</span></li>
                </ul>
            </nav>
            <!-- END: INLINE NAV -->
            <!-- BEGIN: INLINE NAV -->
            <nav class="c-top-menu c-pull-right">
                <ul class="c-links c-theme-ul">
                    <li><a href="#">Devenir partenaire</a></li>
                    <li class="c-divider">|</li>
                    <li><a href="#">Espace client</a></li>
                    <li class="c-divider">|</li>
                    <li><a href="#">Webmail</a></li>
                    <li class="c-divider">|</li>
                    <li><a href="#">Centre d'aide</a></li>
                </ul>
                <ul class="c-ext c-theme-ul">
                    <li class="c-lang dropdown c-last">
                        <a href="#">en</a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li class="active"><a href="#">English</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Espaniol</a></li>
                            <li><a href="#">Portugise</a></li>
                        </ul>
                    </li>
                    <li class="c-search hide">
                        <!-- BEGIN: QUICK SEARCH -->
                        <form action="#">
                            <input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
                            <i class="fa fa-search"></i>
                        </form>
                        <!-- END: QUICK SEARCH -->
                    </li>
                </ul>
            </nav>
            <!-- END: INLINE NAV -->
        </div>
    </div>
    <div class="c-navbar c-bg-info">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="index.html" class="c-logo">
                        <img src="../../assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo">
                        <img src="../../assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo-inverse">
                        <img src="../../assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo">
                    </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    <button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
                    </button>
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Home<span class="c-arrow c-toggler"></span></a>


                            <div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Home Samples</h3>
                                            </li>
                                            <li>
                                                <a href="../corporate_1/index.html">NEW Corporate Demo 1</a>
                                            </li>
                                            <li>
                                                <a href="index.html">Home Version 1</a>
                                            </li>
                                            <li>
                                                <a href="home-2.html">Home Version 2</a>
                                            </li>
                                            <li>
                                                <a href="home-3.html">Home Version 3</a>
                                            </li>
                                            <li>
                                                <a href="home-4.html">Home Version 4</a>
                                            </li>
                                            <li>
                                                <a href="home-5.html">Home Version 5</a>
                                            </li>
                                            <li>
                                                <a href="home-6.html">Home Version 6</a>
                                            </li>
                                            <li>
                                                <a href="home-7.html">Home Version 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Home Samples</h3>
                                            </li>
                                            <li>
                                                <a href="home-8.html">Home Version 8</a>
                                            </li>
                                            <li>
                                                <a href="home-9.html">Home Version 9</a>
                                            </li>
                                            <li>
                                                <a href="home-10.html">Home Version 10</a>
                                            </li>
                                            <li>
                                                <a href="home-11.html">Home Version 11</a>
                                            </li>
                                            <li>
                                                <a href="home-12.html">Home Version 12</a>
                                            </li>
                                            <li>
                                                <a href="home-13.html">Home Version 13</a>
                                            </li>
                                            <li>
                                                <a href="home-14.html">Home Version 14</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Onepage Samples</h3>
                                            </li>
                                            <li>
                                                <a href="../agency_1/index.html" target="_blank">New Agency Onepage Demo</a>
                                            </li>
                                            <li>
                                                <a href="onepage-1.html" target="_blank">Onepage Version 1</a>
                                            </li>
                                            <li>
                                                <a href="onepage-2.html" target="_blank">Onepage Version 2</a>
                                            </li>
                                            <li>
                                                <a href="onepage-3.html" target="_blank">Onepage Version 3</a>
                                            </li>
                                            <li>
                                                <a href="onepage-4.html" target="_blank">Onepage Version 4</a>
                                            </li>
                                            <li>
                                                <a href="onepage-5.html" target="_blank">Onepage Version 5</a>
                                            </li>
                                            <li>
                                                <a href="onepage-6.html" target="_blank">Onepage Version 6</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Onepage Samples</h3>
                                            </li>
                                            <li>
                                                <a href="onepage-7.html" target="_blank">Onepage Version 7</a>
                                            </li>
                                            <li>
                                                <a href="onepage-8.html" target="_blank">Onepage Version 8</a>
                                            </li>
                                            <li>
                                                <a href="onepage-9.html" target="_blank">Onepage Version 9</a>
                                            </li>
                                            <li>
                                                <a href="onepage-10.html" target="_blank">Onepage Version 10</a>
                                            </li>
                                            <li>
                                                <a href="onepage-11.html" target="_blank">Onepage Version 11</a>
                                            </li>
                                            <li>
                                                <a href="onepage-12.html" target="_blank">Onepage Version 12</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="c-menu-type-classic">
                            <a href="javascript:;" class="c-link dropdown-toggle">Features<span class="c-arrow c-toggler"></span></a>


                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Headers<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="home-header-1.html">Home Header v1</a>
                                        </li>
                                        <li>
                                            <a href="home-header-1-ext.html">Home Header v1 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-2.html">Home Header v2</a>
                                        </li>
                                        <li>
                                            <a href="home-header-2-ext.html">Home Header v2 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-3.html">Home Header v3</a>
                                        </li>
                                        <li>
                                            <a href="home-header-4.html">Home Header v4</a>
                                        </li>
                                        <li>
                                            <a href="home-header-4-ext.html">Home Header v4 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-5.html">Home Header v5</a>
                                        </li>
                                        <li>
                                            <a href="home-header-5-ext.html">Home Header v5 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-6.html">Home Header v6</a>
                                        </li>
                                        <li>
                                            <a href="home-header-6-ext.html">Home Header v6 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-7.html">Home Header v7</a>
                                        </li>
                                        <li>
                                            <a href="home-header-8.html">Home Header v8</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-1.html">Inner Header v1</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-1-ext.html">Inner Header v1 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-2.html">Inner Header v2</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-2-ext.html">Inner Header v2 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-3.html">Inner Header v3</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-4.html">Inner Header v4</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-5.html">Inner Header v5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Sidebar Menu<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="sidebar-menu-1.html">Sidebar Menu v1</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-2.html">Sidebar Menu v2</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-static.html">Expanded Static Sidebar Menu</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-right.html">Right Sidebar Menu</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-fluid.html">Sidebar Menu In Fluid Layout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Footers<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="footer-1.html#footer">Footer 1</a>
                                        </li>
                                        <li>
                                            <a href="footer-2.html#footer">Footer 2</a>
                                        </li>
                                        <li>
                                            <a href="footer-3.html#footer">Footer 3</a>
                                        </li>
                                        <li>
                                            <a href="footer-4.html#footer">Footer 4</a>
                                        </li>
                                        <li>
                                            <a href="footer-5.html#footer">Footer 5</a>
                                        </li>
                                        <li>
                                            <a href="footer-6.html#footer">Footer 6</a>
                                        </li>
                                        <li>
                                            <a href="footer-7.html#footer">Footer 7</a>
                                        </li>
                                        <li>
                                            <a href="footer-8.html#footer">Footer 8</a>
                                        </li>
                                        <li>
                                            <a href="footer-9.html#footer">Footer 9</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Breadcrumbs<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="breadcrumbs-default.html">Breadcrumbs - Default</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-subtitle.html">Breadcrumbs - Sub Title</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-1.html">Breadcrumbs - Bg Image V1</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-2.html">Breadcrumbs - Bg Image V2</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-3.html">Breadcrumbs - Bg Image V3</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-4.html">Breadcrumbs - Bg Image V4</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-5.html">Breadcrumbs - Bg Image V5</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-6.html">Breadcrumbs - Bg Image V6</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-7.html">Breadcrumbs - Bg Image V7</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-8.html">Breadcrumbs - Bg Image V8</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-9.html">Breadcrumbs - Bg Image V9</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-10.html">Breadcrumbs - Bg Image V10</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Cookies Notification Bar<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="component-cookies-1.html">Full Width - Top</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-2.html">Full Width - Bottom</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-3.html">Boxed - Dark Square</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-4.html">Boxed - Theme Color Rounded</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-5.html">Boxed - Aligned Top Left</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-6.html">Boxed - Aligned Top Right</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-7.html">Boxed - Aligned Bottom Left</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-8.html">Boxed - Aligned Bottom Right</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="component-smooth-scroll.html">Smooth Scroll Links</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Mega Menu<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="megamenu-light.html">Mega Menu - Light</a>
                                        </li>
                                        <li>
                                            <a href="megamenu-dark.html">Mega Menu - Dark</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="page-extended-portfolio.html">Multi Level Menu<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Example Sub Menu<span
                                                    class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-left">
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">Example Sub Menu<span
                                                            class="c-arrow c-toggler"></span></a>
                                                    <ul class="dropdown-menu c-pull-left">
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Pages<span class="c-arrow c-toggler"></span></a>



                            <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Page Samples 1</h3>
                                        </li>
                                        <li>
                                            <a href="page-about-1.html">About Us 1</a>
                                        </li>
                                        <li>
                                            <a href="page-about-2.html">About Us 2</a>
                                        </li>
                                        <li>
                                            <a href="page-about-3.html">About Us 3</a>
                                        </li>
                                        <li>
                                            <a href="page-about-4.html">About Us 4</a>
                                        </li>
                                        <li>
                                            <a href="page-team.html">Meet The Team</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Page Samples 2</h3>
                                        </li>
                                        <li>
                                            <a href="page-contact-1.html">Contact Us 1</a>
                                        </li>
                                        <li>
                                            <a href="page-contact-2.html">Contact Us 2</a>
                                        </li>
                                        <li>
                                            <a href="page-contact-3.html">Contact Us 3</a>
                                        </li>
                                        <li>
                                            <a href="page-faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page-faq-2.html">FAQ 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Gallery Pages</h3>
                                        </li>
                                        <li>
                                            <a href="page-product-launch.html">Product Launch</a>
                                        </li>
                                        <li>
                                            <a href="page-lightbox-gallery.html">Lightbox Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page-fullwidth-gallery.html">Full Width Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page-masonry-gallery.html">Masonry Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page-index-gallery.html">Gallery Index</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Portfolio Pages</h3>
                                        </li>
                                        <li>
                                            <a href="page-4col-portfolio.html">4 Columns Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="page-2col-portfolio.html">2 Columns Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="page-masonry-portfolio.html">Masonry Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="page-extended-portfolio.html">Extended Portfolio</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Blog Pages</h3>
                                        </li>
                                        <li>
                                            <a href="page-blog-list.html">Blog List View</a>
                                        </li>
                                        <li>
                                            <a href="page-blog-grid.html">Blog Grid View</a>
                                        </li>
                                        <li>
                                            <a href="page-blog-post.html">Blog Single Post</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Shop<span class="c-arrow c-toggler"></span></a>



                            <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 1</h3>
                                        </li>
                                        <li>
                                            <a href="shop-home-1.html" target="_blank">Shop Home 1</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-2.html">Shop Home 2</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-3.html">Shop Home 3</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-4.html">Shop Home 4</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-5.html">Shop Home 5</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-6.html">Shop Home 6</a>
                                        </li>
                                        <li class="c-active">
                                            <a href="shop-home-7.html">Shop Home 7</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-8.html" target="_blank">Shop Home 8</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 2</h3>
                                        </li>
                                        <li>
                                            <a href="shop-product-list.html">Product List</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-grid.html">Product Grid</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-search.html">Product Search</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details.html">Product Details 1</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details-2.html">Product Details 2</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details-3.html">Product Details 3</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details-4.html">Product Details 4</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-comparison.html">Product Comparison</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 3</h3>
                                        </li>
                                        <li>
                                            <a href="shop-product-wishlist.html">Wish List</a>
                                        </li>
                                        <li>
                                            <a href="shop-customer-account.html">Customer Login/Register</a>
                                        </li>
                                        <li>
                                            <a href="shop-customer-dashboard.html">Customer Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="shop-order-history.html">Order History</a>
                                        </li>
                                        <li>
                                            <a href="shop-order-history-2.html">Order History 2</a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="shop-cart-empty.html">Shopping Cart(empty)</a>
                                        </li>
                                        <li>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 4</h3>
                                        </li>
                                        <li>
                                            <a href="shop-checkout-complete.html">Checkout Complete</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-1.html">Shop Components 1</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-2.html">Shop Components 2</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-3.html">Shop Components 3</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-4.html">Shop Components 4</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-5.html">Shop Components 5</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-6.html">Shop Components 6</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-7.html">Shop Components 7</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Components<span class="c-arrow c-toggler"></span></a>


                            <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                            <div class="dropdown-menu c-menu-type-mega c-visible-desktop c-pull-right c-menu-type-fullwidth" style="min-width: auto">
                                <ul class="nav nav-tabs c-theme-nav">
                                    <li class="active">
                                        <a href="#megamenu_jango_components"  data-toggle="tab">Jango Components</a>
                                    </li>
                                    <li>
                                        <a href="#megamenu_base_components"  data-toggle="tab">Base Components</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="megamenu_jango_components">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabbed-contents.html">Tabbed Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-1.html">Parallax Blocks 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-2.html">Parallax Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-3.html">Parallax Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features.html">Feature Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-2.html">Feature Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-3.html">Feature Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-latest-works.html">Latest Works</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-latest-items.html">Latest Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tiles.html">Tiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-services.html">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blog-elements.html">Blog Elements</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-counters.html">Counters</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-bars.html">Engage Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope.html">Isotope Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope-grid.html">Isotope Grid</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials.html">Testimonials</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials-2.html">Testimonials 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-clients.html">Clients</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-abouts.html">About Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-dividers.html">Dividers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-steps.html">Steps</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-app-showcase.html">App Showcase</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-team.html">Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-headings.html">Headings</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-accordions.html">Accordion Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="megamenu_base_components">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-lists.html">Lists</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blockquotes.html">Blockquotes</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-navs.html">Navigations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-simpleline-icons.html">Simple Line Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-custom-icons.html">Custom Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-business-custom-icons.html">Custom Business Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-social-icons.html">Social Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-media-embeds.html">Media Embeds</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-labels-badges.html">Labels & Badges</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-colors.html">UI Colors</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-buttons.html">Buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-form-controls.html">Form Controls</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tables.html">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-modals.html">Modals</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabs.html">Tabs</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-paginations.html">Paginations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-panels.html">Panels</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars.html">Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-alerts.html">Alerts</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                            <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
                            <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Jango Components<span class="c-arrow c-toggler"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabbed-contents.html">Tabbed Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-1.html">Parallax Blocks 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-2.html">Parallax Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-3.html">Parallax Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features.html">Feature Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-2.html">Feature Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-3.html">Feature Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-latest-works.html">Latest Works</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-latest-items.html">Latest Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tiles.html">Tiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-services.html">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blog-elements.html">Blog Elements</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-counters.html">Counters</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-bars.html">Engage Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope.html">Isotope Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope-grid.html">Isotope Grid</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials.html">Testimonials</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials-2.html">Testimonials 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-clients.html">Clients</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-abouts.html">About Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-dividers.html">Dividers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-steps.html">Steps</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-app-showcase.html">App Showcase</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-team.html">Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-headings.html">Headings</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-accordions.html">Accordion Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Base Components<span class="c-arrow c-toggler"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-lists.html">Lists</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blockquotes.html">Blockquotes</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-navs.html">Navigations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-simpleline-icons.html">Simple Line Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-custom-icons.html">Custom Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-business-custom-icons.html">Custom Business Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-social-icons.html">Social Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-media-embeds.html">Media Embeds</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-labels-badges.html">Labels & Badges</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-colors.html">UI Colors</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-buttons.html">Buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-form-controls.html">Form Controls</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tables.html">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-modals.html">Modals</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabs.html">Tabs</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-paginations.html">Paginations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-panels.html">Panels</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars.html">Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-alerts.html">Alerts</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->

                        </li>


                        <li class="c-search-toggler-wrapper">
                            <a  href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
                        </li>

                        <li class="c-cart-toggler-wrapper">
                            <a  href="#" class="c-btn-icon c-cart-toggler"><i class="icon-handbag c-cart-icon"></i> <span class="c-cart-number c-theme-bg">2</span></a>
                        </li>

                        <li>
                            <a href="#" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i> Sign In</a>
                        </li>

                        <li class="c-quick-sidebar-toggler-wrapper">
                            <a href="#" class="c-quick-sidebar-toggler">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
            <!-- BEGIN: CART MENU -->
            <div class="c-cart-menu">
                <div class="c-cart-menu-title">
                    <p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
                    <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
                </div>
                <ul class="c-cart-menu-items">
                    <li>
                        <div class="c-cart-menu-close">
                            <a href="#" class="c-theme-link">×</a>
                        </div>
                        <img src="../../assets/base/img/content/shop2/24.jpg"/>
                        <div class="c-cart-menu-content">
                            <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                            <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
                        </div>
                    </li>
                    <li>
                        <div class="c-cart-menu-close">
                            <a href="#" class="c-theme-link">×</a>
                        </div>
                        <img src="../../assets/base/img/content/shop2/12.jpg"/>
                        <div class="c-cart-menu-content">
                            <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                            <a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
                        </div>
                    </li>
                </ul>
                <div class="c-cart-menu-footer">
                    <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                    <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
                </div>
            </div>
            <!-- END: CART MENU --><!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
</header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->

<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                <p>To recover your password please fill in your email address</p>
                <form>
                    <div class="form-group">
                        <label for="forget-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                <p>Please fill in below form to create an account with us</p>
                <form>
                    <div class="form-group">
                        <label for="signup-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="signup-username" class="hide">Username</label>
                        <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="signup-fullname" class="hide">Fullname</label>
                        <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                        <label for="signup-country" class="hide">Country</label>
                        <select class="form-control input-lg c-square" id="signup-country">
                            <option value="1">Country</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/SIGNUP-FORM -->
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                <p>Let's make today a great day!</p>
                <form>
                    <div class="form-group">
                        <label for="login-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="c-checkbox">
                            <input type="checkbox" id="login-rememberme" class="c-check">
                            <label for="login-rememberme" class="c-font-thin c-font-17">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span>
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                        <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                    </div>
                    <div class="clearfix">
                        <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                            <span>or signup with</span>
                        </div>
                        <ul class="c-content-list-adjusted">
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-google">
                                    <i class="fa fa-google"></i>
                                    Google
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/LOGIN-FORM -->

<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<nav class="c-layout-quick-sidebar">
    <div class="c-header">
        <button type="button" class="c-link c-close">
            <i class="icon-login"></i>
        </button>
    </div>
    <div class="c-content">
        <div class="c-section">
            <h3>JANGO DEMOS</h3>
            <div class="c-settings c-demos c-bs-grid-reset-space">
                <div class="row">
                    <div class="col-md-12">
                        <a href="../default/index.html" class="c-demo-container c-demo-img-lg">
                            <div class="c-demo-thumb active">
                                <img src="../../assets/base/img/content/quick-sidebar/default.jpg" class="c-demo-thumb-img"/>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="../corporate_1/index.html" class="c-demo-container">
                            <div class="c-demo-thumb  c-thumb-left">
                                <img src="../../assets/base/img/content/quick-sidebar/corporate_1.jpg" class="c-demo-thumb-img"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="../agency_1/index.html" class="c-demo-container">
                            <div class="c-demo-thumb  c-thumb-right">
                                <img src="../../assets/base/img/content/quick-sidebar/corporate_1-onepage.jpg" class="c-demo-thumb-img"/>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-section">
            <h3>Theme Colors</h3>
            <div class="c-settings">

                <span class="c-color c-default c-active" data-color="default"></span>

                <span class="c-color c-green1" data-color="green1"></span>
                <span class="c-color c-green2" data-color="green2"></span>
                <span class="c-color c-green3" data-color="green3"></span>

                <span class="c-color c-yellow1" data-color="yellow1"></span>
                <span class="c-color c-yellow2" data-color="yellow2"></span>
                <span class="c-color c-yellow3" data-color="yellow3"></span>

                <span class="c-color c-red1" data-color="red1"></span>
                <span class="c-color c-red2" data-color="red2"></span>
                <span class="c-color c-red3" data-color="red3"></span>

                <span class="c-color c-purple1" data-color="purple1"></span>
                <span class="c-color c-purple2" data-color="purple2"></span>
                <span class="c-color c-purple3" data-color="purple3"></span>

                <span class="c-color c-blue1" data-color="blue1"></span>
                <span class="c-color c-blue2" data-color="blue2"></span>
                <span class="c-color c-blue3" data-color="blue3"></span>

                <span class="c-color c-brown1" data-color="brown1"></span>
                <span class="c-color c-brown2" data-color="brown2"></span>
                <span class="c-color c-brown3" data-color="brown3"></span>

                <span class="c-color c-dark1" data-color="dark1"></span>
                <span class="c-color c-dark2" data-color="dark2"></span>
                <span class="c-color c-dark3" data-color="dark3"></span>
            </div>
        </div>
        <div class="c-section">
            <h3>Header Type</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed"/>
                <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid"/>
            </div>
        </div>
        <div class="c-section">
            <h3>Header Mode</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed"/>
                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static"/>
            </div>
        </div>
        <div class="c-section">
            <h3>Mega Menu Style</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark"/>
                <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
            </div>
        </div>
        <div class="c-section">
            <h3>Font Style</h3>
            <div class="c-settings">
                <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default"/>
                <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
            </div>
        </div>
        <div class="c-section">
            <h3>Reading Style</h3>
            <div class="c-settings">
                <a href="http://www.themehats.com/themes/jango/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>
                <a href="http://www.themehats.com/themes/jango/rtl/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase ">RTL</a>
            </div>
        </div>
    </div>
</nav><!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-6-2 -->
    <div class="c-content-box c-size-md c-overflow-hide c-bg-white c-bs-grid-reset-space c-no-padding">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content c-content-overlay">
                            <div class="c-overlay-wrapper c-overlay-padding">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 350px; background-image: url(../../assets/base/img/content/shop4/79.jpg);"></div>
                            <div class="c-overlay-border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content c-content-overlay">
                            <div class="c-overlay-wrapper c-overlay-padding">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 350px; background-image: url(../../assets/base/img/content/shop4/98.jpg);"></div>
                            <div class="c-overlay-border"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="c-content c-content-overlay">
                    <div class="c-overlay-wrapper c-overlay-padding">
                        <div class="c-overlay-content">
                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                        </div>
                    </div>
                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 700px; background-image: url(../../assets/base/img/content/shop4/14.jpg);"></div>
                    <div class="c-overlay-border"></div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/SHOPS/SHOP-6-2 -->

    <!-- BEGIN: CONTENT/ISOTOPE/GRID-3 -->
    <div class="c-content-box c-size-md c-bg-img-center" style="background-image: url(../../assets/base/img/content/backgrounds/bg-82.jpg)">
        <div class="container">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Quick Shop</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="c-content-isotope-grid c-opt-3">
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/85.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">White Sweater</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$59.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/97.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Blue Shirt</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$39.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/93.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Elegant Gown</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$99.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/20.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Red Bikini Set</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$29.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/22.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Purple Bikini</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$29.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/103.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Casual Women's Shirt</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$25.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/91.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Luxury Leather Bag</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$99.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-content-isotope-item">
                    <div class="c-content-isotope-image-container">
                        <img class="c-content-isotope-image" src="../../assets/base/img/content/shop6/42.jpg"/>
                        <div class="c-content-isotope-overlay">
                            <div class="c-content-isotope-overlay-content">
                                <h3 class="c-content-isotope-overlay-title c-font-white c-font-uppercase">Nude Sleeveless Top</h3>
                                <p class="c-content-isotope-overlay-price c-font-white c-font-bold">$19.00</p>
                                <p class="c-content-isotope-overlay-desc c-font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Cart</a>
                                <a href="javascript:;" class="c-content-isotope-overlay-btn btn c-btn-white c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/ISOTOPE/GRID-3 -->

    <!-- BEGIN: CONTENT/SHOPS/SHOP-1-6 -->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="c-content-tab-5 c-theme">
                <!-- Nav tabs -->
                <ul class="nav nav-pills c-nav-tab c-arrow" role="tablist">
                    <li role="presentation" class="active">
                        <a class="c-font-uppercase" href="#watches6" aria-controls="watches" role="tab" data-toggle="tab">Watches</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase" href="#phone6" aria-controls="phone" role="tab" data-toggle="tab">Phone</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase" href="#imac6" aria-controls="imac" role="tab" data-toggle="tab">iMac</a>
                    </li>
                    <li role="presentation">
                        <a class="c-font-uppercase" href="#accessories6" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="watches6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/69.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/70.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/79.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row c-margin-t-30">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/63.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/59.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/71.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="phone6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/63.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/59.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/71.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row c-margin-t-30">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/69.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/70.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop2/79.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="imac6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/73.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/74.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/91.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row c-margin-t-30">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/63.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/67.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/77.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="accessories6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/63.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/67.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/77.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row c-margin-t-30">
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/73.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/74.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="c-content c-content-overlay">
                                    <div class="c-overlay-wrapper c-overlay-padding">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop3/91.jpg);"></div>
                                    <div class="c-overlay-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/SHOPS/SHOP-1-6 -->

    <!-- BEGIN: CONTENT/SHOPS/SHOP-4-4 -->
    <div class="c-content-box c-no-padding c-overflow-hide c-bs-grid-reset-space">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="c-content-product-4">
                    <div class="col-md-6 col-sm-6">
                        <div class="c-wrapper">
                            <div class="c-side-image" style=" background-image: url(../../assets/base/img/content/shop5/23.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="c-content c-align-right">
                            <h3 class="c-title c-font-bold c-font-35 c-font-dark-1">iPhone 6</h3>
                            <p class="c-description c-font-20 c-font-regular">Lorem ipsum dolor sit amet, adipiscing elit coectetuer adipiscing elit adipiscing consectetuer.</p>
                            <p class="c-price c-font-60 c-font-thin c-font-dark-1">$649</p>
                            <a href="shop-product-details.html" class="btn btn-lg c-btn-dark-1 c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="c-content-product-4 c-bg-dark">
                    <div class="col-md-6 col-sm-6">
                        <div class="c-content c-align-left">
                            <h3 class="c-title c-font-bold c-font-35 c-font-white">360 Watch</h3>
                            <p class="c-description c-font-20 c-font-white">Lorem ipsum dolor sit amet, adipiscing elit coectetuer adipiscing elit adipiscing consectetuer.</p>
                            <p class="c-price c-font-60 c-font-thin c-font-white">$649</p>
                            <a href="shop-product-details.html" class="btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="c-wrapper">
                            <div class="c-side-image" style=" background-image: url(../../assets/base/img/content/shop5/32.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/SHOPS/SHOP-4-4 -->

    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-5 -->
    <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space" style="background-image: url(../../assets/base/img/content/shop-backgrounds/139.jpg)">
        <div class="container">
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-center c-font-bold">Most Popular</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-6 c-margin-b-20">
                    <div class="c-content-product-2 c-bg-white">
                        <div class="c-content-overlay">
                            <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                            <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-sm c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(../../assets/base/img/content/shop6/21.jpg);"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-17 c-font-slim">Latest Fashion</p>
                            <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 c-margin-b-20">
                    <div class="c-content-product-2 c-bg-white">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-sm c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(../../assets/base/img/content/shop6/16.jpg);"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-17 c-font-slim">New Fashion</p>
                            <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 c-margin-b-20">
                    <div class="c-content-product-2 c-bg-white">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-sm c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(../../assets/base/img/content/shop6/65.jpg);"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-17 c-font-slim">Latest Trends</p>
                            <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 c-margin-b-20">
                    <div class="c-content-product-2 c-bg-white">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-sm c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(../../assets/base/img/content/shop6/70.jpg);"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-17 c-font-slim">Modern</p>
                            <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 c-margin-b-20">
                    <div class="c-content-product-2 c-bg-white">
                        <div class="c-content-overlay">
                            <div class="c-label c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-sm c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(../../assets/base/img/content/shop6/76.jpg);"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-17 c-font-slim">Modern</p>
                            <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 c-margin-b-20">
                    <div class="c-content-product-2 c-bg-white">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-sm c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(../../assets/base/img/content/shop6/74.jpg);"></div>
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-17 c-font-slim">Modern</p>
                            <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                            </p>
                        </div>
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                            </div>
                            <div class="btn-group c-border-left c-border-top" role="group">
                                <a href="#" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/SHOPS/SHOP-2-5 -->

    <!-- BEGIN: CONTENT/SHOPS/SHOP-3-2 -->
    <div class="c-content-box c-size-lg c-no-padding c-overflow-hide c-bg-white">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="c-wrapper c-theme-bg" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-left">
                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">With Theme Color</h3>
                            <p class="c-description c-font-17 c-font-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat.</p>
                            <p class="c-description c-font-17 c-font-white">Dolor sit amet, consectetuer adipiscing elit sed diam nonummy</p>
                            <p class="c-price c-font-55 c-font-white c-font-thin">$249</p>
                            <a href="shop-product-details.html" class="btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="c-content-overlay">
                        <div class="c-overlay-wrapper">
                            <div class="c-overlay-content">
                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                            </div>
                        </div>
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url(../../assets/base/img/content/shop7/04.png);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/SHOPS/SHOP-3-2 -->

    <!-- BEGIN: CONTENT/MISC/PROMO-1-4 -->
    <div class="c-content-box c-size-lg c-bg-grey-1 c-no-bottom-padding">
        <div class="container">
            <div class="row">
                <div class="c-content-title-1 c-center c-margin-b-80">
                    <h3 class="c-font-uppercase c-font-bold">Life Should be Great Rather Than Long</h3>
                    <p class="c-font-uppercase c-font-grey-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam <br />nonummy et nibh euismod aliquam erat volutpat.</p>
                    <a href="#" class="btn btn-lg c-theme-btn c-btn-square c-font-uppercase">Purchase</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/MISC/PROMO-1-4 -->

    <!-- BEGIN: CONTENT/SHOPS/SHOP-5-2 -->
    <div class="c-content-box c-size-md c-no-bottom-padding c-overflow-hide c-bs-grid-reset-space">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold">Recent Promotions</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="c-content-product-5 c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                        <span class="c-font-thin">Watch</span><br/>Collection
                                    </h3>
                                    <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Shop Now</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 400px; background-image: url(../../assets/base/img/content/shop3/59.jpg);"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="c-content-product-5 c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                        <span class="c-font-thin">Sunglasses</span><br/>Collection
                                    </h3>
                                    <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Shop Now</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 400px; background-image: url(../../assets/base/img/content/shop3/26.jpg);"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-product-5">
                            <div class="c-bg-img-center c-center" style="height:400px;background-image: url(../../assets/base/img/content/shop3/05.jpg)">
                                <div class="c-wrapper c-center-vertical">
                                    <h3 class="c-title c-margin-tb-30 c-font-30 c-font-uppercase c-font-bold c-font-white">
                                        <span class="c-line"><span class="c-font-thin">New</span> Collection</span>
                                    </h3>
                                    <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square c-margin-t-20">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="c-content-product-5">
                    <div class="c-bg-img-center" style="height:800px;background-image: url(../../assets/base/img/content/shop3/21.jpg)">
                        <div class="c-detail c-bg-dark c-bg-opacity-2">
                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Shop Now</a>
                            <h3 class="c-title c-font-uppercase c-font-bold c-font-white c-font-90">Promo</h3>
                            <p class="c-desc c-font-white c-font-17">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam dolore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/SHOPS/SHOP-5-2 -->

    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
    <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
        <div class="container">
            <div class="c-content-title-4">
                <h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-white">Most Popular</span></h3>
            </div>
            <div class="row">
                <div data-slider="owl">
                    <div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="false" data-items="4" data-slide-speed="8000">
                        <div class="item">
                            <div class="c-content-product-2 c-bg-white c-border">
                                <div class="c-content-overlay">
                                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/18.png);"></div>
                                </div>
                                <div class="c-info">
                                    <p class="c-title c-font-18 c-font-slim">Samsung Galaxy Note 4</p>
                                    <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top" role="group">
                                        <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-product-2 c-bg-white c-border">
                                <div class="c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/27.png);"></div>
                                </div>
                                <div class="c-info">
                                    <p class="c-title c-font-18 c-font-slim">Samsung Galaxy S4</p>
                                    <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top" role="group">
                                        <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-product-2 c-bg-white c-border">
                                <div class="c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/21.png);"></div>
                                </div>
                                <div class="c-info">
                                    <p class="c-title c-font-18 c-font-slim">Apple iPhone 5</p>
                                    <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top" role="group">
                                        <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-product-2 c-bg-white c-border">
                                <div class="c-content-overlay">
                                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                    <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/22.png);"></div>
                                </div>
                                <div class="c-info">
                                    <p class="c-title c-font-18 c-font-slim">HTC</p>
                                    <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top" role="group">
                                        <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-product-2 c-bg-white c-border">
                                <div class="c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/20.png);"></div>
                                </div>
                                <div class="c-info">
                                    <p class="c-title c-font-18 c-font-slim">Apple iPhone 6</p>
                                    <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top" role="group">
                                        <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-product-2 c-bg-white c-border">
                                <div class="c-content-overlay">
                                    <div class="c-label c-bg-red-2 c-font-uppercase c-font-white c-padding-10 c-font-13 c-font-bold">Hot</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/24.png);"></div>
                                </div>
                                <div class="c-info">
                                    <p class="c-title c-font-18 c-font-slim">Apple iPhone 6+</p>
                                    <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top" role="group">
                                        <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: CONTENT/SHOPS/SHOP-2-2 -->
    <!-- END: PAGE CONTENT -->


</div>
<!-- END: PAGE CONTAINER -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">

    <div class="container">

        <div class="c-prefooter c-bg-white">

            <div class="c-head">
                <div class="row">
                    <div class="col-md-6">
                        <div class="c-left">
                            <div class="socicon">
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips" data-original-title="Tumblr" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-right">
                            <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                            <div class="c-icons">
                                <a href="#" class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips" data-original-title="Android" data-container="body"></a>
                                <a href="#" class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips" data-original-title="Apple" data-container="body"></a>
                                <a href="#" class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips" data-original-title="Windows" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-line"></div>

            <div class="c-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="c-links c-theme-ul">
                            <li><a href="#">About Jango</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &	Conditions</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <ul class="c-links c-theme-ul">
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Stats</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-title c-font-uppercase c-font-bold">Latest Tweets</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <div class="c-twitter">
                            <a class="twitter-timeline"
                               href="https://twitter.com/themehats"
                               data-tweet-limit="2"
                               data-chrome="noheader nofooter noscrollbar noborders transparent">
                                Loading tweets by @themehats...
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-address c-font-16">
                            25, Lorem Lis Street, Orange <br/> California, US <br/> Phone: 800 123 3456
                            <br/> Fax: 800 123 3456 <br/> Email: <a href="mailto:info@jango.com"><span class="c-theme-color">info@jango.com</span></a>
                            <br/> Skype: <a href="#"><span class="c-theme-color">jango</span></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="c-line"></div>

            <div class="c-foot">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-font-uppercase c-font-bold">About <span class="c-theme-font">JANGO</span></h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <div class="c-line-left hide"></div>
                        <form action="#">
                            <div class="input-group input-group-lg c-square">
                                <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme" placeholder="Your Email Here"/>
                                <span class="input-group-btn">
					            	<button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16" type="button">Subscribe</button>
					        	</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="c-postfooter c-bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2015 &copy; JANGO
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 c-col">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><img class="img-responsive" src="../../assets/base/img/content/payments/light/1.png" width="60" /></li>
                        <li><img class="img-responsive" src="../../assets/base/img/content/payments/light/2.png" width="60" /></li>
                        <li><img class="img-responsive" src="../../assets/base/img/content/payments/light/22.png" width="60" /></li>
                        <li><img class="img-responsive" src="../../assets/base/img/content/payments/light/5.png" width="60" /></li>
                        <li><img class="img-responsive" src="../../assets/base/img/content/payments/light/6.png" width="60" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../assets/plugins/jquery.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/jquery.easing.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
<script src="../../assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

<!-- END: CORE PLUGINS -->

<!-- BEGIN: LAYOUT PLUGINS -->
<script src="../../assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="../../assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="../../assets/plugins/typed/typed.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
<script src="../../assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->

<!-- BEGIN: THEME SCRIPTS -->
<script src="../../assets/base/js/components.js" type="text/javascript"></script>
<script src="../../assets/base/js/components-shop.js" type="text/javascript"></script>
<script src="../../assets/base/js/app.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->

<!-- BEGIN: PAGE SCRIPTS -->
<script src="../../assets/demos/default/js/scripts/revo-slider/shop-slider-4.js" type="text/javascript"></script>
<script src="../../assets/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
<script src="../../assets/demos/default/js/scripts/pages/isotope-grid.js" type="text/javascript"></script>
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>
