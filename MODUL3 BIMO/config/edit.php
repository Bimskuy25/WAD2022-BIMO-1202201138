    <?php
        include 'connect.php';

        $id = $_GET['id'];
        $nama_mobil = $_POST['nama'];
        $pemilik_mobil = $_POST['pemilikmobil'];
        $merk_mobil = $_POST['merkmobil'];
        $tanggal_beli = $_POST['tanggal_beli'];
        $deskripsi = $_POST['deskripsi'];
        $status_pembayaran = $_POST['statuspembayaran'];

        $gambar = $_FILES['gambar']['name'];
        $target = "../assets/img";

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
        $sql = "UPDATE showroom_bimo SET nama_mobil = '$nama_mobil', pemilik_mobil = '$pemilik_mobil', merk_mobil = '$merk_mobil', tanggal_beli = '$tanggal_beli', deskripsi = '$deskripsi', foto_mobil = '$gambar' , status_pembayaran = '$status_pembayaran' WHERE id_mobil = $id";
        if (mysqli_query($koneksi, $sql)) {
            header("location: ../pages/ListCar-Bimo.php");
        } else {
            echo "Gagal";
        }
        } else {
        echo "Gagal";
        }
    ?>