<!-- <?php
// require "./includes/common.php";
// get details
// $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
// $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
// $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
// $birthdate = mysqli_real_escape_string($conn, $_POST["birthdate"]);
// $Website = mysqli_real_escape_string($conn, $_POST["Website"]);

// // hash password
// $hashed_password = md5($password);
// $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
// $query2 = "INSERT INTO p_details (fname, lname , gender, birthdate, website) VALUES ('$fname', '$lname', '$gender', '$birthdate', '$Website')";

// check if already registered user
// $result = mysqli_query($conn, $query1);
// if(mysqli_num_rows($result) > 0){
// // email already exists
// echo "Email id already exists. Try another";
// }else{
// // perform query operation
// $result = mysqli_query($conn, $query2);
// $_SESSION["email_id"] = $email;
// $_SESSION["id"] = mysqli_insert_id($conn);

// redirect to products page
// header("location: form2.html");

?> -->
<?php
    require './includes/common.php';
    // get the item_id and add to cart
    // $item_id = $_GET["id"];
    // $user_id = $_SESSION["id"];

    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $birthdate = mysqli_real_escape_string($conn, $_POST["birthdate"]);
    $Website = mysqli_real_escape_string($conn, $_POST["Website"]);
    $query = "INSERT INTO p_details(fname, lname , gender, birthdate, website) VALUES('$fname', '$lname', '$gender', '$birthdate', '$Website')";

    $query_result = mysqli_query($conn, $query);

    header("location: form2.html");
?>