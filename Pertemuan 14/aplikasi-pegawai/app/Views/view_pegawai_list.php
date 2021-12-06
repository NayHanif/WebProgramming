            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pegawai</li>
                        </ol>                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List Data Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Gaji</th>                                         
                                        </tr>
                                    </thead>                                  
                                    <tbody>
                                    <?php foreach ($pegawai as $row): ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['namapegawai'] ?></td>
                                            <td><?= $row['jabatan'] ?></td>
                                            <td><?= $row['gaji'] ?></td>
                                        </tr>         
                                    <?php endforeach; ?>                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/asset/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/asset/js/datatables-simple-demo.js"></script>
    </body>
</html>
