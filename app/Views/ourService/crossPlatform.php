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
        <h2 class="breadcrumbs-custom__title">Energy</h2>
      </div>
    </div>
    <div class="breadcrumbs-custom__main bg-gray-light">
      <div class="container">
        <ul class="breadcrumbs-custom__path">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Our Products</a></li>
          <li class="active">Energy</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section-md bg-white text-center">
    <div class="container">
      <div class="row row-50 justify-content-md-center">
        <div class="col-md-9 col-lg-8 col-xl-6">
          <h3>Grid system</h3>
          <p class="big">A responsive fluid grid system that appropriately scales up to 12 columns with gorgeous full-width and boxed options.</p>
        </div>
      </div>
    </div>
  </section>



  <?= $this->include("layout/footer.php") ?>
</body>

</html>