<?php include('function.php');

session_start();
if (isset($_SESSION["username"])) {
            
    $username = $_SESSION["username"];
    session_write_close();
}

else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $message = "Log in om toegang te krijgen tot deze pagina";
    echo "<script>
alert('$message');
window.location.href='index.php';
</script>";
} 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Cook With Me </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


        <style>
    body{
      background-image: url("");
      background-size: cover; 
    }
    .nummer{
      background-color:lightgray;
    }
    .container_eigen{
      background-color: white;
    }
    .smakelijk{
      font-family:fantasy;
    }
    .blok_plaats{
      margin:30px;
    }
    .foto{
      margin:10px;
    }
  </style>
    </head>
    <body>
  <header class="header_section" style="background: black;">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
            Cook With Me
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recepten.php">Recepten</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
              
              </a>
             
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                 
                </button>
              </form>
              <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>

            </div>
          </div>
        </nav>
      </div>
    </header>




        <!-- Page Content-->
        <div class="container px-4 px-lg-5 container_eigen">
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-5">
                    <h1 class="font-weight-light"></h1>
                    <table class="table ">
                  <tr><br><br>
                    <th>Ingrediënten</th>
                    <th>Hoeveelheid</th>
                  </tr>
                </thead>
                <tbody >
                    <?php echo ingredienten_pizza($conn); ?>
                    </tbody>
                </table>
                </div>
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0 foto" src="images/f4.png" alt="..." /></div>

            </div>
            <div class="container_stappenplan">
              <div class="stappenplan">
                <div class='container_stappen'><strong>Bereidingstijd:</strong><span> 20 Minuten </span> - <strong> Aantal Personen:</strong><span> 3 Pers.</span></div><br>
                <div class='container_stappen'><strong>Aan De Slag:</strong><span> <br>Meng in een kom de eieren, de bloem, melk en een snufje zout. Als alle klontjes zijn verdwenen, kunnen de pannenkoeken gebakken worden. Verwarm een beetje boter of margarine in een pan. Wacht even totdat de pan goed warm is, en verdeel dan met een soeplepel wat beslag in het midden van de pan. Beweeg je pan een beetje heen en weer zodat het beslag over de hele pan verdeeld is. Bak de pannenkoek ongeveer 2-3 minuten totdat de bovenkant droog is. Draai de pannenkoek om en bak de pannenkoek nog ongeveer 1-2 minuten op de andere kant. Leg de pannenkoek op een bord en dek het bord af met een grote deksel. Bak zo de rest van de pannenkoeken. Vergeet niet om iedere keer een beetje extra boter of margarine in de pan te doen, voordat je een nieuwe pannenkoek bakt.</div> <br>


 </span></div>
</div>
</div>

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->




              
   