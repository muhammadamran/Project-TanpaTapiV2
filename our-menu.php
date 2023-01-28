<?php include "include/connection.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<!-- Style For Home -->
<style>
    .banner-area .slide_bg1 {
        background: url(https://static.wixstatic.com/media/d97a35_7ae09036b4714f5da295077fe1bb9040~mv2_d_1888_1259_s_2.jpg/v1/fill/w_1378,h_484,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/d97a35_7ae09036b4714f5da295077fe1bb9040~mv2_d_1888_1259_s_2.jpg);
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        width: 100%;
        height: 484px;
        object-fit: cover;
        object-position: 50% 50%;
    }
</style>
<!-- End Style For Home -->

<!-- Home -->
<section class="banner-area owl-carousel" id="home">
    <div class="single_slide_banner slide_bg1">
    </div>
</section>
<!-- End Home -->

<!-- About us -->
<section class="section_gap" style="background-color: #F7B600;padding: 55px 0px 0px 0px;" id="about-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="main-title">
                    <?php
                    $data_about = $db->query("SELECT * FROM tb_about WHERE status='active'");
                    $about      = mysqli_fetch_array($data_about);
                    // Title
                    if ($about['title_about'] == NULL) {
                        $Title_About = 'Title About US';
                    } else {
                        $Title_About = $about['title_about'];
                    }
                    // Description
                    if ($about['description_about'] == NULL) {
                        $Description_About = 'Description About US';
                    } else {
                        $Description_About = $about['description_about'];
                    }
                    ?>
                    <h1><?= $Title_About; ?></h1>
                    <p>
                        <?= $Description_About; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About us -->

<!-- Our Menu -->
<section class="about-area section_gap white-bg" style="padding: 55px 0px 0px 0px;margin-bottom: 70px;" id="our-menu">
    <div class="container">
        <div class="main-title">
            <h1 style="color: #333333;"><?= $Title_About; ?></h1>
        </div>
        <div class="row" style="display: flex;justify-content: space-between;align-items: center;margin-top:15px;margin-bottom:15px">
            <div class="col-sm-6">
                <!-- Title Menu -->
                <div>
                    <font class="font-title-menu">
                        Title Menu
                    </font>
                </div>
                <!-- Description Menu -->
                <div style="margin-top: 15px;margin-bottom: 10px;">
                    <p class="font-desc-menu">
                        Nasi kotak atau nasi box dengan pilihan menu Indonesia dan Asia popular menjadi pilihan sajian kuliner yang praktis untuk semua acara Anda.
                    </p>
                </div>
                <!-- Button Detail Menu -->
                <div style="margin-bottom: 10px;">
                    <a href="" class="btn-detail">Detail Menu</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="menu-img">
                    <a href="#" data-rel="prettyPhoto" title="Menu">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <img src="https://static.wixstatic.com/media/d97a35_524c3f900be243a1a074cec15a821f8e~mv2_d_2472_1648_s_2.jpg/v1/crop/x_0,y_187,w_2472,h_1274/fill/w_720,h_371,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/IMG_9909-copy-NO-TIMUN.jpg" alt="Menu Picture">
                </div>
            </div>
        </div>
        <div class="row" style="display: flex;justify-content: space-between;align-items: center;margin-top:15px;margin-bottom:15px">
            <div class="col-sm-6">
                <!-- Title Menu -->
                <div>
                    <font class="font-title-menu">
                        Title Menu
                    </font>
                </div>
                <!-- Description Menu -->
                <div style="margin-top: 15px;margin-bottom: 10px;">
                    <p class="font-desc-menu">
                        Nasi kotak atau nasi box dengan pilihan menu Indonesia dan Asia popular menjadi pilihan sajian kuliner yang praktis untuk semua acara Anda.
                    </p>
                </div>
                <!-- Button Detail Menu -->
                <div style="margin-bottom: 10px;">
                    <a href="" class="btn-detail">Detail Menu</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="menu-img">
                    <a href="#" data-rel="prettyPhoto" title="Menu">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <img src="https://static.wixstatic.com/media/d97a35_524c3f900be243a1a074cec15a821f8e~mv2_d_2472_1648_s_2.jpg/v1/crop/x_0,y_187,w_2472,h_1274/fill/w_720,h_371,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/IMG_9909-copy-NO-TIMUN.jpg" alt="Menu Picture">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pb_section cover-bg-opacity-3" style="background-color: #fff;margin-top: 45px;margin-bottom: 120px;">
    <div class="container" style="border: 2px solid #3c648e;border-radius: 25px;">
        <div class="how-content">
            <center>
                <font>How can it be Rp 18.000?</font>
            </center>
        </div>
        <div class="row">
            <div class="col-sm-6" id="how-oke">
                <div>
                    <div>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/check.png" alt="Generic placeholder image">
                    </div>
                    <div>
                        <p style="text-align: justify;font-size: 21px;color: #000;">
                            We buy in very large quantity from the first hand supplier.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" id="how-oke">
                <div>
                    <div>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/check.png" alt="Generic placeholder image">
                    </div>
                    <div>
                        <p style="text-align: justify;font-size: 21px;color: #000;">
                            We buy in very large quantity from the first hand supplier.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" id="how-oke">
                <div>
                    <div>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/check.png" alt="Generic placeholder image">
                    </div>
                    <div>
                        <p style="text-align: justify;font-size: 21px;color: #000;">
                            We buy in very large quantity from the first hand supplier.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" id="how-oke">
                <div>
                    <div>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/check.png" alt="Generic placeholder image">
                    </div>
                    <div>
                        <p style="text-align: justify;font-size: 21px;color: #000;">
                            We buy in very large quantity from the first hand supplier.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Our Menu -->

<!-- Contact us -->
<section class="section_gap newsletter-area">
    <div class="contact-one">
        <div class="contact-two">
            <div class="contact-three">
                <center>
                    <font class="layanan-pemesanan">LAYANAN PEMESANAN</font>
                    <br>
                    <div class="contact-four">
                        <a href="index.php" class="contact-telepon">
                            <i class="fas fa-headphones"></i>
                            <?= $telp ?>
                        </a>
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>


<section class="pb_section cover-bg-opacity-3" style="background-color: #fff;margin-top: 45px;margin-bottom: 45px;">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <img class="d-flex text-center mx-auto mb-3" src="assets/images/money.png" alt="Generic placeholder image">
                        <div style="margin-top:50px;margin-bottom:50px">
                            <font style="font-weight: 500;font-size: 30px;color: #000;">HARGA</font>
                        </div>
                        <p style="line-height: 25px;color: #000;margin-top: 10px;">
                            TanpaTapi menyajikan makanan Asia dan Indonesia dengan citarasa terbaik, porsi yang generous dengan harga yang ekonomis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <img class="d-flex text-center mx-auto mb-3" src="assets/images/combine.png" alt="Generic placeholder image">
                        <div style="margin-top:50px;margin-bottom:50px">
                            <font style="font-weight: 500;font-size: 30px;color: #000;">VARIASI</font>
                        </div>

                        <p style="line-height: 25px;color: #000;margin-top: 10px;">
                            Jenis masakan yang bervariasi dari berbagai daerah di Indonesia dan Asia yang disesuaikan dengan lidah orang Indonesia menjadi keunggulan dari TanpaTapi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <img class="d-flex text-center mx-auto mb-3" src="assets/images/diamond.png" alt="Generic placeholder image">
                        <div style="margin-top:50px;margin-bottom:50px">
                            <font style="font-weight: 500;font-size: 30px;color: #000;">TAMPILAN</font>
                        </div>

                        <p style="line-height: 25px;color: #000;margin-top: 10px;">
                            Packaging kotak yang cantik dan terkesan mewah membuat TanpaTapi sangat ideal untuk melengkapi berbagai acara perayaan yang diperlukan oleh customer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact us -->
<?php include "include/footer.php"; ?>