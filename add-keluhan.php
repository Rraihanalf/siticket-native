<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
<div style="background: #ffc107;">
<div class="" style="background: #383838;
  border-radius: 0 0 350px 0;   position: relative;
  min-height: 100vh;
  display: flex;
  flex-direction: column;">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
        <img class="mr-3" src="img/logo.png" width="50px" alt="UNISKA">  
        <a class="navbar-brand" href="homepage.php">
            <span>
              UNITED TRACTORS
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <!-- <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a> -->
              </li>
            </ul>
          
           
        <!-- <li class="nav-item">
          <a class=" btn btn-light"href="?page=login">Login</a>
        </li> -->
      
          </div>
        </nav>

      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
   <div class="container">

   <div class="card">
  <h5 class="card-header bg-warning">Sampaikan Laporan Anda</h5>
  <div class="card-body">
    <?php
    include 'ticket/add.php';
    ?>
  </div>
</div>
   </div>

    <!-- end slider section -->
  </div>
</div>







  


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  document.getElementById("cari").addEventListener("click",function(){
    document.getElementById("form").classList.toggle("d-none");
  })
</script>