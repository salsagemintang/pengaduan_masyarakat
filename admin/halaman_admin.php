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
        case 'tanggapan';
            include 'tanggapan.php';
            break;
        case 'lihat_petugas';
            include 'lihat_petugas.php';
            break;
        case 'tambah_petugas';
            include 'tambah_petugas.php';
            break;
        case 'edit_petugas';
            include 'edit_petugas.php';
            break;
        case 'preview_petugas';
            include 'preview_petugas.php';
            break;
        case 'lihat_masyarakat';
            include 'lihat_masyarakat.php';
            break;
        case 'preview_masyarakat';
            include 'preview_masyarakat.php';
            break;
        case 'lihat_laporan';
            include 'lihat_laporan.php';
            break;
        case 'preview_laporan';
            include 'preview_laporan.php';
            break;
        case 'data_laporan';
            include 'data_laporan.php';
            break;
    }
} else {
?>
    <h5>Selamat Datang di Pelaporan Pengaduan Masyarakat !! berfungsi untuk melaporkan pelanggaran yang ada di masyarakat</h5>
    <br><br>

    <b> Login sebagai : </b>
    <h1 class="m-1 text-info"><b><?php echo $_SESSION['nama'];
                                    require '../koneksi.php';
                                    $sql = mysqli_query($conn, "select * from pengaduan where status='proses'");
                                    if ($cek = mysqli_num_rows($sql)) {

                                    ?>
                <br>
                <br>

                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Pengaduan : </div>
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