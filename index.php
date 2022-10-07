
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAREER BUILDER</title>
     <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
      require './includes/header.php';
      ?> 
     <div class="container py-5">
     <div class="row">
        <div class="col-sm-6">
           <h1>How We </h1>
           <p class="fs-1 text-primary">CAN BUILD OUR CAREER</p>
           <p>Find out what you like doing best, and get someone to pay you for doing it.</p>

           <a class="btn btn-first rounded-4 mt-4 bg-warning" href="form.php">Build Resume</a>
           <a class="btn btn-first rounded-4 mt-4 bg-warning" href="carrer.php">Find Carrer</a>
        </div>
        <div class="col-sm-6">
        <img src="./images/image.png" class="img-fluid">
        </div>
</div>
</div>
    <?php
      require './includes/footer.php';
      ?>
</body>
</html>