<?= $this->extends('layout/asset')?>

<?= $this->section('nana')?>
<div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">PERPUS BUKU</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?=base_url();?>buku/create" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url();?>buku/create" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Kategoribuku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url();?>buku/create" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Koleksipribadi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url();?>buku/create" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url();?>buku/create" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Ulasan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url();?>buku/create" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <!-- More items... -->
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <!-- Table Index Buku -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Buku</h3>
                            <a href="<?=base_url();?>buku/save" class="btn btn-primary float-right">Tambah Buku</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example data, replace with dynamic content -->
                                    <tr>
                                        <td>1</td>
                                        <td>Contoh Buku</td>
                                        <td>John Doe</td>
                                        <td>Fiksi</td>
                                        <td>2024-08-07</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- End example data -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>&copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <? $this->endSection();?>