<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <title>Home Page</title>
</head>

<body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="Bimo_Home.php">Home</a>
                    <a class="nav-item nav-link" href="Bimo_Booking.php">Booking</a>
               </div>
          </div>
     </nav>
     <!-- end navbar -->
     <!-- Page Tittle -->
     <div class="title text-center mt-3">
          <h5 class="text-dark ">WELCOME TO EAD RENT</h5>
          <h6 class="text-dark ">Find your best deal, here!</h6>
     </div>
     <!-- end Page Tittle -->
     <!-- car variant -->
     <div class="container d-flex justify-content-center p-2 mt-3">
          <div class="row row-cols-1 row-cols-md-3 g-4">
               <div class="col">
                    <div class="card">
                         <img src="mazda.png" class="card-img-top" width="100%">
                         <div class="card-body">
                              <h5 class="card-title">Mazda CX-5</h5>
                              <p class="card-text">Rp. 200000 / Day</p>
                              <p class="card-text">
                              <table class="table text-center">
                                   <tr>
                                        <td class="text-danger font-weight-bold">4 Seat</td>
                                   </tr>
                                   <tr>
                                        <td class="text-danger font-weight-bold">1200 cc</td>
                                   </tr>
                                   <tr>
                                        <td class="text-danger font-weight-bold">Manual</td>
                                   </tr>
                              </table>
                              </p>
                         </div>
                         <div class="card-footer d-flex justify-content-center">
                              <a class="btn btn-primary" href="Bimo_Booking.php?car=MazdaCX-5">Book now</a>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="card">
                         <img src="civic.png" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Civic Turbo</h5>
                              <p class="card-text">Rp. 300000 / Day</p>
                              <p class="card-text">
                              <table class="table text-center">
                                   <tr>
                                        <td class="text-danger font-weight-bold">4 Seat</td>
                                   </tr>
                                   <tr>
                                        <td class="text-danger font-weight-bold">1300 cc</td>
                                   </tr>
                                   <tr>
                                        <td class="text-danger font-weight-bold">Manual</td>
                                   </tr>
                              </table>
                              </p>
                         </div>
                         <div class="card-footer d-flex justify-content-center">
                              <a class="btn btn-primary" href="Bimo_Booking.php?car=CivicTurbo">Book now</a>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="card">
                         <img src="merci.png" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">Mercedes Benz C-200</h5>
                              <p class="card-text">Rp. 400000 / Day</p>
                              <p class="card-text">
                              <table class="table text-center">
                                   <tr>
                                        <td class="text-danger font-weight-bold">2 Seat</td>
                                   </tr>
                                   <tr>
                                        <td class="text-danger font-weight-bold">1500 cc</td>
                                   </tr>
                                   <tr>
                                        <td class="text-danger font-weight-bold">Manual</td>
                                   </tr>
                              </table>
                              </p>
                         </div>
                         <div class="card-footer d-flex justify-content-center">
                              <a class="btn btn-primary" href="Bimo_Booking.php?car=MercedesBenzC200">Book now</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- end car variant -->
     <!-- footer -->
     <footer>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
               Copyright 2022
               <a class="text-dark">Bimo_1202201138_SI4404</a>
          </div>
     </footer>
     <!-- end footer -->
</body>

</html>