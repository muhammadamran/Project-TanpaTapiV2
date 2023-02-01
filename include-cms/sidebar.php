<?php
$loginow = $_SESSION['username'];
include 'include/connection.php';
?>
<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<div class="nav-left-sidebar sidebar-light">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#" style="font-size: 18px;font-weight: bolder;color:#f7b600">NAVIGATION</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <!-- NAV MAIN MENU -->
                    <li class="nav-divider">
                        Navigation | Main Menu
                        <hr>
                    </li>
                    <!-- Visit -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $url; ?>" target="_blank">
                            <i class="fa-solid fa-location-arrow" id="sidebar-font"></i>
                            <span>Visit Website</span>
                        </a>
                    </li>
                    <!-- END Visit -->
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'index-cms.php' ? 'active' : '' ?>" href="index-cms.php">
                            <i class="fas fa-chart-pie" id="sidebar-font"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- END Dashboard -->
                    <!-- REFERENCES -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'cms-slide.php' || $uriSegments[2] == 'cms-aboutus.php' || $uriSegments[2] == 'cms-ourmenu.php' || $uriSegments[2] == 'cms-contactus.php'  ? 'active' : '' ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-setup" aria-controls="submenu-14">
                            <i class="fas fa-globe" id="sidebar-font"></i>
                            <span>Website</span>
                        </a>
                        <div id="submenu-setup" class="collapse submenu <?= $uriSegments[2] == 'cms-slide.php' || $uriSegments[2] == 'cms-aboutus.php' || $uriSegments[2] == 'cms-ourmenu.php' || $uriSegments[2] == 'cms-contactus.php'  ? 'show' : '' ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'cms-slide.php' ? 'active' : '' ?>" href="cms-slide.php">
                                        <span>Silde Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'cms-aboutus.php' ? 'active' : '' ?>" href="cms-aboutus.php">
                                        <span>About Us</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'cms-ourmenu.php' ? 'active' : '' ?>" href="cms-ourmenu.php">
                                        <span>Our Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= $uriSegments[2] == 'cms-contactus.php' ? 'active' : '' ?>" href="cms-contactus.php">
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- END REFERENCES -->
                    <!-- USERS APPS -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'adm_user.php' ? 'active' : '' ?>" href="#">
                            <i class="fas fa-users-cog" id="sidebar-font"></i>
                            <span>Users Apps</span>
                        </a>
                    </li>
                    <!-- END USERS APPS -->
                    <!-- SETTINGS -->
                    <li class="nav-item">
                        <a class="nav-link <?= $uriSegments[2] == 'cms-settings.php' ? 'active' : '' ?>" href="cms-settings.php">
                            <i class="fas fa-cogs" id="sidebar-font"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <!-- END SETTINGS -->
                    <!-- LOG REPORT -->
                    <li class="nav-item ">
                        <a class="nav-link <?= $uriSegments[2] == 'log_report.php' ? 'active' : '' ?>" href="#">
                            <i class="fa fa-fw fa-file" id="sidebar-font"></i>
                            <span>Log Report</span>
                        </a>
                    </li>
                    <!-- END LOG REPORT -->
                    <!-- END NAV ADMINISTRATION -->
                    <li class="nav-divider">
                        <hr>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>