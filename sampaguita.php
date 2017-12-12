<?php include "server.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Sampaguita Residence Hall</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="custom.css"> 

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">UPD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="project.php">Home <span class="sr-only"></span></a>
            </li>
              <li class="nav-item dropdown active">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dormitories</a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="acacia.html">Acacia</a>
                  <a class="dropdown-item" href="ilang.php">Ilang-Ilang</a>
                  <a class="dropdown-item" href="internationalcenter.php">International Center</a>
                  <a class="dropdown-item" href="ipil.php">Ipil</a>
                  <a class="dropdown-item" href="kalayaan.php">Kalayaan</a>
                  <a class="dropdown-item" href="kamagong.php">Kamagong</a>
                  <a class="dropdown-item" href="kamia.php">Kamia</a>
                  <a class="dropdown-item" href="molave.php">Molave</a>
                  <a class="dropdown-item active" href="sampaguita.php">Sampaguita</a>
                  <a class="dropdown-item" href="sanggumay.php">Sanggumay</a>
                  <a class="dropdown-item" href="yakal.php">Yakal</a>
               </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="index.php">Directory <span class="sr-only"></span></a>
             </li>
          </ul>
        </div>
        <div class="well">
            <?php if (isset($_SESSION['username'])) { ?>
            <p>You are logged in as <strong><?php echo $_SESSION['username']; ?></strong><a href="server.php?logout=1" class="btn btn-warning">Logout</a></p>
            <?php } ?>
        </div>
      </nav>
 </header>
  <br>
  <br>
  <br>  

  <script type="text/javascript">
  document.write("<h1>Sampaguita Residence Hall</h1>")
  </script>

  <h3>Basic Information</h3>
  <p> 
  Location: Quirino Avenue
  <br>
  Category: female; undergraduate
  <br>
  Monthly Rate: P 225.00
  <br>
  Contact Number: 981-8500 loc. 4617, 4618
  </p>

  <img src="sampaguita.jpg"class="mx-auto d-block" style="width: 500px; height: 300px; alt="Responsive image">
  <p align="center">Source: jordanamarijaco.wordpress.com </p>
  
  <!-- FOOTER -->
  <footer class="container">
   <div>
      Reference: 
      <br>
      <a href="http://upd.edu.ph/students/student-accommodation/" class=btn btn-primary" role="button">UPD Website</a>
      <a href="http://upd.edu.ph/accommodations-in-up-diliman/" class=btn btn-primary" role="button">UPD Accomodation</a>
   </div>
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2017 University of the Philippines Diliman</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>