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
                <?php if ($tugas[0]->submitted == 1 || date("Y-m-d H:i:s") >= $tugas[0]->tenggat): ?>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Terjadi Kesalahan!</h4>
                        <p>Alasannya adalah salah satu dari tiga hal di bawah ini:
                        <ol>
                            <li>Anda sudah melewati batas pengumpulan tugas.</li>
                            <li>Anda tidak memiliki akses ke tugas ini.</li>
                            <li>Anda telah mengumpul tugas ini.</li>
                        </ol>
                        </p>
                        <hr>
                    </div>
                    <a href="<?= base_url('site/tugas') ?>" class="btn btn-primary">Kembali ke Daftar Tugas</a>
                <?php else: ?>
                    <form id="uplTugas" action="<?= base_url('site/tugasdetail') ?>" method="post"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Identitas Tugas</div>
                                    <div class="card-body text-start">
                                        <table class="table table-borderless">
                                            <tbody>
                                            <tr>
                                                <td>Kode Tugas</td>
                                                <td>:</td>
                                                <td><?= $tugas[0]->id_tugas; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Judul Tugas</td>
                                                <td>:</td>
                                                <td><?= $tugas[0]->judul; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi Tugas</td>
                                                <td>:</td>
                                                <td><?= $tugas[0]->deskripsi; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Waktu Berakhir</td>
                                                <td>:</td>
                                                <td><?= $tugas[0]->tenggat; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Waktu Tersisa</td>
                                                <td>:</td>
                                                <td>
                                                    <div id="timer" class="text-danger"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Detail Tugas</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-12">
                                                    <label for="file"
                                                           class="form-label">Upload file
                                                        PDF</label><br>
                                                    <input type="file" name="file" accept="application/pdf"
                                                           class="form-control"
                                                           id="file" onchange="tampilkanNamaFile()" required></div>
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-12">
                                                    <label class="form-label" for="namaFile">Judul File Anda</label>
                                                    <input class="form-control" id="namaFile" type="text"
                                                           placeholder="Masukkan nama file tugas" name="namaFile"
                                                           value="">
                                                </div>
                                            </div>
                                            <!-- Form Group (Group Selection Checkboxes)-->
                                            <div class="mb-3">
                                                <label class="small mb-1">Auto-Name Berkas</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="addMyName" type="checkbox"
                                                           value="" disabled>
                                                    <label class="form-check-label" for="addMyName">Tambahkan Nama
                                                        Saya</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="addDateTime" type="checkbox"
                                                           value="" disabled>
                                                    <label class="form-check-label" for="addDateTime">Tambahkan
                                                        Tanggal dan Waktu (misal: 31122023_2359WITA)</label>
                                                </div>
                                            </div>
                                            <!-- Submit button-->
                                            <input type="hidden" name="id_tugas" value="<?= $tugas[0]->id_tugas; ?>">
                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                <?php endif; ?>
            </div>
        </main>
        <?= $this->include('layout/main_partials/footer') ?>
    </div>
</div>

<?= $this->include('layout/main_partials/body_script') ?>
<script>
    function tampilkanNamaFile() {
        let file = document.getElementById("file").files[0];
        let namaFile = file.name;
        namaFile = namaFile.substring(0, namaFile.lastIndexOf('.'));
        document.getElementById("namaFile").value = namaFile;
        document.getElementById("addMyName").disabled = false;
        document.getElementById("addDateTime").disabled = false;
    }

    let nama = '<?= $user['fullname'] ?>';
    let addMyName = document.getElementById('addMyName');

    // if addMyName checked, add nama to namaFile
    addMyName.addEventListener('change', function () {
        let namaFile = document.getElementById('namaFile');
        if (addMyName.checked) {
            namaFile.value = nama + '_' + namaFile.value;
        } else {
            namaFile.value = namaFile.value.replace(nama + '_', '');
        }
    });

    let addDateTime = document.getElementById('addDateTime');
    addDateTime.addEventListener('change', function () {
        let namaFile = document.getElementById('namaFile');
        let date = new Date();
        let day = date.getDate();
        let month = date.getMonth() + 1;
        let year = date.getFullYear();
        let hour = date.getHours();
        let minute = date.getMinutes();
        let dateTime = day + '' + month + '' + year + '_' + hour + '' + minute + 'WITA';
        if (addDateTime.checked) {
            namaFile.value = namaFile.value + '_' + dateTime;
        } else {
            namaFile.value = namaFile.value.replace('_' + dateTime, '');
        }
    });

    (function () {

        var timeElement, rawTime, eventTime, currentTime, duration, interval, intervalId;

        interval = 1000; // 1 second

        // get time element
        timeElement = document.querySelector("#timer");

        // convert string Y-m-d H:i:s to moment.tz format
        rawTime = '<?= $tugas[0]->tenggat ?>';
        rawTime = rawTime.replace(' ', 'T');

        // calculate difference between two times
        eventTime = moment.tz(rawTime, "Asia/Makassar");
        // based on time set in user's computer time / OS
        currentTime = moment.tz();
        // get duration between two times
        duration = moment.duration(eventTime.diff(currentTime));

        // loop to countdown every 1 second
        setInterval(function () {
            // get updated duration
            duration = moment.duration(duration - interval, 'milliseconds');

            // if duration is >= 0
            if (duration.asSeconds() <= 0) {
                clearInterval(intervalId);
                // change HTML inside #timer element
                timeElement.innerHTML = "Waktu Habis";
            } else {
                // otherwise, show the updated countdown
                timeElement.innerText = duration.days() + " hari " + duration.hours() +
                    " jam " + duration.minutes() + " menit " + duration.seconds() + " detik";
            }
        }, interval);
    }());
</script>
<script>
    document.getElementById('uplTugas').addEventListener('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('site/uploadtugas') ?>');
        xhr.send(formData);

        xhr.onload = function () {
            // get xhr message response from controller
            let response = JSON.parse(xhr.responseText);

            if (xhr.status === 200) {
                Swal.fire({
                    title: 'Berhasil!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'Kembali ke List Tugas'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '<?= base_url('site/tugas') ?>';
                    }
                });
            } else {
                Swal.fire({
                    title: 'Gagal!',
                    text: response.message,
                    icon: 'error',
                    confirmButtonText: 'Coba Lagi Mengunggah'
                }).then((result) => {
                    if (result.value) {
                        // show js alert
                        alert("Silakan klik Upload kembali");
                    }
                });
            }
        }
    })
</script>
</body>
</html>
