<?php
require '../config/connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM showroom_bimo WHERE id_mobil = $id";
$result = mysqli_query($koneksi, $sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
    <?php include '../assets/style/style.css'; ?>
  </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content">
                <div class="navbar-nav">
                    <a class="nav-link" style="color: white;" href="../index.php">Home</a>
                    <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {echo "./pages/ListCar-Bimo.php";
                                    } else {
                                    echo "./pages/Add-Bimo.php";
                                    } ?>">MyCar</a>
                </div>
                <a href="../pages/Add-Bimo.php" class="btn btn-brand">Explore Menu</a>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- Form -->
    <section id='detail'>
    <div class="container mb-3 mt-3">
        <?php
        while ($getDetail = mysqli_fetch_array($result)) {
            echo "
                    <h3 class='addcar'>" . $getDetail["nama_mobil"] . "</h3>
                    <p class='addcars'>Detail Mobil " . $getDetail["nama_mobil"] . " </p>
                    <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                    <div class='container'>
                    <div class='row g-2'>
                        <div class='col-6'>
                        <img src='../assets/img/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                        </div>
                        <div class='col-6'>
                        <form action='../config/edit.php?id=" . $getDetail["id_mobil"] . "' method='post' enctype='multipart/form-data'>
                        <div class='mb-3'>
                        <label for='nama' class='form-label'>Nama Mobil</label>
                        <input type='text' class='form-control' id='nama' name='nama' value='" . $getDetail["nama_mobil"] . "' >
                        </div>
                        <div class='mb-3'>
                        <label for='pemilikmobil' class='form-label'>Nama Pemilik</label>
                        <input type='text' class='form-control' id='pemilikmobil' name='pemilikmobil' value='" . $getDetail["pemilik_mobil"] . "' >
                        </div>
                        <div class='mb-3'>
                            <label for='merkmobil' class='form-label'>Merk</label>
                            <input type='text' class='form-control' id='merkmobil' name='merkmobil' value='" . $getDetail["merk_mobil"] . "' > 
                        </div>
                        <div class='mb-3'>
                            <label for='tanggal_beli'>Tanggal</label>
                            <input type='date' class='form-control' id='tanggal_beli' name='tanggal_beli' value='" . $getDetail["tanggal_beli"] . "' >
                        </div>
                        <div class='mb-3'>
                            <label for='deskripsi' class='form-label'>Deskripsi</label>
                            <textarea class='form-control' id='deskripsi' name='deskripsi' rows='3' >" . $getDetail["deskripsi"] . "</textarea>
                        </div>
                        <div class='mb-3'>
                            <label for='gambar' class='form-label'>Foto</label>
                            <input class='form-control' type='file' id='gambar' name='gambar' value='" . $getDetail["foto_mobil"] . "' style='height: 50px;' >
                        </div>
                        <div class='mb-1'>
                        <label for='status_pembayaran'>Status Pembayaran</label>
                        </div>
                        <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='statuspembayaran' id='lunas' value='Lunas' " . (($getDetail["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . ">
                        <label class='form-check-label' for='inlineRadio1'>Lunas</label>
                        </div>
                        <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='statuspembayaran' id='belum lunas' value='Belum Lunas' " . (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . ">
                        <label class='form-check-label' for='inlineRadio2'>Belum Lunas</label>
                        </div>
                        <div class='mb-3'>
                            <button type='submit' class='btn btn-primary'>Selesai</button>
                        </div>
                    </form>
                        </div>
                    </div>
                    </div>
                    </div>
                ";
        }
        ?>
    </div>
    </section>
    <!-- Form End -->
</body>

</html>