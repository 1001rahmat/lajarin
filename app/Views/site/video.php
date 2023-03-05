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
                                    <div class="page-header-icon"><i data-feather="video"></i></div>
                                    Video Pembahasan Soal-soal Latihan
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">Punya kuota Youtube? Anda juga bisa menonton
                                video ini di channel <a href="https://www.youtube.com/@lajarinmedia5678"
                                                        class="lead">Lajarin Media</a> .
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <div class="card">
                    <div class="card-header">Pembahasan Soal Pertemuan 1</div>
                    <div class="card-body">
                        <div id="gallery-videojs">
                            <?php foreach ($video as $v) : ?>
                                <?php if ($v['chapter'] == 1) : ?>
                                    <a
                                            data-lg-size="1280-720"
                                            data-video='{"source": [{"src":"<?= base_url('media/pembahasan_soal/1.'
                                                . $v['number'] . '.' . $v['part']
                                                . '.mp4'); ?>", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
                                            data-sub-html="<h4><?= $v['title']; ?></h4>"
                                    >
                                        <img
                                                width="320"
                                                height="180"
                                                class="img-responsive mt-5"
                                                src="<?= base_url('media/pembahasan_soal/thumb/1.'
                                                    . $v['number'] . '.' . $v['part']
                                                    . '.png'); ?>"
                                        />
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card-footer">Unduh semua video dalam format zip? <a href="<?= base_url
                        ('site/unduhmedia?path=pembahasan_soal&val=1&token=' . $token); ?>">Klik
                            disini</a></div>
                </div>
            </div>
            <div class="container-xl px-4 mt-4">
                <div class="card">
                    <div class="card-header">Pembahasan Soal Pertemuan 2 dan 3</div>
                    <div class="card-body">
                        <div id="gallery-videojs">
                            <?php foreach ($video as $v) : ?>
                                <?php if ($v['chapter'] == 2) : ?>
                                    <a
                                            data-lg-size="1280-720"
                                            data-video='{"source": [{"src":"<?= base_url('media/pembahasan_soal/2.'
                                                . $v['number'] . '.' . $v['part']
                                                . '.mp4'); ?>", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
                                            data-sub-html="<h4><?= $v['title']; ?></h4>"
                                    >
                                        <img
                                                width="320"
                                                height="180"
                                                class="img-responsive mt-5"
                                                src="<?= base_url('media/pembahasan_soal/thumb/2.'
                                                    . $v['number'] . '.' . $v['part']
                                                    . '.png'); ?>"
                                        />
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card-footer">Unduh semua video dalam format zip? <a href="<?= base_url
                        ('site/unduhmedia?path=pembahasan_soal&val=2&token=' . $token); ?>">Klik
                            disini</a></div>
                </div>
            </div>
            <div class="container-xl px-4 mt-4">
                <div class="card">
                    <div class="card-header">Pembahasan Soal Pertemuan 4</div>
                    <div class="card-body">
                        <div id="gallery-videojs">
                            <?php foreach ($video as $v) : ?>
                                <?php if ($v['chapter'] == 3) : ?>
                                    <a
                                            data-lg-size="1280-720"
                                            data-video='{"source": [{"src":"<?= base_url('media/pembahasan_soal/3.'
                                                . $v['number'] . '.' . $v['part']
                                                . '.mp4'); ?>", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
                                            data-sub-html="<h4><?= $v['title']; ?></h4>"
                                    >
                                        <img
                                                width="320"
                                                height="180"
                                                class="img-responsive mt-5"
                                                src="<?= base_url('media/pembahasan_soal/thumb/3.'
                                                    . $v['number'] . '.' . $v['part']
                                                    . '.png'); ?>"
                                        />
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card-footer">Unduh semua video dalam format zip? <a href="<?= base_url
                        ('site/unduhmedia?path=pembahasan_soal&val=3&token=' . $token); ?>">Klik
                            disini</a></div>
                </div>
            </div>
        </main>
        <?= $this->include('layout/main_partials/footer') ?>
    </div>
</div>
<?= $this->include('layout/main_partials/body_script') ?>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/video/lg-video.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/fullscreen/lg-fullscreen.min.js"></script>
<script>
    // for every element with the class "gallery-videojs"
    document.querySelectorAll('#gallery-videojs').forEach(function (el) {
        lightGallery(el, {
            selector: 'a',
            plugins: [lgVideo],
            download: true,
            thumbnail: true,
            videojs: true,
            fullscreen: true,
            videoMaxWidth: '100%',
            videojsOptions: {
                controls: true,
                muted: true
            }

        });
    });
</script>
</body>
</html>
