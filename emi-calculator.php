<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>EMI Calculator</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-primary text-white">
<h4>EMI Calculator</h4>
</div>

<div class="card-body">

<div class="mb-3">
<label>Loan Amount</label>
<input type="number" id="amount" class="form-control">
</div>

<div class="mb-3">
<label>Interest Rate (%)</label>
<input type="number" id="interest" class="form-control">
</div>

<div class="mb-3">
<label>Loan Term (Months)</label>
<input type="number" id="months" class="form-control">
</div>

<button class="btn btn-primary w-100"
onclick="calculateEMI()">
Calculate EMI
</button>

<hr>

<h5 class="mt-3">
Monthly EMI:
<span id="emiResult" class="text-success fw-bold">
₹0
</span>
</h5>

</div>
</div>
</div>
</div>
</div>

<script>

function calculateEMI(){

let amount = document.getElementById('amount').value;
let interest = document.getElementById('interest').value;
let months = document.getElementById('months').value;

let r = (interest / 12) / 100;

let emi =
(amount * r * Math.pow((1+r), months)) /
(Math.pow((1+r), months)-1);

document.getElementById('emiResult').innerHTML =
"₹" + emi.toFixed(2);

}

</script>

</body>
</html>