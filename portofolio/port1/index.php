<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JOGJA HERITAGE</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
</head>

<body>

  <h1>Hello, world!</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Ini navbar sitenya -->
  <div>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <div class="kiri"><img src="logo.png" alt="" style="width: 30px;height:40px;margin-left:10px;"></div>
        <a class="navbar-brand" href="#">JOGJA HERITAGE</a>
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
                <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order/order.php"><i class="fa fa-hotel"></i> Book Now</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order/contact/contact_us.php"><i class="fa fa-phone-square"></i> Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </div>
  </nav>

  <!-- Ini bagian gambar slide -->
  <div class="bar">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Ini bagian pertama gambar slide -->
      <div class="carousel-inner" style="height:30rem ;">
        <div class="carousel-item active">
          <img src="slide1.png" class="d-block w-100" alt="..." style="height:30rem ;">
          <div class="carousel-caption d-none d-md-block">
            <button onclick="window.location.href = 'order/order.php'" type="button" class="btn btn-outline-light" style="border:3px solid ;">Book Now</button>
            <p>Villa is a spacious and comfortable room located in the heart of the city. The hotel offers a collection of amenities for the discerning guests.</p>
          </div>
        </div>
        <!-- Ini bagian kedua gambar slide -->
        <div class="carousel-item">
          <img src="slide2.png" class="d-block w-100" alt="..." style="height:30rem ;">
          <div class="carousel-caption d-none d-md-block">
            <button onclick="window.location.href = 'index.php#intro'" type="button" class="btn btn-outline-light" style="border:3px solid ;">Learn More</button>
            <p>Get the best information about Villa, Room, Deluxe. This is a detailed beginner's guide.</p>
          </div>
        </div>
        <!-- Ini bagian ketiga gambar slide -->
        <div class="carousel-item">
          <img src="slide3.png" class="d-block w-100" alt="..." style="height:30rem ;">
          <div class="carousel-caption d-none d-md-block">
            <button onclick="window.location.href = 'order/contact/contact_us.php'" type="button" class="btn btn-outline-light" style="border:3px solid ;margin-left:20px; margin-right:20px">Contact Us</button>
            <p>Villa has been designed to provide a luxurious yet contemporary accommodation experience. Each villa is elegantly crafted with a blend of modern and traditional design elements.</p>
          </div>
        </div>
      </div>
      <!-- Ini button untuk mengganti slides -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Ini adalah deskripsi Jogja heritage -->
    <section id="intro">
      <div class="intro" style="text-align:center ;">
        <h1><strong>JOGJA HERITAGE SITE</strong></h1>
        <h2>A masterpiece without comparison</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>
    <!-- Ini bagian penjelasan fasilitas villa  -->
    <section id="isi">
      <div class="poll-content">
        <div class="poll">
          <img src="park.jpg">
        </div>
        <div class="text-poll">
          <h1>ELEGANT SWIMMING POLL</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>



      <div class="food-content">
        <div class="food">
          <img src="foodcrop.jpg">
        </div>
        <div class="text-food">
          <h1>HIGH QUALITY SERVING</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

  </div>
  </section>

  <!-- Ini bagian Footer -->
  <nav class="navbar fixed-bottom navbar-dark bg-dark" style="height: 10% ;">

    <div class="Buttons" style="padding-left: 35% ;">

      <a class="btn btn-outline-primary" href="#!" role="button">Facebook</a>

      <!-- Twitter -->
      <a class="btn btn-outline-primary" href="#!" role="button">Twiter </a>

      <!-- Google -->
      <a class="btn btn-outline-success" href="#!" role="button">Whatsapp </a>

      <!-- Instagram -->
      <a class="btn btn-outline-danger" href="#!" role="button"> Instagram </a>

    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

      <a class="text-white" href="https://mdbootstrap.com/">
        <div id="bounce"> <i class="fa fa-circle" style="color:red ;"> <i class="fa fa-circle" style="color:green ;"></i> <i class="fa fa-circle" style="color:blue ;"></i></i></div>
      </a>
    </div>
  </nav>



  <!-- Code ini untuk Bootstrap -->
  <script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
      (function() {
        function refreshCSS() {
          var sheets = [].slice.call(document.getElementsByTagName("link"));
          var head = document.getElementsByTagName("head")[0];
          for (var i = 0; i < sheets.length; ++i) {
            var elem = sheets[i];
            var parent = elem.parentElement || head;
            parent.removeChild(elem);
            var rel = elem.rel;
            if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
              var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
              elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
            }
            parent.appendChild(elem);
          }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function(msg) {
          if (msg.data == 'reload') window.location.reload();
          else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
          console.log('Live reload enabled.');
          sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
      })();
    } else {
      console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
  </script>
</body>

</html>