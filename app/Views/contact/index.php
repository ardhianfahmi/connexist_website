<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<title>Contact</title>

<!-- Head -->
<?= $this->include("layout/header.php") ?>


<body>

    <!-- Loading -->
    <?= $this->include("layout/loading.php") ?>

    <!-- Navbar -->
    <?= $this->include("layout/navbar.php") ?>



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
                                <dt>Alamat</dt>
                                <dd><a href="#">Kemang Selatan, No.3B, RW.4, Kel. Cilandak Timur, Kec. Ps. Minggu, Kota Jakarta Selatan, DKI Jakarta 12560</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium">
                                <dt>Telefon</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li><a href="tel:#">+62 21 799 1992</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium list-terms-medium_tertiary">
                                <dt>E-Mail</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li><a href="mailto:#">info@connexist.com</a></li>
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
        <div class="google-map-container">
            <div>
                <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4762663531072!2d106.81610572916406!3d-6.276211499716076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f108a8fbead9%3A0x678f03dcb089d402!2sCONNEXIST%20KEMANG%20OFFICE!5e0!3m2!1sid!2sid!4v1595397961353!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>
    </section>
    <!-- Page Footer-->

    <!-- Navbar -->
    <?= $this->include("layout/footer.php") ?>
</body>

</html>