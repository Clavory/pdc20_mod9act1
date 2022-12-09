<?php
$dbconnect = mysqli_connect("localhost", "PDC20user", "secret123", "pdc20-nathaniel");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
?>