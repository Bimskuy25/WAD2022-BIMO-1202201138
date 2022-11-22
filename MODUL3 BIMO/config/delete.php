    <?php
        include 'connect.php';
        $id = $_GET['id'];

        $sql = "DELETE FROM showroom_bimo WHERE id_mobil = $id";
        
        if (mysqli_query($koneksi, $sql)) {
        header("location: ../pages/ListCar-Bimo.php");
        } else {
        echo "Gagal";
        }
    ?>