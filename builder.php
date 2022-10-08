<?php
require './includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="/images/carts.jpg" type="image/icon type">
<title>MyCarrer</title>
</head>
<body>
    <?php
      require './includes/header.php';
      ?>
<section class="vh-100" style="background-color:#FFC107;">
<div class="container h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-lg-12 col-xl-11">
<div class="card text-black" style="border-radius: 25px; background-color:#2B2D42;">
<div class="card-body p-md-5">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

<div class="container panel-margin">
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title" style="color:#FFC107;">Personal Details</h2>
</div>  
<div class="panel-body">
<form method="post" action="builder_script.php">
<div class="form-group">
<input type="text" class="form-control" name="fname" placeholder="First Name" required>
</div></br>
<div class="form-group">
<input type="text" class="form-control" name="lname" placeholder="Last Name" required>
</div></br>
<div class="form-group">
<input type="text" class="form-control" name="gender" placeholder="Gender" required>                        
</div></br>
<div class="form-group">
<input type="date" class="form-control" name="birthdate" placeholder="Birth Date" required>
</div></br>
<div class="form-group">
<input type="text" class="form-control" name="linkedin" placeholder="Linked In">
</div></br>
<div class="form-group">
<input type="text" class="form-control" name="Website" placeholder="Website" required>
</div></br>

<button type="submit" class="btn btn-warning">Next</button>
</form>
</div></br>
</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>

</body>
</html>