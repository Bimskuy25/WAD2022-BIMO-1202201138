<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "modul3");

if (isset($_SESSION["is_login"])) {
    header("location: Home-Bimo.php");
}

$message = "";
if (isset($_POST["register"])) {
    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $pass = $_POST["pass"];
    $repass = $_POST["repass"];
    $nohp = $_POST["nohp"];

    if ($pass == $repass) {
        $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
        $repass = password_hash($_POST["repass"], PASSWORD_DEFAULT);
        $query = "SELECT email FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        if (!$result->num_rows) {
            $query = "INSERT INTO users VALUES (NULL, '$email', '$nama', '$pass', '$nohp')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $message = "Registrasi berhasil";
            } else {
                $message = "Registrasi gagal";
            }
        } else {
            $message = "Registrasi gagal: email sudah pernah didaftarkan!";
        }
    } else {
        $message = "Kata sandi dan konfirmasi kata sandi tidak sesuai!";
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
    <title>Registrasi</title>
    <link href="assets/style/test.css" rel="stylesheet" type="text/css">
</head>
<body>
    <section class="vh-150" style="background-color: #444aee;">
            <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                <?php if ($message) : ?>
                    <?php if (strpos($message, "berhasil")) : ?>
                        <div class="row justify-content-center">
                            <div class="alert alert-warning w-100" role="alert">
                                <?= $message ?> Silakan <a class="alert-link" href="login.php"><strong>Login</strong></a>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="row justify-content-center">
                            <div class="alert alert-danger w-100" role="alert">
                                <?= $message ?>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endif; ?>
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="assets/img/testcar.jpg"
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                        <form action="" method="post"> 
                            <div class="d-flex align-items-center mb-2 pb-1">
                            <span class="h1 fw-bold mb-0">Register</span>
                            </div>
                            <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Register your account</h5>
                            <div class="form-outline mb-2">
                                <input type="email" id="email" class="form-control" name="email"/>
                                <label class="form-label" for="email">Email address</label>
                            </div>
                            <div class="form-outline mb-2">
                                <input type="text" id="nama" class="form-control" name="nama"/>
                                <label class="form-label" for="nama">Nama</label>
                            </div>
                            <div class="form-outline mb-2">
                                <input type="password" id="pass" class="form-control" name="pass" />
                                <label class="form-label" for="pass">Password</label>
                            </div>
                            <div class="form-outline mb-2">
                                <input type="password" id="repass" class="form-control" name="repass"/>
                                <label class="form-label" for="repass">Konfirmasi Password</label>
                            </div>
                            <div class="form-outline mb-2">
                                <input type="number" id="nohp" class="form-control" name="nohp"/>
                                <label class="form-label" for="nohp">Nomor Handphone</label>
                            </div>
                            <div class="pt-1 mb-2">
                                <button class="btn btn-dark" onclick="" type="submit" name="register">Register</button>
                            </div>
                            <p class="test" style="color: #393f81;">Already have an account? <a href="login.php"
                                style="color: #ff0026;">Login here</a></p>
                        </form>
        
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </section>
</body>
</html>