<?php include "include/connection.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<!-- Page -->
<section id="call-to-action">
    <div class="container aos-init aos-animate" data-aos="zoom-out">
        <div class="row">
            <div class="col-lg-12 text-center text-lg-start">
                <font style="font-size: 50px;font-family:Brush Script MT, Brush Script Std, cursive;color: #fff;">OUR MENU</font>
                <p style="color:#fff"> Page Our Menu.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Page -->
<!-- Our Menu -->
<section class="about-area section_gap white-bg" style="padding: 55px 0px 0px 0px;margin-bottom: 70px;" id="our-menu">
    <div class="container">
        <div class="main-title">
            <h1 style="color: #333333;">Our Menu</h1>
            <!-- <div class="line-oke-t"></div>
            <div class="line-oke"></div> -->
        </div>
        <?php
        $dataMenu = $db->query("SELECT * FROM tb_ourmenu WHERE status='active' ORDER BY id DESC", 0);
        if (mysqli_num_rows($dataMenu) > 0) {
            while ($row = mysqli_fetch_array($dataMenu)) {
        ?>
                <div class="row" style="display: flex;justify-content: space-between;align-items: center;margin-top:15px;margin-bottom:15px">
                    <div class="col-sm-6">
                        <!-- Title Menu -->
                        <div>
                            <font class="font-title-menu">
                                <?= $row['title_menu']; ?>
                            </font>
                        </div>
                        <!-- Description Menu -->
                        <div style="margin-top: 15px;margin-bottom: 10px;">
                            <p class="font-desc-menu">
                                <?= $row['desc_menu']; ?>
                            </p>
                        </div>
                        <!-- Button Detail Menu -->
                        <div style="margin-bottom: 10px;">
                            <a href="<?= $row['id']; ?>" class="btn-detail">Detail Menu</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="menu-img">
                            <a href="#" data-rel="prettyPhoto" title="Menu">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <img src="assets/apps/ourmenu/<?= $row['images_menu']; ?>" alt="Menu Picture">
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <center>
                <font style="font-size: 50px;font-family:Brush Script MT, Brush Script Std, cursive;color: #333333;">Data Not Found</font>
                <br>
                <br>
                <img src="assets/menu/menu.jpg" style="width: 170px;" alt="Menu">
            </center>
        <?php } ?>
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