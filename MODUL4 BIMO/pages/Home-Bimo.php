<?php 
    session_start();
    if (!isset($_SESSION["is_login"])) {
        header("location: login.php");
    }      
    require '../config/connect.php';
    $query = "SELECT * FROM showroom_bimo";
    $result = mysqli_query($koneksi, $query);
    function onClick($result)
    {
    if (mysqli_num_rows($result) > 0) {
        header("Location: ./pages/ListCar-Bimo.php");
    } else {
        header("Location: ./pages/Add-BImo.php");
    }
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
    <title>Home PAge</title>
    <style>
    <?php include './assets/style/style.css'; ?>
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
    <!-- end navbar -->
    <section id="home">
    <div class="container item-center mt-5">
        <div class="row g-2 element">
            <div class="col-6">
                <h1>Selamat Datang Di<br /> Show Room Bimskuyy</h1>
                <p class="mt-3">Menjual segala jenis mobil yang menarik dan juga berkelas untuk dipakai sehari-hari atau pun untuk style</p>
                <button class="btn btn-primary mt-2 mb-2" type="button" name="button"><a href="<?php if (mysqli_num_rows($result) > 0) {
                        echo "./pages/ListCar-Bimo.php";
                        } else {
                        echo "./pages/Add-Bimo.php";
                        } ?>" style="color : white;">MyCar</a></button>
                <div class="d-flex align-items-center gap-5 mt-3">
                    <img src="<?php echo "../assets/img/logo-ead.png" ?>" alt="..." style="width:100px;">
                        <p style="font-size:14px;">Bimo_1202201138</p>
                </div>
            </div>
            <div class="col-6">
                <img src="<?php echo "../assets/img/bmw_m4.jpg" ?>" alt="..." style="width:500px;">
            </div>
        </div>
    </div>
    </section>
</body>
</html>