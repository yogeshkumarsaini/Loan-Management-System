<?php
session_start();
include '../config/db.php';

$query = "SELECT loans.*, users.name
          FROM loans
          JOIN users ON loans.user_id = users.id";

$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Loan Applications</h2>

<table class="table table-bordered">

<tr>
<th>User</th>
<th>Amount</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['name']; ?></td>

<td>₹<?php echo $row['loan_amount']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<a href="approve-loans.php?id=<?php echo $row['id']; ?>"
class="btn btn-success btn-sm">
Approve
</a>

<a href="reject-loans.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm">
Reject
</a>

</td>

</tr>

<?php } ?>

</table>

</div>
</body>
</html>