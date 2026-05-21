<?php
include 'includes/auth.php';
include 'config/db.php';

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM loans WHERE user_id='$user_id'";

$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Loans</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="container mt-5">

<div class="d-flex justify-content-between mb-3">

<h2>My Loans</h2>

<a href="apply-loan.php" class="btn btn-primary">
Apply New Loan
</a>

</div>

<div class="card shadow">

<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Amount</th>
<th>Interest</th>
<th>Months</th>
<th>EMI</th>
<th>Status</th>
</tr>

</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td>₹<?php echo $row['loan_amount']; ?></td>

<td><?php echo $row['interest_rate']; ?>%</td>

<td><?php echo $row['loan_term']; ?></td>

<td>₹<?php echo number_format($row['emi'],2); ?></td>

<td>

<?php
$status = $row['status'];

if($status == 'Approved'){
    echo "<span class='badge bg-success'>Approved</span>";
}
elseif($status == 'Rejected'){
    echo "<span class='badge bg-danger'>Rejected</span>";
}
else{
    echo "<span class='badge bg-warning'>Pending</span>";
}
?>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>
</div>
</div>

</body>
</html>