<?php include "include/connection.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<!-- Page -->
<section id="call-to-action">
    <div class="container aos-init aos-animate" data-aos="zoom-out">
        <div class="row">
            <div class="col-lg-12 text-center text-lg-start">
                <font style="font-size: 50px;font-family:Brush Script MT, Brush Script Std, cursive;color: #fff;">CONTACT US</font>
                <p style="color:#fff"> Page Contact Us.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Page -->
<br>
<br>
<br>
<br>
<br>
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

<section class="pb_section cover-bg-opacity-3" style="background-color: #fff;margin-top: 45px;margin-bottom: 45px;">
    <div class="container">
        <div class="row">
            <?php
            $data_content = $db->query("SELECT * FROM tb_content ORDER BY id DESC LIMIT 1");
            $content      = mysqli_fetch_array($data_content);

            // Content ONE
            // ICON
            if ($content['icon_one'] == NULL) {
                $icon_one = 'assets/images/money.png';
            } else {
                $icon_one = 'assets/content/one/' . $content['icon_one'];
            }
            // CONTENT
            if ($content['content_one'] == NULL) {
                $content_one = 'Title Content 1';
            } else {
                $content_one = $content['content_one'];
            }
            // DESC
            if ($content['desc_one'] == NULL) {
                $desc_one = 'Description Content 1';
            } else {
                $desc_one = $content['desc_one'];
            }

            // Content TWO
            // ICON
            if ($content['icon_two'] == NULL) {
                $icon_two = 'assets/images/combine.png';
            } else {
                $icon_two = 'assets/content/two/' . $content['icon_two'];
            }
            // CONTENT
            if ($content['content_two'] == NULL) {
                $content_two = 'Title Content 2';
            } else {
                $content_two = $content['content_two'];
            }
            // DESC
            if ($content['desc_two'] == NULL) {
                $desc_two = 'Description Content 2';
            } else {
                $desc_two = $content['desc_two'];
            }

            // Content THREE
            // ICON
            if ($content['icon_three'] == NULL) {
                $icon_three = 'assets/images/diamond.png';
            } else {
                $icon_three = 'assets/content/two/' . $content['icon_three'];
            }
            // CONTENT
            if ($content['content_three'] == NULL) {
                $content_three = 'Title Content 3';
            } else {
                $content_three = $content['content_three'];
            }
            // DESC
            if ($content['desc_three'] == NULL) {
                $desc_three = 'Description Content 3';
            } else {
                $desc_three = $content['desc_three'];
            }
            ?>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <img class="d-flex text-center mx-auto mb-3" src="<?= $icon_one; ?>" alt="Generic placeholder image">
                        <div style="margin-top:50px;margin-bottom:50px">
                            <font style="font-weight: 500;font-size: 30px;color: #000;"><?= $content_one ?></font>
                        </div>
                        <p style="line-height: 25px;color: #000;margin-top: 10px;">
                            <?= $desc_one ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <img class="d-flex text-center mx-auto mb-3" src="<?= $icon_two; ?>" alt="Generic placeholder image">
                        <div style="margin-top:50px;margin-bottom:50px">
                            <font style="font-weight: 500;font-size: 30px;color: #000;"><?= $content_two; ?></font>
                        </div>
                        <p style="line-height: 25px;color: #000;margin-top: 10px;">
                            <?= $desc_two; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <img class="d-flex text-center mx-auto mb-3" src="<?= $icon_three; ?>" alt="Generic placeholder image">
                        <div style="margin-top:50px;margin-bottom:50px">
                            <font style="font-weight: 500;font-size: 30px;color: #000;"><?= $content_three; ?></font>
                        </div>
                        <p style="line-height: 25px;color: #000;margin-top: 10px;">
                            <?= $desc_three; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact us -->
<?php include "include/footer.php"; ?>