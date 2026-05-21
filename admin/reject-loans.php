<?php
include '../config/db.php';

$id = $_GET['id'];

mysqli_query($conn,
"UPDATE loans SET status='Rejected' WHERE id='$id'");

header("Location: dashboard.php");
?>