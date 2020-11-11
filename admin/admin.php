<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SanServ-Admin</title>

  <!-- Custom CSS  -->
  <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">

  <!-- favicon  -->
  <link rel="icon" href="../images/logo.png" type="image/png" sizes="16x16">

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Font Awsome CDN  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Google Fonts CDN -->
  <link href="https://fonts.googleapis.com/css2?family=Molle:ital@1&display=swap" rel="stylesheet">

</head>

<body>

  <?php
  // Initialize the session
  session_start();

  // Check if the user is logged in, if not then redirect him to login page
  if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
  }
  ?>

  <nav class="navigation-bar">
    <div class="row">
      <div class="col-lg-8 admin-heading">
        <h1>Admin</h1>
      </div>
      <div class="col-lg-2">
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
      </div>
      <div class="col-lg-2">
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
      </div>
    </div>
  </nav>


  <!-- Content Area / Admin Panel  -->
  <div class="row panel">
    <div class="col-lg-3">
      <section class="dashboard">
        <!-- <h1>Dashboard</h1> -->
        <ul>
          <li><a href="admin.php"><i class="fa fa-home"><span>Indivisual House</span></i></a></li>
          <li><a href="society-admin.php"><i class="fa fa-building"><span>Residential Society</span></i></a></li>
          <li><a href="office-admin.php"><i class="fa fa-briefcase"><span>Co-Operate Office</span></i></a></li>
          <li><a href="school-admin.php"><i class="fa fa-graduation-cap"><span>School & Colleges</span></i></a></li>
          <li><a href="hotel-admin.php"><i class="fa fa-cutlery"><span>Hotel & Restaurant</span></i></a></li>
          <li><a href="car-admin.php"><i class="fa fa-car"><span>Car & Jeep</span></i></a></li>
          <li><a href="hospital-admin.php"><i class="fa fa-h-square"><span>Hospital & Clinic</span></i></a></li>
        </ul>
      </section>
    </div>
    <div class="col-lg-8">
      <section class="content">
        <!-- <h1>Content</h1> -->

        <!-- PHP section  -->

        <?php
        require_once "../connection.php";   // connection file to connect to the database

        $query = "SELECT * FROM `houseservice`";   // query for select all the items from database
        $data = mysqli_query($connection, $query);       // fire the query
        // echo $data . "$data";
        $totalRecord = mysqli_num_rows($data);         // check for total no of records in databse
        // echo $totalRecord;
        if ($totalRecord == 0) {
          echo "<p style='color:red;text-align:center; margin-top:10px;margin-bottom:10px;border:2px solid pink;border-radius:2px; font-size:24px; background-color:pink;'><strong>" . "No Record Found" . "</strong></p>";
        }
        ?>

        <!-- Table to show the data from databse  -->
        <h1 class="table-head">House Service</h1>
        <table>
          <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact Time</th>
            <th>Contact Date</th>
            <th>Special Comment</th>
            <th>Operations</th>
          </tr>

          <?php
          while ($result = mysqli_fetch_assoc($data)) {
            // header("refresh: 5");
            echo "
                <tr>
                  <td>" . $result['name'] . "</td>
                  <td>" . $result['mobile'] . "</td>
                  <td>" . $result['email'] . "</td>
                  <td>" . $result['address'] . "</td>
                  <td>" . $result['time'] . "</td>
                  <td>" . $result['date'] . "</td>
                  <td>" . $result['comment'] . "</td>
                  <td><a href='delete/delete-house.php?rn=$result[mobile]' onclick = 'return DeleteRecord()'><i style='color:red;font-size:24px;' class='fa fa-trash'></i></a></h4>
                  <a href='update/update-house.php?rn=$result[name]&nm=$result[mobile]&cl=$result[email]&ad=$result[address]&tm=$result[time]&dt=$result[date]&cm=$result[comment]'><i style='color:blue;font-size:24px;margin-left:25px;' class='fa fa-pencil'></i></a></td>
                </tr>
                ";
          }
          ?>

        </table>
      </section>
    </div>
  </div>

  <!-- Footer Section  -->
  <div class="row">
    <div class="col-lg-12">
      <footer>
        <h4>SanServ @2020 Admin-Panel</h4>
      </footer>
    </div>
  </div>




  <script>
    function DeleteRecord() {
      confirm("Do you want to delete");
    }
  </script>







  <!-- Bootstrap Scripts  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>