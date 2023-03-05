<?= $this->include("layout/main_partials/tag_head"); ?>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <!-- Basic login form-->
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center">
                                <div class="row align-items-center">
                                    <div class="col-auto"><img src="<?= base_url("assets/img/icon/login_icon.png"); ?>"
                                                               height="48px"/></div>
                                    <div class="col-auto"><span class="fw-bolder my-4 fs-3">Login Akun</span></div>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Login form-->
                                <form method="post" action="<?= base_url('auth/ceklogin') ?>">
                                    <!-- Form Group (email address)-->
                                    <?php if (session()->getFlashdata('error')): ?>
                                        <div class="alert alert-danger animated--fade-in-up" role="alert">
                                            <?= session()->getFlashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="mb-3">
                                        <label class="small mb-1" for="namapengguna">Nama Pengguna
                                            <span style="font-size: x-small;color:red">(wajib)</span></label>
                                        <input class="form-control" id="namapengguna" type="text" name="username"
                                               placeholder="Nama pengguna" required/>
                                    </div>
                                    <!-- Form Group (password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="password">Password <span
                                                    style="font-size: x-small;color:red">(wajib)</span></label>
                                        <input class="form-control" id="password" type="password" name="password"
                                               placeholder="Password" required/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="captcha">Captcha <span
                                                    style="font-size: x-small;color:red">(wajib)</span></label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input class="form-control" id="captcha" type="text" name="captcha"
                                                       placeholder="Tulis teks disebelah" required/>
                                            </div>
                                            <div class="col-6">
                                                <img src="<?= base_url("auth/captcha"); ?>" alt="Captcha"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Group (login box)-->
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <div class="form-check">
                                            <input class="form-check-input" id="rememberPasswordCheck"
                                                   type="checkbox" disabled checked/>
                                            <label class="form-check-label" for="rememberPasswordCheck">Ingat
                                                saya sampai habis sesi</label>
                                        </div>

                                        <?php if (isset($_GET['red'])) : ?>
                                            <input type="hidden" name="red" value="<?= $_GET['red'] ?>">
                                        <?php endif; ?>
                                        <button class="btn btn-primary" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="" class="modalReg" data-bs-toggle="modal"
                                                      data-bs-target="#modalReg_modal">Belum punya akun?
                                        Pelajari bagaimana cara mendapatkannya</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="footer-admin mt-auto footer-dark">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright © 2023 Lajarin</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="auth-login-basic.html#!">Tentang proyek ini</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Modal -->
<div class="modal fade animated--fade-in-up" id="modalReg_modal" data-bs-backdrop="static" tabindex="-1" role="dialog"
     aria-labelledby="modalReg_modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReg_modalLabel">Bagaimana cara mendapatkan akun?</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Untuk memperoleh akun, Anda dapat menghubungi pengajar Anda. Setelah itu, Anda akan diberikan
                    nama pengguna dan kata sandi. Saat ini, website ini masih dalam tahap uji coba dan hanya
                    tersedia bagi peserta didik kelas XI MIPA 2 di SMA Negeri 1 Marabahan. Terima kasih.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Paham</button>
            </div>
        </div>
    </div>
</div>

<?= $this->include("layout/main_partials/body_script"); ?>

<!--Custom JS-->
<script>
    // every .alert in this page, hide after 5s
    $(".alert").delay(5000).slideUp(200, function () {
        $(this).alert('close');
    });
</script>
</body>
</html>
