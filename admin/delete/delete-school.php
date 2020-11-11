<?php
include_once "../../connection.php";
$phone = $_GET['rn'];
$query = "delete from schoolservice where mobile ='$phone'";
$result = mysqli_query($connection, $query);
if ($result) {
    echo "<script>alert('Record Deleted')</script>";
?>
    <meta http-equiv="refresh" content="0; url=http://localhost/Mini-Project/admin/school-admin.php">
<?php
} else {
    echo "Delete Process Fail";
}
?>