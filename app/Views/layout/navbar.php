<!-- Page Header-->
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
                                <div class="brand__name"><img class="brand__logo-dark" src="<?= base_url('public/assets/images/logo-default-95x80.png') ?>" alt="" width="150" height="80" /><img class="brand__logo-mobile" src="<?= base_url('public/assets/images/logo-mobile-170x50.png') ?>" alt="" width="170" height="50" />
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
                                                <dt>Telefon</dt>
                                                <dd><a href="tel:#">+62 21 799 1992</a></dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="list-terms-inline">
                                                <dt>E-mail</dt>
                                                <dd><a href="mailto:#">info@connexist.com</a></dd>
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
                                <li><a href="<?= base_url('/') ?>">Home</a>
                                </li>
                                <li><a href="<?= base_url('ourproduct') ?>">Our Product</a>
                                    <!-- <ul class="rd-navbar-dropdown">
                                        <li><a href="<?= base_url('itsolution') ?>">IT Solution</a></li>
                                        <li><a href="<?= base_url('cyberSecurity') ?>">Cyber Security</a></li>
                                        <li><a href="<?= base_url('webdev') ?>">Web Development</a></li>
                                        <li><a href="<?= base_url('ecommerce') ?>">E-Commerce</a></li>
                                        <li><a href="<?= base_url('energy') ?>">Energy</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="<a href=" <?= base_url('/') ?>">Our Services</a>
                                    <ul class="rd-navbar-megamenu">
                                        <li>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="<?= base_url('crossplatform') ?>">Cross Platform Solution</a></li>
                                                <li><a href="<?= base_url('cybersecurityserv') ?>">Cybersecurity</a></li>
                                                <li><a href="<?= base_url('ecommercesol') ?>">eCommerce Solutions</a></li>
                                                <li><a href="<?= base_url('finance') ?>">Finance and Banking System Development</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="<?= base_url('projectman') ?>">Project Management</a></li>
                                                <li><a href="<?= base_url('research') ?>">Research and Development</a></li>
                                                <li><a href="<?= base_url('webmobile') ?>">Web and Mobile Development</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= base_url('news') ?>">News</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('client') ?>">Client & Partners</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('profile') ?>">About Us</a>
                                </li>
                                <li><a href="<?= base_url('contact') ?>">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>