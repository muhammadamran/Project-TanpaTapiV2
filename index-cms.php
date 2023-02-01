<?php
include "include/connection.php";
include "include-cms/restrict.php";
include "include-cms/head.php";
include "include-cms/alert.php";
include "include-cms/dataTablesCSS.php";
?>
<title>Dashboard - <?= $app ?> | General Management</title>
<div class="dashboard-main-wrapper">
    <?php include "include-cms/header.php"; ?>
    <?php include "include-cms/sidebar.php"; ?>
    <div class="dashboard-wrapper">
        <!-- Content -->
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- Page Title -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <div class="c-page">
                                <div class="bg-page">
                                    <i class="fas fa-pie-chart icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #003369;">Dashboard </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>DASHBOARD</font>
                                    </div>
                                </div>
                            </div>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> All Devices Dashboard</h5>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Laptop -->
                                    <div class="col-sm-3">
                                        <div id="Dash_Laptop"></div>
                                    </div>
                                    <!-- Server -->
                                    <div class="col-sm-3">
                                        <div id="Dash_Server"></div>
                                    </div>
                                    <!-- PC -->
                                    <div class="col-sm-3">
                                        <div id="Dash_PC"></div>
                                    </div>
                                    <!-- Monitor/LCD -->
                                    <div class="col-sm-3">
                                        <div id="Dash_ML"></div>
                                    </div>
                                    <!-- TV -->
                                    <div class="col-sm-3">
                                        <div id="Dash_TV"></div>
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-sm-3">
                                        <div id="Dash_Phone"></div>
                                    </div>
                                    <!-- Ipad -->
                                    <div class="col-sm-3">
                                        <div id="Dash_Ipad"></div>
                                    </div>
                                    <!-- Headphones -->
                                    <div class="col-sm-3">
                                        <div id="Dash_Headphones"></div>
                                    </div>
                                    <!-- Switch -->
                                    <div class="col-sm-3">
                                        <div id="Dash_Switch"></div>
                                    </div>
                                    <!-- RF -->
                                    <div class="col-sm-3">
                                        <div id="Dash_RF"></div>
                                    </div>
                                    <!-- ETC -->
                                    <div class="col-sm-3">
                                        <div id="Dash_ETC"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Dashboard 1</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dashboard_1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Dashboard 2</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dashboard_2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Dashboard 3</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dashboard_3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data Dashboard 4</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dashboard_4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End First Row -->
            </div>
        </div>
        <!-- End Content -->
        <?php include "include-cms/copyright.php"; ?>
    </div>
</div>
<?php include "include-cms/footer.php"; ?>
<?php include "include-cms/dataTablesJS.php"; ?>
<script type="text/javascript">
    // SIGN IN SUCCESS
    if (window?.location?.href?.indexOf('SignInsuccess') > -1) {
        Swal.fire({
            title: 'Sign In Success!',
            icon: 'success',
            text: '<?= $app ?>!'
        })
        history.replaceState({}, '', './index-cms.php');
    }
</script>