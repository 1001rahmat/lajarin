<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
     id="sidenavAccordion">
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <img class="navbar-brand pe-3 ps-4 ps-lg-2" style="max-height: 50px;max-width: 240px"
         src="<?= base_url('assets/img/icon/lajarinbrand.svg');
         ?>"/>
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- Documentation Dropdown-->
        <li class="nav-item dropdown no-caret d-none d-md-block me-3">
            <span class="lead">HAI, <?= $user['fullname']; ?></span>
        </li>
        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
               href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                <?php if ($user['image'] !== null) : ?>
                    <img class="img-fluid" src="<?= base_url($user['image']); ?>"/>
                <?php else : ?>
                    <?php if ($user['gender'] === "1"): ?>
                        <img class="img-fluid"
                             src="<?= base_url('assets/img/illustrations/profiles/profile-2.png'); ?>">
                    <?php else: ?>
                        <img class="img-fluid"
                             src="<?= base_url('assets/img/illustrations/profiles/profile-1.png'); ?>">
                    <?php endif; ?>
                <?php endif; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <?php if ($user['gender'] === "1"): ?>
                        <img class="dropdown-user-img"
                             src="<?= base_url('assets/img/illustrations/profiles/profile-2.png'); ?>">
                    <?php else: ?>
                        <img class="dropdown-user-img"
                             src="<?= base_url('assets/img/illustrations/profiles/profile-1.png'); ?>">
                    <?php endif; ?>
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name"><?= $user['fullname']; ?></div>
                        <div class="dropdown-user-details-email"><b>SMAN 1 Marabahan</b></div>
                        <div class="dropdown-user-details-email"><?= $user['username'] . '@lajarin.live'; ?></div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                    <div class="dropdown-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </div>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>