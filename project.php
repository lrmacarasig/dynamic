<?php include 'server.php'; include 'database.php' ;

  //Secure homepage
  if (!isset($_SESSION['username'])) {
    $_SESSION['warning'] = "You need to log-in to access this page";
    //redirect user
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>UPD Dormitories</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/custom.css"> 

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="#">UPD</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item">
               <a class="nav-link active" href="project.php">Home <span class="sr-only"></span></a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dormitories</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="acacia.php">Acacia</a>
                  <a class="dropdown-item" href="ilang.php">Ilang-Ilang</a>
                  <a class="dropdown-item" href="internationalcenter.php">International Center</a>
                  <a class="dropdown-item" href="ipil.php">Ipil</a>
                  <a class="dropdown-item" href="kalayaan.php">Kalayaan</a>
                  <a class="dropdown-item" href="kamagong.php">Kamagong</a>
                  <a class="dropdown-item" href="kamia.php">Kamia</a>
                  <a class="dropdown-item" href="molave.php">Molave</a>
                  <a class="dropdown-item" href="sampaguita.php">Sampaguita</a>
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
 
 <div class="container">

 <!-- Alert Message -->
  <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-success">
      <?php 
      echo $_SESSION['message'];
      unset ($_SESSION['message']);
      ?>
   </div>
  <?php } ?>

 <!-- Alert Message -->
  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
      <?php 
        echo $_SESSION['success'];
        unset ($_SESSION['success']);
      ?>
    </div>
  <?php } ?>

 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="img-fluid d-block w-100" src="upd.jpg" alt="Responsive image">
         <div class="container">
              <div class="carousel-caption text-left">
                <h1 style="color: maroon;">Welcome to UP Diliman!</h1>
                <p style="color: white;">Looking for a place to stay inside the campus? UP Dormitories are here to serve you.</p>
                <p><a class="btn btn-lg btn-primary" href="contact.php" role="button">Contact us</a></p>
              </div>
         </div>
      </div>

      <div class="carousel-item">
       <img class="img-fluid d-block w-100" src="upd.jpg" alt="Responsive image">
       <div class="container">
              <div class="carousel-caption text-left">
                <h1 style="color: maroon;">Welcome to UP Diliman!</h1>
                <p style="color: white;">Looking for a place to stay inside the campus? UP Dormitories are here to serve you.</p>
                <p><a class="btn btn-lg btn-primary" href="contact.php" role="button">Contact us</a></p>
              </div>
       </div>
     </div>

      <div class="carousel-item">
          <img class="img-fluid d-block w-100" src="upd.jpg" alt="Responsive image">
          <div class="container">
              <div class="carousel-caption text-left">
                <h1 style="color: maroon;">Welcome to UP Diliman!</h1>
                <p style="color: white;">Looking for a place to stay inside the campus? UP Dormitories are here to serve you.</p>
                <p><a class="btn btn-lg btn-primary" href="contact.php" role="button">Contact us</a></p>
              </div>
         </div>
      </div>
   </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
 </div>


  <!-- Marketing messaging and featurettes
 ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->


 <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
              <img class="rounded-circle" src="acacia.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>Acacia Residence</h2>
              <p>Located on Apacible Street </p>
              <p><a class="btn btn-secondary" href="acacia.php" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="kamagong.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>Kamagong Residence</h2>
              <p>Located on Emilio Jacinto Street </p>
              <p><a class="btn btn-secondary" href="kamagong.php" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="yakal.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>Yakal Residence</h2>
              <p>Located on Magsaysay Avenue</p>
              <p><a class="btn btn-secondary" href="yakal.php" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
       </div><!-- /.row -->
 </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017 University of the Philippines Diliman</p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>