


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Selamat Datang, Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>berita">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Berita</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>data_pegawai">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Pegawai</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>ekstrakurikuler">
                    <i class="fas fa-fw fa-street-view"></i>
                    <span>Ekstrakurikuler</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>fasilitas">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Fasilitas</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>galeri">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Galeri</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>kurikulum">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Kurikulum</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>visi">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Visi</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>misi">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Misi</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>prestasi">
                    <i class="fas fa-fw fa-award"></i>
                    <span>Prestasi</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>program_unggulan">
                    <i class="fas fa-fw fa-crown"></i>
                    <span>Program Unggulan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>program_unggulan">
                    <i class="fas fa-fw fa-crown"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Pegawai</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

           

            <!-- Divider -->
            <hr class="sidebar-divider">


          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->