<?php
    // require_once('../config/config.php');
    $conn = new mysqli("localhost","root","","market");
    mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
