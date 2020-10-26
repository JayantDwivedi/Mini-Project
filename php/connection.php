
<?php
// connection file for database connectivity
$servername = "localhost";
$username = "root";
$password = "";
$database = "sanserv";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    echo "Database connectivity issue";
} else {
    echo "Database connected succesfully";
}
?>