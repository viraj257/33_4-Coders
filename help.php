<?php
 require './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Leaflet Css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css"
   integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
   crossorigin=""/>



    <!-- External Stylesheet -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Bus Tracker</title>
</head>
<body>
<?php
require "./includes/header.php";
?>
  <img class="img-fluid" src="./img/juan-encalada-6mcVaoGNz1w-unsplash.jpg" alt="">
  <div class="cont2 px-5 pb-5 pt-5">
    <h2>Enter Your Query</h2>
    <form action="">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
            <input type="text" placeholder="FirstName MiddleName SurName" class="form-control">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">City</span>
            <input type="text" placeholder="City" class="form-control">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Contact</span>
            <input type="text" placeholder="Phone Number" class="form-control">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Query</span>
            <input type="text"  class="form-control">
          </div>
          <button type="submit" class="btn btn-warning">Submit</button>
    </form>
  </div>
  <?php
require "./includes/footer.php";
?>
  
</body> 
</html>