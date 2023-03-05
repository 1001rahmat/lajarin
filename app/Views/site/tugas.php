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
                                    <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                    Penguploadan Soal Latihan dan Tugas
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">Bermasalah saat mengirim tugas? Kirimkan ke
                                WhatsApp pengajar sekarang: <strong>081255535987</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <div class="card">
                    <div class="card-header">Tugas Pertemuan Ke-1</div>
                    <div class="card-body">
                        <table id="tabelTugas" class="table table-hover table-bordered">
                            <thead>
                            <tr class="bg bg-blue-soft mb-5">
                                <th>No</th>
                                <th>Kode tugas</th>
                                <th>Judul Tugas</th>
                                <th>Waktu Berakhir</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                <th>Hasil Penilaian</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;
                            foreach ($tugas as $t): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $t->id_tugas; ?></td>
                                    <td>
                                        <strong><?= $t->judul; ?></strong><br>
                                        <p><?= $t->deskripsi; ?></p>
                                    </td>
                                    <td><span><?= $t->tenggat; ?></span></td>
                                    <?php if ($t->submitted == 1): ?>
                                        <td>
                                            <div class="badge bg-primary text-white rounded-pill">Selesai
                                            </div>
                                        </td>
                                    <?php else: ?>
                                        <td>
                                            <div class="badge bg-danger text-white rounded-pill">Belum
                                            </div>
                                        </td>
                                    <?php endif; ?>
                                    <td>
                                        <?php if ($t->submitted == 1): ?>
                                            <a href="<?= base_url($t->path); ?>"
                                               class="text-primary">Lihat Tugas</a>
                                        <?php else: ?>
                                            <form action="<?= base_url('site/tugasdetail') ?>" method="get">
                                                <input type="hidden" name="id_tugas" value="<?= $t->id_tugas ?>">
                                                <button type="submit" class="btn btn-outline-success">Upload
                                                    Tugas
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (!isset($t->nilai)): ?>
                                            <span class="text-dark">—</span>
                                        <?php else: ?>
                                            <span class="text-dark text-decoration-none"><?= $t->nilai; ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <?= $this->include('layout/main_partials/footer') ?>
    </div>
</div>

<?= $this->include('layout/main_partials/body_script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', event => {
        // Simple-DataTables
        // https://github.com/fiduswriter/Simple-DataTables/wiki

        const datatablesSimple = document.getElementById('tabelTugas');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });
</script>
</body>
</html>
