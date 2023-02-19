<?php include 'config.php'; 
session_start();?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOGJA HERITAGE ORDER</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="order.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Ini navbar website -->
    <div>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <div class="kiri"><img onclick="window.location.href = '../index.php'" src="../logo.png" alt="" style="width: 30px;height:40px;margin-left:10px;"></div>
          <a class="navbar-brand" href="../index.php">JOGJA HERITAGE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link"href="index.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="order/order.php"><i class="fa fa-hotel"></i> Book Now</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact/contact_us.php"><i class="fa fa-phone-square"></i> Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
      </nav>

      <!-- Ini adalah card bagian kanan -->
      <div class="container text-center">
        <div class="row">
          <div class="col order-last" style="position:absolute;padding-left: 65rem;">
            <div class="cardright">
            <div class="card" id="tombol" style="width: 28rem;">
              <img id="gambarplaceholder" src="gambar/small.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" id="judul">Small Villa</h5>
                <p class="card-text" id="deskripsi">Small vila was designed to be an open plan living space, but with a luxurious feel. The design will </p>
                </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item" id="harga">Rp 140.000</li>
                <li class="list-group-item" id="orang">2 Orang</li>
                <li class="list-group-item" id="bed">Big Bed</li>
              </ul>
              <div class="card-body"id="tombols">
              <div class="d-grid gap-2 col-6 mx-auto" >
              <button id="debooking" class="btn btn-success" type="button" onclick="muncul()">Book Now</button>
            </div>
              </div>
          
            </div>
          </div>
          </div>

          <!-- Ini adalah 3 cards pada bagian kiri -->
          <div class="col"> <!--Ini adalah card untuk small villa-->
            <div class="container-card">

              <div class="container-cards" id="totalcards" style="display:block ;">
              <div class="col">
                <div class="card mb-3" style="max-width: 800px;width: 800px">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="gambar/small.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8" id="card1_1">
                      <div class="card-body">
                      <?php $sql = mysqli_query($conn, 'SELECT * FROM tipe_villa where id = 1');while ($data= mysqli_fetch_array($sql)){
                       echo "<h5 class='card-title'>"; echo $data['tipe'];echo "</h5>";
                       echo "<p class='card-text'>";echo $data['deskripsi']; echo "</p>";
                      } ?>
                       <div class="d-grid gap-2 col-6 mx-auto">
                        <a  class="btn btn-success" onclick="card1()" onmouseenter="card1_1()" onmouseleave="card1_1_leave()">Details</a>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
    
              <!-- Ini card Medium  villa -->
              <div class="col">
                <div class="card mb-3" style="max-width: 800px;width: 800px">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="gambar/medium.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8" id="card2_2">
                      <div class="card-body">
                      <?php $sql = mysqli_query($conn, 'SELECT * FROM tipe_villa where id = 2');while ($data= mysqli_fetch_array($sql)){
                       echo "<h5 class='card-title'>"; echo $data['tipe'];echo "</h5>";
                       echo "<p class='card-text'>";echo $data['deskripsi']; echo "</p>";
                      } ?>
                       <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="#" class="btn btn-success" onclick="card2()" onmouseenter="card2_2()" onmouseleave="card2_2_leave()">Details</a>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
                      
              <!-- Ini card huge villa -->
              <div class="col">
                <div class="card mb-3" style="max-width: 800px; width: 800px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="gambar/huge.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8" id="card3_3">
                      <div class="card-body">
                      <?php $sql = mysqli_query($conn, 'SELECT * FROM tipe_villa where id = 3');while ($data= mysqli_fetch_array($sql)){
                       echo "<h5 class='card-title'>"; echo $data['tipe'];echo "</h5>";
                       echo "<p class='card-text'>";echo $data['deskripsi']; echo "</p>";
                      } ?>
                       <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="#" class="btn btn-success" onclick="card3()" onmouseenter="card3_3()" onmouseleave="card3_3_leave()">Details</a>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
              
            </div>

            <!-- Ini form untuk fill data order -->
    <div class="form" id="forms" style="top: 5px;margin-top: 80px;position: absolute;display:none">
    <div class="card" style="width: 800px;">
            <form class="form-horizontal" style="margin-left:20px ;" action="cekredeem.php" method="POST">
        
            <div class="col-md-7" style="margin-top: 10px;width: 40rem;text-align: start;">
                <label for="validationCustom03" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom03" required placeholder="Enter Name" name="nama">
                <div class="valid-feedback">
                  Nice!
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">City:</label>
                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" placeholder="Enter City" name="kota" >
                    </div>
                  </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" style="width:50px ;" for="pwd">Phone:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter Phone Number" name="notelp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" style="width:50px ;" for="pwd">KTP:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" placeholder="KTP" name="ktp">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  <label>Jenis Pembayaran: </label>
                  <select class="form-select" aria-label="Default select example">
                  <option selected>Select Payment Options</option>
                  <option value="1">Gopay</option>
                  <option value="2">DANA</option>
                  <option value="3">Credit Card</option>
                  <option value="4">Cash</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" style="padding-bottom:10px ;">
                  <div class="col-sm-offset-2 col-sm-10">
                    <section>
                      <img id="slides" src="gambar/gopaylogo.png" style="width:30px ; height:30px; margin-top:10px">
                    </section>
                  </div>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="tphide" name="cek" id="flexCheckDefault" checked="checked" onClick="toggleVisibility(this)">
                <label class="form-check-label" for="flexCheckDefault">
                  Check if you have a redeem code
                </label>
              </div>
              <div id="redeemdiv">
                  <label class="control-label col-sm-2" style="width:50px ;width:500px" for="pwd">Redeem Codes:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="pwd" placeholder="Redeem" name="tp">
                  </div>
              </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10" style="margin-top:5px ;">
                  <div class="d-grid gap-2">
                  <input type="submit" class="btn btn-success" name="submit" style="margin-bottom:20px ;"></div>
                  </div>
                </div>
              </form>
            </div>
        <div class="card-body">
        </div>
      </div>
    </div>
    
            
    <!-- Ini Footer -->
    <nav class="navbar fixed-bottom navbar-dark bg-dark" style="height: 10% ;">

          <div class="Buttons" style="padding-left: 35% ;">

            <a class="btn btn-outline-primary" href="#!" role="button"
            >Facebook</a>

            <!-- Twitter -->
            <a class="btn btn-outline-primary" href="#!" role="button"
            >Twiter </a>

            <!-- Google -->
            <a class="btn btn-outline-success" href="#!" role="button"
            >Whatsapp </a>

            <!-- Instagram -->
            <a class="btn btn-outline-danger" href="#!" role="button"
            > Instagram </a>

          </div>

      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

      <a class="text-white" href="https://mdbootstrap.com/"><div id="bounce"> <i class="fa fa-circle" style="color:red ;"> <i class="fa fa-circle" style="color:green ;"></i> <i class="fa fa-circle" style="color:blue ;"></i></i></div></a>
      </div>
      </nav>

    
            
</html>