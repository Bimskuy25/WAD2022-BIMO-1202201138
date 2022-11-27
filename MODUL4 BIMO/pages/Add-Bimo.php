<?php   
    require '../config/connect.php';
    session_start();
    if (!isset($_SESSION["is_login"])) {
        header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Add PAge</title>
    <style>
    <?php include '../assets/style/style.css'; ?>
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home-Bimo.php" style="color:black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black;" href="ListCar-Bimo.php">MyCar</a>
                    </li>
                </ul>
                <a class="nav-link active" aria-current="page" href="Add-Bimo.php" style="color:black;"><button class="btn btn-light" type="button">Add Cart</button></a>
                <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                    <?= $_SESSION["nama"] ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Form -->
    <section id='form'>
        <div class="container mb-3 mt-3">
            <h3 class="addcar">Tambah Mobil</h3>
            <p class="addcars">Tambah Mobil Baru Anda Ke List Show Room</p>
            <form action="../config/create.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Mobil">
                </div>
                <div class="mb-3">
                    <label for="pemilikmobil" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="pemilikmobil" name="pemilikmobil" placeholder="Masukkan Nama Pemilik">
                </div>
                <div class="mb-3">
                    <label for="merkmobil" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merkmobil" name="merkmobil" placeholder="Masukkan Merk Mobil"> 
                </div>
                <div class="mb-3">
                    <label for="tanggal_beli">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">
                </div>
                <div class="mb-1">
                    <label for="status_pembayaran">Status Pembayaran</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statuspembayaran" id="lunas" value="Lunas">
                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statuspembayaran" id="belum lunas" value="Belum Lunas">
                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                </div>
                <div class="mt-2">
                <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Form End -->
</body>
</html>