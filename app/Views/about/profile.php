<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<title>About Us</title>

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
                <h2 class="breadcrumbs-custom__title">About Us</h2>
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

    <section class="section section-md bg-white">
        <div class="container grid-system-bordered grid-demonstration">
            <h3 class="text-center">Tentang Perusahaan Kami</h3>
            <div class="col-12">
                <p style="font-size: 18px;">Kami adalah Perusahaan Swasta yang menawarkan solusi lengkap di bidang Teknologi Informatika (TI) dan Telekomunikasi untuk lembaga pemerintah dan perusahaan swasta di Indonesia. Perusahaan kami telah bergerak selama kurang lebih dari 9 tahun dengan berbagai pengalaman dan telah melayani berbagai perusahaan di Indonesia. Perusahaan kami terus menerus berkembang dibidang Penjualan Piranti Lunak (Software), Penjualan Piranti Keras (Hardware), Penjualan Alat Komunikasi dan Elektronik, Jasa dan Layanan Komputer, Multimedia serta energi.
                    Dengan dukungan tenaga yang profesional dan berperngalaman dibidangnya, kami akan terus berusaha untuk memenuhi segala kebutuhan yang dibutuhkan oleh para pelanggan.
                </p>
            </div>
        </div>
    </section>

    <section class="section section-md bg-white text-center">
        <div class="container">
            <div class="row row-50 justify-content-md-center">
                <div class="col-md-9 col-lg-8 col-xl-6">
                    <h3>Visi</h3>
                    <p class="big">"Menjadi Perusahaan IT dan Telekomunikasi terkemuka yang mendapatkan kepercayaan dari Klien dan Mendorong Pertumbuhan Perusahaan."</p>
                    <br>
                    <br>
                </div>
                <div class="container">
                    <div class="row row-50 justify-content-md-center">
                        <div class="col-md-9 col-lg-8 col-xl-6">
                            <h3>Misi</h3>
                            <p class="big">"Membangun sumber daya manusia yang jujur, kuat, dan bermartabat."</p>
                            <br>
                            <p class="big">"Menerapkan tata kelola yang baik dan benar untuk bisnis IT dan Telekomunikasi."</p>
                            <br>
                            <p class="big">"Menjunjung tinggi nilai Perusahaan dan memberikan kontribusi kepada pemegang saham serta tanggung jawab sosial"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-md bg-white text-center">
        <div class="container">
            <div class="row justify-content-xl-center">
                <div class="col-xl-10">
                    <h3>Corporate Value</h3>
                    <!-- Bootstrap tabs -->
                    <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Integritas</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Komitmen</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Terbuka</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tabs-1-4" data-toggle="tab">Rasional</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tabs-1-5" data-toggle="tab">Visionary</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <p style="font-size: 20px; text-align: center;">Memiliki sikap kejujuran, tanggung jawab dan konsistensi dalam semua tindakan dalam mencapai tujuan Perusahaan.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <p style="font-size: 20px; text-align: center;">Memiliki tanggung jawab penuh terhadap perjanjian dan janji yang telah dibuat.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <p style="font-size: 20px; text-align: center;">Menerima masukan dan mampu beradaptasi dengan perubahan lingkungan yang terjadi.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-4">
                                <p style="font-size: 20px; text-align: center;">Melakukan kegiatan secara terencana, terorganisir dengan penuh pertimbangan dan perhitungan.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-5">
                                <p style="font-size: 20px; text-align: center;">Berinovasi dan melihat ke depan tanpa kendala ruang dan waktu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navbar -->
    <?= $this->include("layout/footer.php") ?>
</body>

</html>