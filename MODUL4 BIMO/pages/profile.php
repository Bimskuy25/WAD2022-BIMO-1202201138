<?php
session_start();
$koneksi = mysqli_connect("localhost:3307", "root", "", "modul3");

if (!isset($_SESSION["is_login"])) {
    header("location: login.php");
}

$id = $_SESSION["user_id"];
$message = "";

if (isset($_POST["update"])) {
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $navbar = $_POST["navbar"];

    setcookie("navbar", $navbar, strtotime('+1 days'), '/');

    if (!empty($_POST["pass"]) && !empty($_POST["repass"])) {
        if ($_POST["pass"] === $_POST["repass"]) {
            $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

            $query = "UPDATE users SET nama='$nama', no_hp=$nohp, password='$pass', WHERE id=$id";
            $update = mysqli_query($koneksi, $query);
            if ($update) {
                $_SESSION["nama"] = $nama;
                $message = "Profil berhasil diperbarui";
            }
        } else {
            $message = "Gagal: kata sandi dan konfirmasi kata sandi tidak sesuai!";
        }
    } else {
        $query = "UPDATE users SET nama='$nama', no_hp=$nohp WHERE id=$id";
        $update = mysqli_query($koneksi, $query);
        if ($update) {
            $_SESSION["nama"] = $nama;
            $message = "Profil berhasil diperbarui";
        }
    }
}

$result = mysqli_query($koneksi, "SELECT * FROM users WHERE id=$id");
$users = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Bimo Agung</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <?php if ($_COOKIE["navbar"] == "dark") : ?>
      <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container justify-content-center">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home-Bimo.php" style="color:white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"style="color:white;" href="<?php if (mysqli_num_rows($result) > 0) {echo "ListCar-Bimo.php";
                                    } else {
                                    echo "Add-Bimo.php";
                                    } ?>">MyCar</a>
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
    <?php elseif ($_COOKIE["navbar"] == "danger") : ?>
      <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container justify-content-center">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home-Bimo.php" style="color:black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"style="color:black;" href="<?php if (mysqli_num_rows($result) > 0) {echo "ListCar-Bimo.php";
                                    } else {
                                    echo "Add-Bimo.php";
                                    } ?>">MyCar</a>
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
    <?php elseif ($_COOKIE["navbar"] == "success") : ?>
      <nav class="navbar navbar-expand-lg bg-success">
        <div class="container justify-content-center">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home-Bimo.php" style="color:black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"style="color:black;" href="<?php if (mysqli_num_rows($result) > 0) {echo "ListCar-Bimo.php";
                                    } else {
                                    echo "Add-Bimo.php";
                                    } ?>">MyCar</a>
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
    <?php elseif ($_COOKIE["navbar"] == "warning") : ?>
      <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container justify-content-center">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home-Bimo.php" style="color:black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"style="color:black;" href="<?php if (mysqli_num_rows($result) > 0) {echo "ListCar-Bimo.php";
                                    } else {
                                    echo "Add-Bimo.php";
                                    } ?>">MyCar</a>
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
    <?php else : ?>
      <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home-Bimo.php" style="color:black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"style="color:black;" href="<?php if (mysqli_num_rows($result) > 0) {echo "ListCar-Bimo.php";
                                    } else {
                                    echo "Add-Bimo.php";
                                    } ?>">MyCar</a>
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
    <?php endif; ?>

    <div class="container mt-4">
        <?php if ($message) : ?>
            <div class="row justify-content-center">
                <div class="alert alert-warning w-50" role="alert">
                    <?php print_r($message) ?></a>
                </div>
            </div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="card w-60">
              <div class="container">
              <div class="text-center mt-4" ?update=>
                    <h3>Profile</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9 mb-2">
                                <input type="text" readonly class="form-control-plaintext" id="email" value="<?= $users["email"] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $users["nama"] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9 mb-3">
                                <input type="number" class="form-control" id="nohp" name="nohp" value="<?= $users["no_hp"] ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="pass" class="col-sm-3 col-form-label">Kata Sandi</label>
                            <div class="col-sm-9 mb-3">
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="repass" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                            <div class="col-sm-9 mb-3">
                                <input type="password" class="form-control" id="repass" name="repass">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="navbar" class="col-sm-3 col-form-label">Warna Navbar</label>
                            <div class="col-sm-3 mb-4">
                                <select id="navbar" name="navbar" class="form-control">
                                    <option value="default">Cyan</option>
                                    <option value="dark">Hitam</option>
                                    <option value="danger">Merah</option>
                                    <option value="success">Hijau</option>
                                    <option value="warning">Kuning</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                          <button type="submit" name="update" class="btn btn-info btn-block">Update</button>
                        </div>
                        <div class="row justify-content-center">
                          <a class="btn btn-secondary btn-block" href="Home-Bimo.php" role="button">Cancel</a>
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
</body>
</html>