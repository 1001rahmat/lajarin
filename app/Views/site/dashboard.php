<!DOCTYPE html>
<html class="no-js" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title><?= $pageTitle; ?> | Lajarin</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="<?= base_url("assets/img/favicon/favicon.ico"); ?>"/>

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard_main.css'); ?>"/>
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<!-- ========================= preloader start ========================= -->
<div class="preloader">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container">
                <div class="spinner-rotator">
                    <div class="spinner-left">
                        <div class="spinner-circle"></div>
                    </div>
                    <div class="spinner-right">
                        <div class="spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- ========================= service-section start ========================= -->
<section id="service" class="service-section img-bg pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
                <div class="section-title text-center mb-10">
                    <h2>HALO, <?= ucwords($user['fullname']); ?></h2>
                    <hr>
                    <h3>Menu Lajarin</h3>
                    <p>Mau belajar apa hari ini? Silakan pilih dengan mengeklik menu di bawah ini.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="single-service">
                    <div class="icon color-1">
                        <i class="lni lni-book"></i>
                    </div>
                    <div class="content">
                        <h3>Baca E-Materi Elastisitas</h3>
                        <p>Membaca materi ajar secara online atau download versi PDF-nya</p><br>
                        <a href="<?= base_url('site/emateri'); ?>" class="btn btn-outline-primary">Let's Go</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single-service">
                    <div class="icon color-2">
                        <i class="lni lni-video"></i>
                    </div>
                    <div class="content">
                        <h3>Tonton Video Pembelajaran</h3>
                        <p>Tonton video pembelajaran atau pembahasan soal-soal di materi ajar</p><br>
                        <a href="<?= base_url('site/video'); ?>" class="btn btn-outline-primary">Let's Go</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single-service">
                    <div class="icon color-3">
                        <i class="lni lni-hammer"></i>
                    </div>
                    <div class="content">
                        <h3>Kanal Blog Pengetahuan</h3>
                        <p>Mari membaca pengetahuan-pengetahuan lain yang sangat berguna menambah wawasan Anda</p><br>
                        <a href="<?= base_url('site/prosedural'); ?>" class="btn btn-outline-primary">Let's Go</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single-service">
                    <div class="icon color-4">
                        <i class="lni lni-upload"></i>
                    </div>
                    <div class="content">
                        <h3>Kumpulkan Tugas/Latihan</h3>
                        <p>Kumpulkan soal-soal latihan dan tugas yang Anda kerjakan disini.</p><br>
                        <a href="<?= base_url('site/tugas'); ?>" class="btn btn-outline-primary">Let's Go</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
                <div class="section-title text-center">
                    <p>atau</p>
                </div>
            </div>
        </div>

        <div class="view-all-btn text-center pt-30">
            <div class="btn-group" role="group" aria-label="Grup BTN">
                <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>

    </div>
</section>
<!-- ========================= service-section end ========================= -->

<!-- ========================= JS here ========================= -->
<!-- bootstrap 5.2 js import cdn-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!--import tinyslider from cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>
<!--import wow.min.js from cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!--import polifill cdn-->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!--import main.js-->
<script src="<?= base_url('assets/js/dashboard_main.js'); ?>"></script>
</body>
</html>
