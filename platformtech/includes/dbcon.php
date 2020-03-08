<?php
    $conn = mysqli_connect("localhost","root","","platformtech");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>