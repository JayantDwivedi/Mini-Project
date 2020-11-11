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

    <title>Edit-Car-Record</title>
</head>

<body>
    <h1>Car Record Update</h1>
    <form action="" method="GET">
        <table>
            <tr>
                <td><label for="">Name <i class="fa fa-user" aria-hidden="true"></i></label></td>
                <td><input type="text" name="name" value="<?php echo $_GET['rn']; ?>"><br></br></td>
            </tr>
            <tr>
                <td><label for="">Mobile <i class="fa fa-mobile" aria-hidden="true"></i></label></td>
                <td><input type="text" name="mobile" readonly value="<?php echo $_GET['nm']; ?>"><br></br></td>
            </tr>
            <tr>
                <td><label for="">Email <i class="fa fa-envelope" aria-hidden="true"></i></label></td>
                <td><input type="text" name="email" value="<?php echo $_GET['cl']; ?>"><br></br></td>
            </tr>
            <tr>
                <td><label for="">Address <i class="fa fa-map-marker" aria-hidden="true"></i></label></td>
                <td><input type="text" name="address" value="<?php echo $_GET['ad']; ?>"><br></br></td>
            </tr>
            <tr>
                <td> <label for="">Time <i class="fa fa-clock-o" aria-hidden="true"></i></label></td>
                <td><input type="time" name="time" value="<?php echo $_GET['tm']; ?>"><br></br></td>
            </tr>
            <tr>
                <td><label for="">Date <i class="fa fa-calendar" aria-hidden="true"></i></label></td>
                <td><input type="date" name="date" value="<?php echo $_GET['dt']; ?>"><br></br></td>
            </tr>
            <tr>
                <td><label for="">Comment <i class="fa fa-comments-o" aria-hidden="true"></i></label></td>
                <td> <textarea name="comments" cols="50" rows="5"><?php echo $_GET['cm']; ?></textarea> <br><br></td>
            </tr>
            <tr>
                <td><input type="submit" id="submit-btn" name="b1" Value="Update"></td>
            </tr>
        </table>
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
    $comments = $_GET['comments'];
    if ($name != "" && $mobile != "" && $email != "" && $address != "" && $time != "" && $date != "" && $comments != "") {
        $query = "UPDATE `carservice` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `address` = '$address', `time` = '$time', `date` = '$date', `comment` = '$comments' WHERE `carservice`.`mobile` = '$mobile';";
        $data = mysqli_query($connection, $query);
        if ($data) {
            echo "<p style='color:green;font-size:25px;text-align:center;'>Record Updated Succesfully <a href='http://localhost/Mini-Project/admin/car-admin.php'>UPDATED RECORD</a>";
        } else {
            echo "<p style='color:red;text-align:center; margin-top:10px;margin-bottom:10px;border:2px solid pink;border-radius:2px; font-size:24px; background-color:pink;'><strong>" . "Record not updated" . "</strong></p>";
        }
    } else {
        echo "All Fields are required";
    }
}
?>