
<?php
    require './includes/common.php';
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $birthdate = mysqli_real_escape_string($conn, $_POST["birthdate"]);
    $Website = mysqli_real_escape_string($conn, $_POST["Website"]);
    $query = "INSERT INTO p_details(fname, lname , gender, birthdate, website) VALUES('$fname', '$lname', '$gender', '$birthdate', '$Website')";

    $query_result = mysqli_query($conn, $query);

    header("location: form2.php");
?>