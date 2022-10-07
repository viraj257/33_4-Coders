<?php
    $conn = mysqli_connect("localhost", "root", "", "carrer") or die(mysqli_error($conn));


    if(!isset($_SESSION)){
        session_start();
    }
?>