<?= $this->include('layout/error_partials/tag_head'); ?>

<body class="bg-white">
<div id="layoutError">
    <div id="layoutError_content">
        <main>
            <div class="container-xl px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mt-4">
                            <img class="img-fluid p-4"
                                 src="<?= base_url('assets/img/illustrations/400-error-bad-request.svg'); ?>" alt=""/>
                            <p class="lead">Maaf, halaman yang Anda cari tidak dapat kami temukan</p>
                            <a class="text-arrow-icon" href="<?= base_url('auth/login'); ?>">
                                <i class="ms-0 me-1" data-feather="arrow-left"></i>
                                Kembali ke Login?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutError_footer">
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright © 2023 Lajarin</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<?= $this->include('layout/main_partials/body_script') ?>

</body>
</html>