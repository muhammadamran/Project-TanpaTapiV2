<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container" id="id-ct">
                <div class="container" id="id-ct-2">
                    <a class="navbar-brand" href="index.php"><img src="<?= $logoOne; ?>" style="width:100px" alt="Logo <?= $app ?>"></a>
                </div>
                <a class="navbar-brand" id="nav-oke" href="index.php"><img src="<?= $logoOne; ?>" style="width:100px" alt="Logo <?= $app ?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent" style="justify-content: center;">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <!-- HOME -->
                        <li class="nav-item <?= $uriSegments[2] == '' || $uriSegments[2] == ' ' || $uriSegments[2] == '#' || $uriSegments[2] == '#home' || $uriSegments[2] == 'index.php' ? 'active' : '' ?>">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <!-- ABOUT US -->
                        <li class="nav-item <?= $uriSegments[2] == 'about-us.php' ? 'active' : '' ?>">
                            <a class="nav-link" href="about-us.php">ABOUT US</a>
                        </li>
                        <!-- OUR MENU -->
                        <li class="nav-item <?= $uriSegments[2] == 'our-menu.php' ? 'active' : '' ?>">
                            <a class="nav-link" href="our-menu.php">OUR MENU</a>
                        </li>
                        <!-- CONTACT US -->
                        <li class="nav-item <?= $uriSegments[2] == 'contact-us.php' ? 'active' : '' ?>">
                            <a class="nav-link" href="contact-us.php">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>