<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>

    <link rel="stylesheet" href="css/contactUs.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navigationBar">

        <a class="navbar-brand" href="#">SANSERV</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="services/houseService.php">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.html">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="contactUs.html">Contact Us</a>
                </li>

            </ul>

            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">APPOINTMENT</button>
            </form>
        </div>
    </nav>

    <section id="section1">
        <div class="py-5 my-5">
            <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 px-5 details">
                    <div id="detailsBox">
                        <h4 id="head">Contact Details</h4>
                        <ul>
                            <li class="py-4">Email : senserv@gmail.com</li>
                            <li class="py-4">Phone No : 9999999999 </li>
                            <li class="py-4">Address : Uttar Pradesh, India</li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-12 mx-5">
                    <div id="formBox">
                        <div>
                            <h4 class="text-center">FEEDBACK FORM</h4>
                        </div>

                        <div>
                            <form action="" method="post">

                                <div class="form-group">
                                    <label> Username </label>
                                    <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter User Name">
                                </div>

                                <div class="form-group">
                                    <label> E-mail </label>
                                    <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Enter Email ID">
                                </div>

                                <!-- <div class="form-group">
                                    <label> Mobile Number </label>
                                    <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter Mobile Number">
                                </div> -->

                                <div class="form-group">
                                    <label> Comments </label>
                                    <textarea class="form-control" name="comment"></textarea>
                                </div>

                                <br>
                                <button type="submit" name="send-mail" id="submit-btn" class="btn btn-secondary">Submit</button>
                                <button type="reset" id="reset-btn" class="btn btn-secondary">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <footer>

        <section class="sec-1">
            <section class="link1">
                <h2>Categories</h2>

                <ul>
                    <li><a href="#">Sanitization</a></li>
                    <li><a href="#">Pesticides</a></li>
                    <li><a href="#">Disinfection</a></li>

                </ul>
            </section>

            <section class="link2">
                <h2>Quick Links</h2>

                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#"> Contribute </a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Services</a></li>
                    <!-- <li><a href="#">Disclaimer</a></li> -->
                </ul>
            </section>

            <section class="link3">
                <h2>Contact Us</h2>

                <ul>
                    <li><i class="fa fa-home"></i><span> Uttar Pradesh, India</span></li>
                    <li><i class="fa fa-envelope"></i><span> senserv@gmail.com</span></li>
                    <li><i class="fa fa-phone-square"></i><span> Mobile : 9999999999</span></li>
                    <li><i class="fa fa-facebook-official"></i><a href="#"> senserv </a></li>
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
if (isset($_POST['send-mail'])) {
    require 'PHPMailerAutoload.php';
    require 'credentials.php';

    $mail = new PHPMailer;

    // $mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    // TCP port to connect to
    $mail->AddReplyTo($_POST['email']);
    $mail->From = EMAIL;
    $mail->FromName = $_POST['user'];
    $mail->addAddress(EMAIL, 'SanSevAdmin');     // Add a recipient


    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Feedback from SanServ';
    $mail->Body    = $_POST['comment'];
    // $mail->AltBody = 

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>