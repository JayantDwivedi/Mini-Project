<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANSERV | Services | Office Service</title>

    <!-- Custom Bootstrap  -->
    <link rel="stylesheet" href="../css/socityServices.css?v=<?php echo time(); ?>">

    <!-- favicon  -->
    <link rel="icon" href="../images/logo.png" type="image/png" sizes="16x16">

    <!-- Bootstrap CDN  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awsome  -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts cdn  -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">


</head>

<body>

    <!-- Navigation Bar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navigationBar">

        <a class="navbar-brand" href="../index.html">SANSERV</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="../services/houseService.php">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../aboutUs.html">About Us</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="../contactUs.php">Contact Us</a>
                </li>

            </ul>

            <form class="form-inline my-2 my-lg-0" action="houseService.php">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">APPOINTMENT</button>
            </form>
        </div>
    </nav>

    <!-- Content Part  -->
    <section class="background-img">
        <div class="row">

            <div class="col-lg-2 menu-bar">
                <div id="navigationBox">
                    <h4 class="head">Quick Links</h4>
                    <ul>
                        <li class="py-4 my-2"><a href="houseService.php"> House Sanitization </a></li>
                        <li class="py-4 my-2"><a href="socityService.php">Society Sanitization </a></li>
                        <li class="py-4 my-2"><a href="officeService.php">Office Sanitization </a></li>
                        <li class="py-4 my-2"><a href="wareHouseService.php">Warehouse Sanitization </a></li>
                        <li class="py-4 my-2"><a href="schoolService.php">School Sanitization </a></li>
                        <li class="py-4 my-2"><a href="hospitalService.php">Hospital Sanitization </a></li>
                        <li class="py-4 my-2"><a href="hotelService.php">Hotel Sanitization </a></li>
                        <li class="py-4 my-4"><a href="carService.php">Car Sanitization </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-10 service-tag">

                <h1 id="head1">Services</h1>

                <div class="row">
                    <div class="col-lg-6 form-sec">
                        <div id="formBox">
                            <div>
                                <h2 class="text-center head">OFFICE SERVICE FORM</h2>
                            </div>

                            <div>
                                <form action="" method="post">

                                    <div class="form-group">
                                        <label> Name </label>
                                        <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter Name">
                                        <?php
                                            if (isset($_POST['b1'])) {
                                                $name = $_POST['name'];
                                                $pattern = "/^[A-Za-z]+$/";
                                                if ($name == "") {
                                                    echo "<small>Enter valid Name</small>";
                                                }
                                                else {
                                                    if(!(preg_match($pattern,$name))) {
                                                        echo "<small>Enter valid Name</small>"; 
                                                    }
                                                }
                                                
                                            }
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <label> E-mail </label>
                                        <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Email ID">
                                        <?php
                                            if (isset($_POST['b1'])) {
                                                $email = $_POST['email'];
                                                $pattern = "/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/";
                                                if ($email == "") {
                                                    echo "<small>Enter valid Email</small>";
                                                }
                                                else {
                                                    if(!(preg_match($pattern,$email))) {
                                                        echo "<small>Enter valid Email</small>";
                                                    }
                                                }
                                                
                                            }
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <label> Mobile Number </label>
                                        <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter Mobile Number">
                                        <?php
                                            if (isset($_POST['b1'])) {
                                                $mobile = $_POST['mobile'];
                                                $pattern = "/^[6-9]\d{9}$/";
                                                if ($mobile == "") {
                                                    echo "<small>Enter mobile no with 10 digits</small>";
                                                }
                                                else {
                                                    if(!(preg_match($pattern,$mobile))) {
                                                        echo "<small>Provide proper 10 digits</small>";
                                                    }
                                                }
                                                
                                            }
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <label> Address </label>
                                        <input type="text" name="address" autocomplete="off" class="form-control" placeholder="Enter Address">
                                    </div>


                                    <div class="form-group">
                                        <label> Appointment Date </label>
                                        <input type="date" name="date" autocomplete="off" class="form-control" placeholder="Enter Appointment Date">
                                    </div>

                                    <div class="form-group">
                                        <label> Contact Time </label>
                                        <input type="time" name="time" autocomplete="off" class="form-control" placeholder="Enter Contact Time">

                                    </div>



                                    <div class="form-group">
                                        <label> Area of Office in Square Feet </label>
                                        <input type="text" name="area" autocomplete="off" class="form-control" placeholder="Enter Area of Office">
                                    </div>

                                    <label>Comments </label>
                                    <br>
                                    <textarea name="comment" id="" cols="74"></textarea>

                                    <br><br>
                                    <button type="submit" name="b1" class="btn btn-secondary">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 img-sec">
                        <!-- <h1 class="text-center">Image</h1> -->
                        <img src="../images/officeservice.jpg" alt="" class="img-fluid mt-5 pt-5" id="image1">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section  -->

    <footer id="footer">

        <section class="sec-1">
            <section class="link1">
                <h2>Categories</h2>

                <ul>
                    <li><a href="#">Sanitization</a></li>
                    <!-- <li><a href="#">Pesticides</a></li> -->
                    <li><a href="#">Disinfection</a></li>    
                
                </ul>
            </section>

            <section class="link2">
                <h2>Quick Links</h2>

                <ul>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <!-- <li><a href="#"> Contribute </a></li> -->
                    <li><a href="privacyPolicies.html">Privacy Policy</a></li>
                    <li><a href="services/houseService.php">Services</a></li>
                    <!-- <li><a href="#">Disclaimer</a></li> -->
                </ul>
            </section>

            <section class="link3">
                <h2>Contact Us</h2>

                <ul>
                    <li><i class="fa fa-home"></i><span> Uttar Pradesh, India</span></li>
                    <li><a href="mailto:jayant.gla_cs18@gla.ac.in"><i class="fa fa-envelope"></i><span>
                                senserv@gmail.com</span></a></li>
                    <li><a href="tel:7060561783"><i class="fa fa-phone-square"></i><span> Mobile : 9999999999</span></a>
                    </li>
                    <li><a href="www.facebook.com"><i class="fa fa-facebook-official"></i><span> SanServ</span></a></li>
                </ul>
            </section>

            <section class="sec-2">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </section>

            
        </section>
        <p class="p-3 bg-dark text-white text-center"> © SANSERV | 2020 </p>


    </footer>



</body>

</html>
<?php
include '../connection.php';

if (isset($_POST['b1'])) {

    $name = $_POST['user'];
    $email = $_POST['email'];
    $mob = $_POST['mobile'];
    $address = $_POST['address'];
    $ts = $_POST['time'];
    $ds = $_POST['date'];
    $area = $_POST['area'];
    $comments = $_POST['comment'];

    if ($name != "" && $email != "" && $mob != "" && $address != "" && $ts != "" && $ds != "" && $comments != "") {
        $query = "insert into officeservice (name,email,mobile,address,time,date,area,comment) values('$name','$email','$mob','$address','$ts','$ds','$area','$comments')";
        $data = mysqli_query($connection, $query) or die(mysqli_error($connection));
        if ($data) {
            echo "<script>alert('We get Your Data')</script>";
        }
        else {
            echo "<script>alert('Fill Form Again')</script>";
        }
    } else {
        echo "<script>alert('Fill all the Feilds')</script>";
    }
}
?>