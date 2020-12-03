        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-seccondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fw fa-cogs"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Host</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                <p>User</p>
            </div>
            <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('user/kamar_user'); ?>">
                    <!-- <i class="fas fa-fw fa-boxes "></i> --><i class="fas fa-hotel"></i>
                    <span>Daftar Homestay</span>
                  </a>
            </li>
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa- fw fa-money-bill-wave"></i>
                    <span>Pembayaran</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="<?= base_url('user/booking'); ?>">Booking</a>
                    <a class="dropdown-item" href="<?= base_url('user/transaksi'); ?>">Transaksi</a>
                    <a class="dropdown-item" href="<?= base_url('user/pemesan'); ?>">Pemesan</a>
                  </div>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profil</span>
                  </a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('user/user_edit'); ?>">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profil</span>
                  </a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('user/user_changepassword'); ?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Change Password</span>
                  </a>
            </li>


            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('host_login'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Back</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 