<?php
session_start();
  if (!isset($_SESSION["is_login"])) {
    header("location: login.php");
} 
require '../config/connect.php';

$query = "SELECT * FROM showroom_bimo";
$result = mysqli_query($koneksi, $query);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
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

  <!-- Content -->
  <section id="list">
    <div class="container mt-5">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Bimo_1202201138</p>
        <div class="d-flex gap-5">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "
              <div class='card cardcontent' style='width: 18rem;'>
                <img src='../assets/img/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
                <div class='card-body'>
                  <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
                  <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
                    <span class='d-flex'>
                      <a href='Detail-Bimo.php?id=" . $row["id_mobil"] . "' class='btn btn-success' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                      <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
                    </span>
                </div>
              </div>";
            }
          } else {
            echo "0 results";
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Content End -->

  <!-- footer -->
  <footer class="fixed-bottom" style="padding-bottom: 50px;">
    <div class="container">
      <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #000;">Total Mobil : <?php echo mysqli_num_rows($result) ?></p>
    </div>
  </footer>
  <!-- footer end -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>