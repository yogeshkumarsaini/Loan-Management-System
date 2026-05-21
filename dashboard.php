<?php
session_start();
include 'config/db.php';

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM loans WHERE user_id='$user_id'";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">My Loans</h2>

<a href="apply-loan.php" class="btn btn-primary mb-3">
Apply Loan
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Amount</th>
<th>Interest</th>
<th>Term</th>
<th>EMI</th>
<th>Status</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td>₹<?php echo $row['loan_amount']; ?></td>
<td><?php echo $row['interest_rate']; ?>%</td>
<td><?php echo $row['loan_term']; ?> Months</td>
<td>₹<?php echo $row['emi']; ?></td>
<td>
<span class="badge bg-warning">
<?php echo $row['status']; ?>
</span>
</td>
</tr>

<?php } ?>

</table>

</div>
</body>
</html>