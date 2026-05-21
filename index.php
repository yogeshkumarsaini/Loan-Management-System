<?php
session_start();

if(isset($_SESSION['user_id'])){
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Loan Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand fw-bold" href="#">
LoanMS
</a>

<div>
<a href="login.php" class="btn btn-outline-light me-2">
Login
</a>

<a href="register.php" class="btn btn-primary">
Register
</a>
</div>

</div>
</nav>

<section class="hero-section text-center">

<div class="container">

<h1 class="display-4 fw-bold">
Loan Management System
</h1>

<p class="lead">
Apply loans online with EMI calculator and approval workflow.
</p>

<a href="register.php" class="btn btn-primary btn-lg mt-3">
Get Started
</a>

</div>

</section>

</body>
</html>