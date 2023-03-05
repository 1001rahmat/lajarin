<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title><?= $pageTitle; ?> | Lajarin 2023</title>
    <link href="<?= base_url("assets/css/styles.css"); ?>" rel="stylesheet"/>

    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url("assets/img/favicon/favicon.ico"); ?>"/>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/img/favicon/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/img/favicon/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/img/favicon/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/favicon/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/img/favicon/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/img/favicon/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/img/favicon/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/img/favicon/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/img/favicon/android-icon-192x192.png')
    ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/img/favicon/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon/favicon-16x16.png') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/img/favicon/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

    <!-- Icon -->
    <script data-search-pseudo-elements="" defer=""
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
            crossorigin="anonymous"></script>

    <!-- DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>

    <?php if ($pageTitle === "Video Pembelajaran"): ?>
        <!-- video.js package-->
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/lightgallery.umd.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/css/lightgallery-bundle.min.css">
    <?php endif; ?>

    <?php if ($pageTitle === "Kumpulkan Tugas"): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment-with-locales.min.js"
                integrity="sha256-ZykW30UBCXWkPGsVyVPdJlUrce9/PawgYCEzinA4pnU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.17/moment-timezone-with-data-2012-2022.min.js"
                integrity="sha256-pQNlWZakdoYCCoBWZ5G8hXPqONH7l7QX+MGFoAkiBqs=" crossorigin="anonymous"></script>
    <?php endif; ?>
</head>