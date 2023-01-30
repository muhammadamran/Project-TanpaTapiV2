<?php include "include/connection.php"; ?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"; ?>
<?php
$data_slide = $db->query("SELECT * FROM tb_slide WHERE status='active'");
$slide      = mysqli_fetch_array($data_slide);
// Images Slide
if ($slide['images_slide'] == NULL) {
    $images_slide = 'assets/img/Canvas.png';
} else {
    $images_slide = 'assets/img/' . $slide['images_slide'];
}
?>
<!-- Style For Home -->
<style>
    .banner-area .slide_bg1 {
        background: url(<?= $images_slide; ?>);
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
                <img src="assets/menu.jpg" style="width: 170px;" alt="Menu">
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