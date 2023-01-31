<?php include "include/connection.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<!-- Page -->
<section id="call-to-action">
    <div class="container aos-init aos-animate" data-aos="zoom-out">
        <div class="row">
            <div class="col-lg-12 text-center text-lg-start">
                <font style="font-size: 50px;font-family:Brush Script MT, Brush Script Std, cursive;color: #fff;">ABOUT US</font>
                <p style="color:#fff"> Page About Us.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Page -->
<!-- About us -->
<section class="section_gap" style="background-color: #F7B600;padding: 55px 0px 0px 0px;margin-top: 0px;" id="about-us">
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
<br><br>
<br><br>
<br><br>
<!-- Contact us -->
<section class="section_gap newsletter-area">
    <div class="contact-one">
        <div class="contact-two">
            <div class="contact-three">
                <center>
                    <font class="layanan-pemesanan">LAYANAN PEMESANAN</font>
                    <br>
                    <div class="contact-four">
                        <a href="tel:<?= $telp ?>" class="contact-telepon">
                            <i class="fas fa-headphones"></i>
                            <?= $telp ?>
                        </a>
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- End Contact us -->
<?php include "include/footer.php"; ?>