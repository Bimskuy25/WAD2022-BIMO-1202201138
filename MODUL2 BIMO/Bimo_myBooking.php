     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
          <title>My Booking Kendaraan</title>
     </head>

     <body>
          <?php
          error_reporting(E_ERROR | E_PARSE);
          $idNumber = rand(10000, 20000);
          $name = $_POST['nama'];
          $checkIn = $_POST['checkin'];
          $starttime = $_POST['starttime'];
          $duration = $_POST['duration'];
          $checkOut = $checkIn . " + " . $duration . " days";
          $car = $_POST['car'];
          $phone = $_POST['nomor'];

          if ($car == "mazda.png") :
               $car = 'MazdaCX-5';
          elseif ($car == "civic.png") :
               $car = 'CivicTurbo';
          elseif ($car == "merci.png") :
               $car = 'MercedesBenzC-200';
          endif;

          if ($car == "MazdaCX-5") :
               $total = 200000 * $duration;
          elseif ($car == "CivicTurbo") :
               $total = 300000 * $duration;
          elseif ($car == "MercedesBenzC-200") :
               $total = 400000 * $duration;
          endif;

          if (empty($_POST['service1']) and empty($_POST['service2']) and empty($_POST['service3'])) :
               $serv1 = "-";
               $serv2 = "-";
               $serv3 = "-";
               $servShow = "No Service";
          endif;

          if (!empty($_POST['service1']) and !empty($_POST['service2']) and !empty($_POST['service3'])) :
               $servShow = "
               <li>Health Protocol</li>
               <li>Driver</li>
               <li>Fuel Filled</li>";
               $total += 400000;
          endif;

          if (!empty($_POST['service1']) and !empty($_POST['service2']) and empty($_POST['service3'])) :
               $serv3 = "-";
               $servShow = "
               <li>Health Protocol</li>
               <li>Driver</li>";
               $total += 150000;
          endif;

          if (empty($_POST['service1']) and !empty($_POST['service2']) and !empty($_POST['service3'])) :
               $serv1 = "-";
               $servShow = "
               <li>Driver</li>
               <li>Fuel Filled</li>";
               $total += 350000;
          endif;

          if (!empty($_POST['service1']) and empty($_POST['service2']) and !empty($_POST['service3'])) :
               $serv2 = "-";
               $servShow = "
               <li>Health Protocol</li>
               <li>Fuel Filled</li>";
               $total += 300000;
          endif;

          if (!empty($_POST['service1']) and empty($_POST['service2']) and empty($_POST['service3'])):
               $serv2 = "-";
               $serv3 = "-";
               $servShow = "<li>Health Protocol</li>";
               $total += 50000;
          endif;

          if (empty($_POST['service1']) and !empty($_POST['service2']) and empty($_POST['service3'])):
               $serv1 = "-";
               $serv3 = "-";
               $servShow = "<li>Driver</li>";
               $total += 100000;
          endif;

          if (empty($_POST['service1']) and empty($_POST['service2']) and !empty($_POST['service3'])):
               $serv1 = "-";
               $serv2 = "-";
               $servShow = "<li>Fuel Filled</li>";
               $total += 250000;
          endif;

          ?>
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light bg-info">
               <div class="collapse navbar-collapse d-flex justify-content-center">
                    <div class="navbar-nav">
                         <a class="nav-item nav-link" href="Bimo_Home.php ">Home</a>
                         <a class="nav-item nav-link active" href="Bimo_Booking.php">Booking</a>
                    </div>
               </div>
          </nav>
          <!-- end navbar -->
          <!-- Page Tittle -->
          <div class="title text-center mt-4 mb-5">
               <h3 class="text-dark"><?= 'Thank You',' ',$name,' ','For Reserving' ?></h3>
               <h5 class="text-dark">Please Double Check Your Reservation Details</h5>
          </div>
          <!-- end Page Tittle -->
          <!-- Booking Details -->
          <div class="container d-flex justify-content-center">
               <table class="table table-striped">
                    <tr>
                         <th>Booking Number</th>
                         <th>Name</th>
                         <th>Check-In</th>
                         <th>Check-Out</th>
                         <th>Car Type</th>
                         <th>Phone Number</th>
                         <th>Service</th>
                         <th>Total Price</th>
                    </tr>
                    <tr>
                         <td class="font-weight-bold"><?= $idNumber ?></td>
                         <td><?= $name ?></td>
                         <td><?= date('d-m-Y', strtotime($checkIn)), ' ', $starttime ?></td>
                         <td><?= date('d-m-Y', strtotime($checkOut)),' ', $starttime ?></td>
                         <td><?= $car; ?></td>
                         <td><?= $phone ?></td>
                         <td><?= $servShow ?></td>
                         <td>Rp <?= $total ?></td>
                    </tr>
               </table>
          </div>
          <!-- end Booking Details -->
          <!-- Footer -->
          <footer style="position:absolute; bottom:0; width:100%;">
               <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    Copyright 2022
                    <a class="text-dark">Bimo_1202201138_SI4404</a>
               </div>
          </footer>
          <!-- end Footer -->
     </body>

     </html>