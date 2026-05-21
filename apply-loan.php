<?php
session_start();
include 'config/db.php';

if(isset($_POST['apply'])){

    $user_id = $_SESSION['user_id'];

    $amount = $_POST['amount'];
    $interest = $_POST['interest'];
    $term = $_POST['term'];

    $r = ($interest / 12) / 100;

    $emi = ($amount * $r * pow((1 + $r), $term)) /
           (pow((1 + $r), $term) - 1);

    $query = "INSERT INTO loans(user_id,loan_amount,interest_rate,loan_term,emi)
              VALUES('$user_id','$amount','$interest','$term','$emi')";

    mysqli_query($conn,$query);

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Apply Loan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">
<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-success text-white">
<h4>Apply Loan</h4>
</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Loan Amount</label>
<input type="number" name="amount" class="form-control" required>
</div>

<div class="mb-3">
<label>Interest Rate (%)</label>
<input type="number" step="0.01" name="interest" class="form-control" required>
</div>

<div class="mb-3">
<label>Loan Term (Months)</label>
<input type="number" name="term" class="form-control" required>
</div>

<button type="submit" name="apply" class="btn btn-success w-100">
Apply Now
</button>

</form>

</div>
</div>
</div>
</div>
</div>

</body>
</html>