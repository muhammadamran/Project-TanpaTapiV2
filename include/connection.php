<?php
$dbhost       = 'localhost';
$dbusername   = 'root';
$dbpassword   = '';
$dbname       = 'tanpatapi';
$db           = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

// $dbhost       = 'localhost';
// $dbusername   = 'k8794920_tanpatapi';
// $dbpassword   = '#TanpaTapi2023!@';
// $dbname       = 'k8794920_tanpatapi';
// $db           = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

$apps         = $db->query("SELECT * FROM tb_setting ORDER BY id ASC LIMIT 1");
$Rapps        = mysqli_fetch_array($apps);

// icon
if ($Rapps['icon'] == NULL) {
    $icon = 'assets/deafult/icon/icon-default.png';
} else {
    $icon = 'assets/apps/t-icon/' . $Rapps['icon'];
}
// logoOne
if ($Rapps['logoOne'] == NULL) {
    $logoOne = 'assets/deafult/logo/logo-default.png';
} else {
    $logoOne = 'assets/apps/logo/' . $Rapps['logoOne'];
}
// logoTwo
if ($Rapps['logoTwo'] == NULL) {
    $logoTwo = 'assets/deafult/logo/logo-default.png';
} else {
    $logoTwo = 'assets/apps/logo/' . $Rapps['logoTwo'];
}
// loader
if ($Rapps['loader'] == NULL) {
    $loader = '<svg class="circular" width="48px" height="48px">
                    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F" />
                </svg>';
} else {
    $load   = $Rapps['loader'];
    $loader = '<div class="loader-oke">
                    <img src="assets/apps/loader/' . $load . ' style="width:80px">
                </div>';
}
// title
if ($Rapps['title'] == NULL) {
    $title = 'Website Title';
} else {
    $title = $Rapps['title'];
}
// app_name
if ($Rapps['app_name'] == NULL) {
    $app = 'Application Name';
} else {
    $app = $Rapps['app_name'];
}
// company
if ($Rapps['company'] == NULL) {
    $company = 'Company Name';
} else {
    $company = $Rapps['company'];
}
// telp
if ($Rapps['telp'] == NULL) {
    $telp = '000-000-000-000';
} else {
    $telp = $Rapps['telp'];
}
// email
if ($Rapps['email'] == NULL) {
    $email = 'default@domain.com';
} else {
    $email = $Rapps['email'];
}
// address
if ($Rapps['address'] == NULL) {
    $address = 'Street';
} else {
    $address = $Rapps['address'];
}
