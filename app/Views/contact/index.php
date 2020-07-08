<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<title>Home</title>

<!-- Head -->
<?= $this->include("layout/header.php") ?>

<body>

    <!-- Loading -->
    <?= $this->include("layout/loading.php") ?>

    <!-- Navbar -->
    <?= $this->include("layout/navbar.php") ?>

    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?= base_url('public/assets/images/ie8-panel/warning_bar_0000_us.jpg') ?>" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page Loader-->
    <div id="page-loader">
        <div class="page-loader-body"><img src="<?= base_url('public/assets/images/logo-default-95x80.png') ?>" alt="" width="95" height="80" />
            <div class="cssload-wrapper">
                <div class="cssload-border">
                    <div class="cssload-whitespace">
                        <div class="cssload-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="74px" data-lg-stick-up-offset="66px" data-md-stick-up="true" data-lg-stick-up="true">
                    <div class="rd-navbar-outer">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand" href="index.html">
                                        <div class="brand__name"><img class="brand__logo-dark" src="<?= base_url('public/assets/images/logo-default-95x80.png') ?>" alt="" width="95" height="80" /><img class="brand__logo-mobile" src="<?= base_url('public/assets/images/logo-mobile-170x50.png') ?>" alt="" width="170" height="50" />
                                        </div>
                                    </a></div>
                            </div>
                            <div class="rd-navbar-body">
                                <!-- RD Navbar Aside-->
                                <div class="rd-navbar-aside">
                                    <div class="rd-navbar-content-outer">
                                        <div class="rd-navbar-content__toggle rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                                        <div class="rd-navbar-content">
                                            <ul class="list-bordered list-inline">
                                                <li>
                                                    <dl class="list-terms-inline">
                                                        <dt>24/7 Support</dt>
                                                        <dd><a href="tel:#">1-800-700-6200</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl class="list-terms-inline">
                                                        <dt>E-mail</dt>
                                                        <dd><a href="mailto:#">mail@demolink.org</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <ul class="list-inline list-inline-xs">
                                                        <li><a class="icon icon-gray-dark icon-style-brand fa fa-facebook" href="#"></a></li>
                                                        <li><a class="icon icon-gray-dark icon-style-brand fa fa-twitter" href="#"></a></li>
                                                        <li><a class="icon icon-gray-dark icon-style-brand fa fa-google-plus" href="#"></a></li>
                                                        <li><a class="icon icon-gray-dark icon-style-brand fa fa-pinterest-p" href="#"></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rd-navbar-panel__button"><a class="button button-xs button-icon button-icon-left button-default button-ujarak" href="login.html"><span class="icon mdi mdi-account"></span>Login</a></div>
                                </div>
                                <!-- RD Navbar Nav Wrap-->
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-element">
                                        <!-- RD Navbar Search-->
                                        <div class="rd-navbar-search rd-navbar-search-toggled">
                                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"></button>
                                            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                                </div>
                                                <button class="rd-navbar-search-submit" type="submit"></button>
                                                <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                                <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li><a href="about.html">About</a>
                                        </li>
                                        <li><a href="services.html">Services</a>
                                        </li>
                                        <li><a href="pricing.html">Pricing</a>
                                        </li>
                                        <li><a href="promos.html">Promos</a>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <!-- RD Navbar Dropdown-->
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="blog-post.html">Blog post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <!-- RD Navbar Megamenu-->
                                            <ul class="rd-navbar-megamenu">
                                                <li>
                                                    <h5 class="rd-megamenu-header">Pages 1</h5>
                                                    <ul class="rd-megamenu-list">
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="cart-page.html">Cart page</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5 class="rd-megamenu-header">Pages 2</h5>
                                                    <ul class="rd-megamenu-list">
                                                        <li><a href="404-page.html">404 page</a></li>
                                                        <li><a href="503-page.html">503 page</a></li>
                                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                                        <li><a href="maintenance.html">Maintenance</a></li>
                                                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                                                        <li><a href="search-results.html">Search results</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5 class="rd-megamenu-header">Elements</h5>
                                                    <ul class="rd-megamenu-list">
                                                        <li><a href="buttons.html">Buttons</a></li>
                                                        <li><a href="forms.html">Forms</a></li>
                                                        <li><a href="grid-system.html">Grid system</a></li>
                                                        <li><a href="progress-bars.html">Progress bars</a></li>
                                                        <li><a href="tables.html">Tables</a></li>
                                                        <li><a href="tabs-and-accordions.html">Tabs and Accordions</a></li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href="contact-us.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Breadcrumbs -->
        <section class="breadcrumbs-custom">
            <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(public/assets/images/bg-image-8-1920x1000.jpg);">
                <div class="container">
                    <h2 class="breadcrumbs-custom__title">Contact Us</h2>
                </div>
            </div>
            <div class="breadcrumbs-custom__main bg-gray-light">
                <div class="container">
                    <ul class="breadcrumbs-custom__path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section class="section section-md bg-white">
            <div class="container container_bigger">
                <div class="row justify-content-md-center justify-content-xl-between row-2-columns-bordered row-50">
                    <div class="col-md-10 col-lg-5">
                        <h3>Get in Touch</h3>
                        <ul class="list-creative">
                            <li>
                                <dl class="list-terms-medium list-terms-medium_secondary">
                                    <dt>Address</dt>
                                    <dd><a href="#">212 Moore Ave, Brooklyn, NY, United States</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-medium">
                                    <dt>Phones</dt>
                                    <dd>
                                        <ul class="list-comma">
                                            <li><a href="tel:#">+1-800-700-6200 </a></li>
                                            <li><a href="tel:#">+1-800-955-4567</a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-medium list-terms-medium_tertiary">
                                    <dt>E-mails</dt>
                                    <dd>
                                        <ul class="list-comma">
                                            <li><a href="mailto:#">support@demolink.org</a></li>
                                            <li><a href="mailto:#">office@demolink.org</a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-6">
                        <h3 class="text-center">Contact Form</h3>
                        <!-- RD Mailform -->
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="row align-items-md-end row-30">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                        <label class="form-label" for="contact-name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                                        <label class="form-label" for="contact-phone">Phone</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">Your Message</label>
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button class="button button-block button-primary button-ujarak" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- RD Google Map-->
        <section class="section">
            <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.attraction&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.government&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;poi.place_of_worship&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.school&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                </ul>
            </div>
        </section>
        <!-- Page Footer-->

        <!-- Navbar -->
        <?= $this->include("layout/footer.php") ?>
</body>

</html>