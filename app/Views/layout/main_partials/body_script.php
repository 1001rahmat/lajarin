<script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- bootstrap 5.2 js import cdn-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

crossorigin="anonymous"></script>
<script src="<?= base_url("assets/js/scripts.js"); ?>"></script>

<!-- DataTables JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let pageTitle = <?= json_encode($pageTitle); ?>;
    let navTitle = document.querySelectorAll(".nav-title");
    navTitle.forEach((title) => {
        if (title.textContent === pageTitle) {
            title.parentElement.classList.add("active");
        }
    });
</script>

<script>
    // About
    let swalAbout = document.querySelector("#swalAbout");
    if (swalAbout) {
        swalAbout.addEventListener("click", function () {
            Swal.fire({
                title: 'Tentang Proyek Ini',
                html: 'Proyek ini dikembangkan oleh Rahmat Saifuddin Anwar sebagai perangkat pembelajaran interaktif ' +
                    'bagi Peserta didik di SMAN 1 Marabahan dalam mata pelajaran Fisika',
                icon: 'info',
                confirmButtonText: 'Cool'
            })
        });
    }
</script>