<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'verifikasi_pengaduan';
            include 'verifikasi_pengaduan.php';
            break;

        case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;
    }
} else {
?>
    <h5>Selamat Datang di Pelaporan Pengaduan Masyarakat !! berfungsi untuk melaporkan pelanggaran yang ada di masyarakat</h5>
    <br><br>
    <b> Login sebagai :</b>
    <h1 class="m-1 text-info"><b><b><?php echo $_SESSION['nama'];

                                    require '../koneksi.php';
                                    $sql = mysqli_query($conn, "select * from pengaduan where status='pending'");
                                    if ($cek = mysqli_num_rows($sql)) {

                                    ?>
                    <br>
                    <br>

                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan dari masyarakat</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-archive fa-4x text-gray-300"></i>
                                        <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                                    }
                                }
            ?>