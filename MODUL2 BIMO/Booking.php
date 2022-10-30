<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <script>
          function setPicture() {
               var banner = document.getElementById("tipe");
               var value = banner.options[banner.selectedIndex].value;
               $('img').attr("src", value);
          }
     </script>
     <?php
     if (empty($_GET['car'])) :
          $car = "Mazda CX-5";
          $imgUrl = "mazda.png";
     else :
          $car = $_GET['car'];
     endif;

     if ($car == "Mazda CX-5") :
          $imgUrl = "mazda.png";
     elseif ($car == "Civic Turbo") :
          $imgUrl = "civic.png";
     elseif ($car == "Mercedes Benz C-200") :
          $imgUrl = "merci.png";
     endif;
     ?>
     <title>Booking Kendaraan</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link" href="home.php ">Home</a>
                    <a class="nav-item nav-link active" href="booking.php">Booking</a>
               </div>
          </div>
     </nav>

     <div class="title text-center mt-3">
          <h3 class="text-dark ">Rent Your Car Now!</h3>
     </div>

     <div class="container">
          <div class="row g-0">
               <div class="col-md-4 align-self-center">
                    <img src="<?= $imgUrl; ?>" onchange="setPicture()" class="img-fluid rounded-start" alt="image-form">
               </div>    
               <div class="col-md-8">
                    <div class="card-body">
                         <form action="myBooking.php" method="POST">
                              <div class="form-group mb-3">
                                   <label for="nama">Name</label>
                                   <input class="form-control" type="text" name="nama" id="nama" value="Bimo_1202201138" readonly>
                              </div>

                              <div class="form-group mb-3">
                                   <label for="nama">Book Date</label>
                                   <input type="date" class="form-control" name="checkin">
                              </div>

                              <div class="form-group mb-3">
                                   <label for="nama">Start Time</label>
                                   <input type="time" class="form-control" name="starttime">
                              </div>

                              <div class="form-group mb-3">
                                   <label for="nama">Duration Day(s)</label>
                                   <input type="number" class="form-control" name="duration">
                              </div>

                              <div class="form-group mb-3">
                              <label for="car">Car Type</label>
                              <?php if (empty($_GET['car'])) : ?>
                                   <select class="form-control" name="car" id="tipe" onchange="setPicture()">
                                        <option value="mazda.png">
                                             Mazda CX-5</option>
                                        <option value="civic.png">
                                             Civic Turbo</option>
                                        <option value="merci.png">
                                             Mercedes Benz C-200</option>
                                   </select>

                              <?php else : ?>
                                   <input type="text" class="form-control" value=<?= $_GET['car'] ?> name="car" src readonly>
                              <?php endif; ?>
                              </div>

                              <div class="form-group mb-3">
                                   <label for="nomorhp">Phone Number</label>
                                   <input type="text" class="form-control" name="nomor">
                              </div>

                              <p class="mb-0">Add Service(s)</p>
                              <div class="form-group mb-3">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="service1" value="HealthProtocol">
                                        <label class="form-check-label" for="Health Protocol">
                                             Health Protocol / Rp50.000
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="service2" value="Driver">
                                        <label class="form-check-label" for="Driver">
                                             Driver / Rp100.000
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="service3" value="FuelFilled">
                                        <label class="form-check-label" for="Fuel Filled">
                                             Fuel Filled / Rp250.000
                                        </label>
                                   </div>
                              </div>
                              <div class="form-group mb-3">
                                   <button class="btn btn-block btn-danger" type="submit" value="send">Book</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
     <footer>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
               Copyright 2022
               <a class="text-dark">Bimo_1202201138_SI4404</a>
          </div>
     </footer>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>