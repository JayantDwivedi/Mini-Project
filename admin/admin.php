<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SanServ-Admin</title>

  <!-- Custom CSS  -->
  <link rel="stylesheet" href="../css/admin.css">

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Font Awsome CDN  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <style>
    td,
    th {
      padding: 10px;
      border: 2px solid #17A2B8;
    }

    tr:hover {
      background-color: gray;

    }
  </style>
</head>

<body>

  <!-- Heading Area  -->
  <div class="row">
    <div class="col-lg-12">
      <nav class="navigation-bar">
        <h1>Admin</h1>
      </nav>
    </div>
  </div>


  <!-- Content Area / Admin Panel  -->
  <div class="row panel">
    <div class="col-lg-3">
      <section class="dashboard">
        <!-- <h1>Dashboard</h1> -->
        <ul>
          <li><a href="#"><i class="fa fa-home"><span>Indivisual House</span></i></a></li>
          <li><a href="#"><i class="fa fa-building"><span>Residential Society</span></i></a></li>
          <li><a href="#"><i class="fa fa-briefcase"><span>Co-Operate Office</span></i></a></li>
          <li><a href="#"><i class="fa fa-graduation-cap"><span>School & Colleges</span></i></a></li>
          <li><a href="#"><i class="fa fa-cutlery"><span>Hotel & Restaurant</span></i></a></li>
          <li><a href="#"><i class="fa fa-car"><span>Car & Jeep</span></i></a></li>
          <li><a href="#"><i class="fa fa-h-square"><span>Hospital & Clinic</span></i></a></li>
        </ul>
      </section>
    </div>
    <div class="col-lg-8">
      <section class="content">
        <!-- <h1>Content</h1> -->

        <!-- PHP section  -->

        <?php
        require_once "../connection.php";   // connection file to connect to the database

        $query = "SELECT * FROM `indivisual-house`";   // query for select all the items from database
        $data = mysqli_query($connection, $query);       // fire the query
        // echo $data . "$data";
        $totalRecord = mysqli_num_rows($data);         // check for total no of records in databse
        echo $totalRecord;
        if ($totalRecord == 0) {
          echo "No record found";
        }
        ?>

        <!-- Table to show the data from databse  -->
        <table>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
          </tr>

          <?php
          while ($result = mysqli_fetch_assoc($data)) {
            echo "
                <tr>
                  <td>" . $result['name'] . "</td>
                  <td>" . $result['email'] . "</td>
                  <td>" . $result['address'] . "</td>
                </tr>
                ";
          }
          ?>

        </table>
      </section>
    </div>
  </div>

  <!-- Footer Section  -->







  <!-- Bootstrap Scripts  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>