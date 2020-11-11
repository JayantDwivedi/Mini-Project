<?php
include_once "../../connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon  -->
    <link rel="icon" href="../../images/logo.png" type="image/png" sizes="16x16">

    <!-- CSS  -->
    <link rel="stylesheet" href="../../css/update.css">

    <!-- Font Awsome CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Edit-School-Records</title>
</head>

<body>
    <form action="" method="GET">
        <label for="">Name <i class="fa fa-user" aria-hidden="true"></i></label>
        <input type="text" name="name" value="<?php echo $_GET['rn']; ?>"><br></br>

        <label for="">Mobile <i class="fa fa-mobile" aria-hidden="true"></i></label>
        <input type="text" name="mobile" readonly value="<?php echo $_GET['nm']; ?>"><br></br>

        <label for="">Email <i class="fa fa-envelope" aria-hidden="true"></i></label>
        <input type="text" name="email" value="<?php echo $_GET['cl']; ?>"><br></br>

        <label for="">Address <i class="fa fa-map-marker" aria-hidden="true"></i></label>
        <input type="text" name="address" value="<?php echo $_GET['ad']; ?>"><br></br>

        <label for="">Time <i class="fa fa-clock-o" aria-hidden="true"></i></label>
        <input type="time" name="time" value="<?php echo $_GET['tm']; ?>"><br></br>

        <label for="">Date <i class="fa fa-calendar" aria-hidden="true"></i></label>
        <input type="date" name="date" value="<?php echo $_GET['dt']; ?>"><br></br>

        <label for="">Rooms <i class="fa fa-calendar" aria-hidden="true"></i></label>
        <input type="numbers" name="rooms" value="<?php echo $_GET['rms']; ?>"><br></br>

        <label for="">Comment <i class="fa fa-comments-o" aria-hidden="true"></i></label>
        <textarea name="comments" cols="50" rows="5" value=""><?php echo $_GET['cm']; ?></textarea> <br><br>


        <input type="submit" name="b1" Value="Update">
    </form>
</body>

</html>


<?php
if (isset($_GET['b1'])) {
    $name = $_GET['name'];
    $mobile = $_GET['mobile'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $time = $_GET['time'];
    $date = $_GET['date'];
    $rooms = $_GET['rooms'];
    $comments = $_GET['comments'];
    if ($name != "" && $mobile != "" && $email != "" && $address != "" && $time != "" && $date != "" && $comments != "" && $rooms != "") {
        $query = "UPDATE `schoolservice` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `address` = '$address', `time` = '$time', `date` = '$date',`rooms` = '$rooms', `comment` = '$comments' WHERE `schoolservice`.`mobile` = '$mobile';";
        $data = mysqli_query($connection, $query);
        if ($data) {
            echo "<p style='color:green'>Record Updated Succesfully <a href='http://localhost/Mini-Project/admin/school-admin.php'>Click this to see updated Records</a>";
        } else {
            echo "Record not Updated ";
        }
    } else {
        echo "All Fields are required";
    }
}
?>