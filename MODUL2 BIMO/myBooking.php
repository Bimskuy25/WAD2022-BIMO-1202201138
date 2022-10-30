<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>myBooking</title>
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
          $car = 'Mazda CX-5';
     elseif ($car == "civic.png") :
          $car = 'Civic Turbo';
     elseif ($car == "merci.png") :
          $car = 'Mercedes Benz C-200';
     endif;

     if ($car == "Mazda CX-5") :
          $total = 200000 * $duration;
     elseif ($car == "Civic Turbo") :
          $total = 300000 * $duration;
     elseif ($car == "Mercedes Benz C-200") :
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
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link" href="Home.php ">Home</a>
                    <a class="nav-item nav-link active" href="Booking.php">Booking</a>
               </div>
          </div>
     </nav>
     <div class="title text-center mt-4 mb-5">
          <h3 class="text-dark"><?= 'Thank You',' ',$name,' ','For Reserving' ?></h3>
          <h5 class="text-dark">Please Double Check Your Reservation Details</h5>
     </div>
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
     <footer style="position:absolute; bottom:0; width:100%;">
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
               Copyright 2022
               <a class="text-dark">Bimo_1202201138_SI4404</a>
          </div>
     </footer>
</body>

</html>