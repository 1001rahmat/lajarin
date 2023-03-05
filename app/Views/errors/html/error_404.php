<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Terjadi Kesalahan</title>
    <link href="<?= base_url('assets/css/styles.css');?>" rel="stylesheet" />
    <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>
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
                            <?php if (ENVIRONMENT !== 'production') : ?>
                                <h3 class="display-3">Terjadi Kesalahan</h3>
                                <p class="font-monospace"><b>ENV: </b><?= nl2br(esc($message)) ?></p>
                            <?php else : ?>
                                <p class="lead">Maaf, halaman yang Anda cari tidak dapat kami temukan</p>
                                <a class="text-arrow-icon" href="<?= base_url('auth/login'); ?>">
                                    <i class="ms-0 me-1" data-feather="arrow-left"></i>
                                    Kembali ke Login?
                                </a>
                            <?php endif ?>
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

<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url("assets/js/scripts.js");?>"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'750b4b9be844073a',m:'XcCNQtsiZ9zaIrbjrXKlSZctCyFxb8XKDv1jRtqcUv0-1664187923-0-AcykVJiJu2/9wQizgMjlFBQpyyx7oLmrTCq0mawLM6zi0e5BPvPGQuOzNulAUUcTPxnjIhkm9El+jrCiKScFa5YwwCH0rcUQ8XTtvP+QLttfiOWebdvTYUHEuiYi5r1QK6SYCnkmnT+9xPJDv1mzaLc=',s:[0xbed09f9b75,0x4395878988],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"750b4b9be844073a","token":"6e2c2575ac8f44ed824cef7899ba8463","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>

</body>
</html>