<?php
require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Login to VStores</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="/images/carts.jpg" type="image/icon type">
</head>
<body>
<?php
require "./includes/header.php";
?>

<section class="vh-100" style="background-color:#FFC107;">
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col col-xl-10">
<div class="card" style="border-radius: 1rem; background-color:#2B2D42">
<div class="row g-0">
<div class="col-md-6 col-lg-5 d-none d-md-block">
<img
src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
alt="login form"
class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
/>
</div>
<div class="col-md-6 col-lg-7 d-flex align-items-center">
<div class="card-body p-4 p-lg-5 text-black">


<div class="d-flex align-items-center mb-3 pb-1">
<span class="h1 fw-bold mb-0" style="color:#FFC107;">VKart</span>
</div>

<h5 class="fw-normal text-white mb-3 pb-3" style="letter-spacing: 1px;">Log into your account</h5>
<form action="login_submit.php" method="post">
<div class="form-group">

<div class="form-outline mb-4">
<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

</div>


</div>

<div class="form-group">
<div class="form-outline mb-4">
<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>

</div>
</div>

<div class="pt-1 mb-4">
<button type="submit" class="btn btn-warning">Login</button>
</div>
</form>
<a class="small text-muted" href="#!">Forgot password?</a>
<p class="mb-5 text-white pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php" style="color: #f7c634;">Register here</a></p>
<a href="#!" class="small text-muted">Terms of use.</a>
<a href="#!" class="small text-muted">Privacy policy</a>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php
require "./includes/footer.php";
?>
</body>
</html>