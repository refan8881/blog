

    <!-- Header -->
    <?php include('../../layouts/includes/head.php') ?>
    <!-- End Header -->

    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <!-- Navbar -->
        <?php include('../../layouts/includes/navbar.php') ?>
        <!-- End Navbar -->
        <div class="app-body">
            <!-- Sidebar -->
            <?php include('../../layouts/includes/sidebar.php') ?>
            <!-- End Sidebar -->
            <!-- Main Content -->
            <main class="main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">
                        <a href="#">Admin</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    <!-- Breadcrumb Menu-->
                    <li class="breadcrumb-menu d-md-down-none">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <a class="btn" href="#">
                                <i class="icon-speech"></i>
                            </a>
                            <a class="btn" href="./">
                                <i class="icon-graph"></i>  Dashboard</a>
                            <a class="btn" href="#">
                                <i class="icon-settings"></i>  Settings</a>
                        </div>
                    </li>
                </ol>
                <body>
                    <?php

                    include('../../config/database.php');
                    $kategori = new kategori();
                    foreach ($kategori -> show ($_GET['id']) as $data) {
                        $id = $data['id'];
                        $nama = $data['nama'];
                        $slug = $data['slug'];
                    }
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="cols-12">
                                <div class="card">
                                    <div class="card-header">Show Kategori

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <table>Nama Kategori</table>
                                                    <th>Slug</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td><input type="text" name="id" value="<?php echo $id; ?>"readonly></td>
                                                 <td><input type="text" name="nama" value="<?php echo $nama; ?>"readonly></td>
                                                  <td><input type="text" name="slug" value="<?php echo $slug; ?>"readonly></td>
                                            </tbody>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
            </main>
            <!-- End Main Conten -->

        </div>
        <!-- Footer -->
        <?php include('../../layouts/includes/footer.php') ?>
        <!-- End Footer -->
        <!-- CoreUI and necessary plugins-->
        <!-- Script-->
        <?php include('../../layouts/includes/script.php') ?>
        <!-- End Script -->
    </body>

    </html>
