<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $icon; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets-cms/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets-cms/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets-cms/libs/css/style.css">
    <link rel="stylesheet" href="assets-cms/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets-cms/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets-cms/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets-cms/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets-cms/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets-cms/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="assets-cms/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="assets-cms/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <!-- Alert -->
    <script src="assets-cms/sweet/sweetalert2.all.js"></script>
    <script src="assets-cms/sweet/sweetalert2.all.min.js"></script>
    <script src="assets-cms/sweet/sweetalert2.js"></script>
    <script src="assets-cms/sweet/sweetalert2.min.js"></script>
    <!-- behind css -->
    <link rel="stylesheet" href="assets-cms/libs/css/behind.css">
    <!-- <link rel="stylesheet" href="assets-cms/libs/css/main.css"> -->
    <!-- Loading -->
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <!-- Font Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- FONTAWESON 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
</head>
<style>
    body {
        font-family: Poppins, Open Sans, Helvetica, Arial, sans-serif;
    }
</style>
<?php
// DATE
function date_indo($date, $print_day = false)
{
    $day = array(
        1 =>
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    );
    $month = array(
        1 =>
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    );
    $split    = explode('-', $date);
    $tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

// RUPIAH
function Rupiah($angka)
{
    $hasil = "Rp. " . number_format($angka, 2, ',', '.');
    return $hasil;
}
?>

<body>
    <div class="preloader">
        <div class="loading">
            <img src="<?= $loader; ?>" width="150">
            <br>
            <!-- <div class="loading-divider"></div> -->
            <!-- <font class="text-loading-wait">Please wait ...</font> -->
        </div>
    </div>