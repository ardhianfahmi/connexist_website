<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<title>News</title>

<!-- Head -->
<?= $this->include("layout/header.php") ?>


<body>
    <!-- Loading -->
    <?= $this->include("layout/loading.php") ?>

    <!-- Navbar -->
    <?= $this->include("layout/navbar.php") ?>

    <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/bg-image-1-1920x900.jpg);">
            <div class="container">
                <h2 class="breadcrumbs-custom__title">Cyber Security</h2>
            </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
            <div class="container">
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li class="active">Cyber Security</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Icon List-->
    <section class="section section-md bg-white text-center text-md-left">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-6 col-lg-4">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div>
                            <img src="<?= base_url('public/assets/images/user-2-112x99.jpg') ?>">
                        </div>
                        <h4 class="box-minimal__title">Best Service</h4>
                        <div class="box-minimal__text">
                            <p>Our mission is to attract and retain customers by providing Best in Class solutions and fostering a profitable, disciplined culture of safety, service, and trust.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal__icon fa fa-group icon-secondary"></div>
                        <h4 class="box-minimal__title">Reputation</h4>
                        <div class="box-minimal__text">
                            <p>We have established a strong presence in the industry. Our award-winning services earn a reputation for quality and excellence that few can rival.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal__icon fa fa-lock icon-tertiary"></div>
                        <h4 class="box-minimal__title">Safety & Security</h4>
                        <div class="box-minimal__text">
                            <p>Safety for our employees, customers and the community we work with will always remain our primary focus in all the policies, procedures and programs.</p>
                        </div>
                    </article>
                </div>
            </div>
    </section>
    <section class="section section-md bg-white text-center text-md-left">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-6 col-lg-4">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal__icon fa fa-thumbs-up icon-primary"></div>
                        <h4 class="box-minimal__title">Best Service</h4>
                        <div class="box-minimal__text">
                            <p>Our mission is to attract and retain customers by providing Best in Class solutions and fostering a profitable, disciplined culture of safety, service, and trust.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal__icon fa fa-group icon-secondary"></div>
                        <h4 class="box-minimal__title">Reputation</h4>
                        <div class="box-minimal__text">
                            <p>We have established a strong presence in the industry. Our award-winning services earn a reputation for quality and excellence that few can rival.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-minimal__icon fa fa-lock icon-tertiary"></div>
                        <h4 class="box-minimal__title">Safety & Security</h4>
                        <div class="box-minimal__text">
                            <p>Safety for our employees, customers and the community we work with will always remain our primary focus in all the policies, procedures and programs.</p>
                        </div>
                    </article>
                </div>
            </div>
    </section>
    <?= $this->include("layout/footer.php") ?>
</body>

</html>