    <?php
        include 'connect.php';

        $nama_mobil = $_POST['nama'];
        $pemilik_mobil = $_POST['pemilikmobil'];
        $merk_mobil = $_POST['merkmobil'];
        $tanggal_beli = $_POST['tanggal_beli'];
        $deskripsi = $_POST['deskripsi'];
        $status_pembayaran = $_POST['statuspembayaran'];

        $gambar = $_FILES['gambar']['name'];
        $target = "../assets/img";

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
        $sql = "INSERT INTO showroom_bimo (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$gambar', '$status_pembayaran')";
        if (mysqli_query($koneksi, $sql)) {
            header("location: ../pages/ListCar-Bimo.php");
            // echo "
            // <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
            //   <div class='toast-header'>
            //     <img src='...' class='rounded me-2' alt='...'>
            //     <strong class='me-auto'>Alert</strong>
            //     <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
            //   </div>
            //   <div class='toast-body'>
            //     Data Berhasil ditambahkan.
            //   </div>
            // </div>";
        } else {
            echo "Gagal";
        }
        } else {
        echo "Gagal";
        }
    ?>