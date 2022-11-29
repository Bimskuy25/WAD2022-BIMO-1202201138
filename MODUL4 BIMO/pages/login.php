    <?php
        $koneksi = mysqli_connect("localhost:3307", "root", "", "modul3");
        session_start();
        if(isset($_SESSION["is_login"])) {
            header("location: Home-Bimo.php");
        }
        
        if(isset($_COOKIE["username"])) {
            header("location: Home-Bimo.php");
        }
        
        $message = "";
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            if(isset($_POST["remember_me"])) {
                $remember_me = TRUE;
            }else{
                $remember_me = FALSE;
            }
            
            $query = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($koneksi, $query);
        
            if ($result->num_rows == 0) {
                $message = "Gagal login: user tidak ditemukan!";
            } else {
                $users = mysqli_fetch_assoc($result);
                if(password_verify($pass, $users["password"])) {
                    if($remember_me){
                        setcookie("email", $users["email"], strtotime('+1 days'), '/');
                    }
                    setcookie("navbar", "default", strtotime('+1 days'), '/');
                    $_SESSION["is_login"] = TRUE;
                    $_SESSION["user_id"] = $users["id"];
                    $_SESSION["nama"] = $users["nama"];
                    header("location: Home-Bimo.php");
                }else{
                    $message = "Email atau Password salah!";
                }
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
        <title>Login</title>
        <link href="assets/style/test.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section class="vh-100" style="background-color: #444aee;">
                <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <?php if ($message) : ?>
                    <div class="row justify-content-center">
                        <div class="alert alert-danger w-100" role="alert">
                            <?= $message ?>
                        </div>
                    </div>
                <?php endif; ?>
                    <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="../assets/img/testcar.jpg"
                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
            
                            <form method="POST">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                <span class="h1 fw-bold mb-0">Login</span>
                                </div>
            
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
            
                                <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control form-control-lg" name="email"/>
                                <label class="form-label" for="email">Email address</label>
                                </div>
            
                                <div class="form-outline mb-4">
                                <input type="password" id="pass" class="form-control form-control-lg" name="pass"/>
                                <label class="form-label" for="pass">Password</label>
                                </div>
            
                                <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block" type="submit" name="login">Login</button>
                                </div>
                                
                                <!-- Checkbox -->
                                <div class="form-check justify-content-start mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember_me"/>
                                    <label class="form-check-label" for="remember_me"> Remember password </label>
                                </div>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                                    style="color: #ff0026;">Register here</a></p>
                                <a href="#!" class="small text-muted">Terms of use.</a>
                                <a href="#!" class="small text-muted">Privacy policy</a>
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