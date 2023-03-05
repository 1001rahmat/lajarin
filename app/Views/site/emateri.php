<?= $this->include('layout/main_partials/tag_head'); ?>
<body class="nav-fixed">

<div id="layoutSidenav">
    <?= $this->include('layout/main_partials/topnav'); ?>
    <?= $this->include('layout/main_partials/sidenav'); ?>
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="eye"></i></div>
                                    Baca Materi Online
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">Bermasalah saat membaca online? Coba unduh file
                                offline <a href="<?= base_url('media/download/mater_ajar.pdf') ?>"
                                           class="fw-bolder">disini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <iframe class="responsive" src="<?= base_url('flipbook/index.html') ?>" width="100%"
                        height="600px"></iframe>
            </div>
        </main>
        <?= $this->include('layout/main_partials/footer') ?>
    </div>
</div>

<?= $this->include('layout/main_partials/body_script') ?>
</body>
</html>
