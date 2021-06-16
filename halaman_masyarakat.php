<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'tulis_pengaduan';
            include 'tulis_pengaduan.php';
            break;

        case 'lihat_pengaduan';
            include 'lihat_pengaduan.php';
            break;

        case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;

        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;
    }
} else {
?>
    <h5>Selamat Datang di Pelaporan Pengaduan Masyarakat !! berfungsi untuk melaporkan pelanggaran yang ada di masyarakat</h5>
    <br><br>

    <b> Anda Login sebagai : </b>
    <h1 class="m-1 text-info"><b><?php echo $_SESSION['nama'];
                                                }
                                                    ?>