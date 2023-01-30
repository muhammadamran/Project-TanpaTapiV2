<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $app ?> Management System</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $icon ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $icon ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $icon ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets-cms/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/vendors/styles/style.css">
</head>

<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="<?= $logoTwo ?>" alt="Logo Loader" style="width: 150px;"></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>