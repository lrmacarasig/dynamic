<?php include 'database.php';
  

  //Check if Edit button is clicked
  if (isset($_GET['edit'])) {
      $id=$_GET['edit'];

      //Prepare query
      $query = "SELECT * FROM students WHERE id=$id";
      //Perform query
      $edit_record = mysqli_query($con,$query);
      //Convert record into an array
      $edit_array = mysqli_fetch_array($edit_record);

      //Assign values
      $username = $edit_array['username'];
      $email = $edit_array['email'];

      //Set edit state to true
      $edit_state = TRUE;

  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>UPD Dormitories</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
               <a class="nav-link" href="project.php">Home <span class="sr-only"></span></a>
             </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
             </li>
             <li class="nav-item">
               <a class="nav-link active" href="index.php">Directory <span class="sr-only"></span></a>
             </li>
           </ul>     
         </div>
     </nav>
          <div class="well">
            <?php if (isset($_SESSION['username'])) { ?>
            <p>You are logged in as <strong><?php echo $_SESSION['username']; ?></strong><a href="server.php?logout=1" class="btn btn-warning">Logout</a></p>
            <?php } ?>
         </div>
 </header>

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
  <br>


  <!-- Form -->
  <div class="well">
    <h2 class="text-center h_title"><p class="p_title">Add Student Information<p></h2>
      <form method="POST" action="database.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="jane" value="<?php echo $username; ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="jdoe@gmail.com" value="<?php echo $email; ?>" required>
          </div>
        </div>
        
        <?php if($edit_state) { ?>
          <button type="submit" class="btn btn-primary" name="update">Update</button><a class="btn btn-warning" href="index.php">Cancel</a>
        <?php } else { ?>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <?php } ?>
      </form>
  </div>
  <!-- End of Form -->

  <!-- Search bar-->
  <div class="search-container">
    <form action="index.php" method="POST">
      <input type="text" placeholder="Search..." name="query">
      <button type="submit" name="search" class="btn btn-primary">Search</button>
    </form>
  </div>
<br>
<br>

<!-- Display Search Results -->
<?php if (isset($student_results)) { ?>
  <div class="well">
    <p><h2>Search Results</h2></p>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;
         while ($row = mysqli_fetch_array($student_results)) { ?>
        <tr>
          <td><?php echo ++$i; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['email']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <?php } ?>


  <!-- Display of Data in a Table Format -->
  <div class="well">
    <p><h2>View Student Information</h2></p>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $id = 0;
         while ($row = mysqli_fetch_array($student_records)) { ?>
        <tr>
          <td><?php echo ++$id; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><a class="btn btn-warning" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a>
              <a class="btn btn-danger" href="index.php?del=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    
      </tbody>
    </table>
  </div>
    <!-- End of Display of Data in a Table Format -->
</div>
</body>
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017 University of the Philippines Diliman</p>
  </footer>
</html>