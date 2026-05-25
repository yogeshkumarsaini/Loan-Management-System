# Loan Management System

A modern Loan Management System built using PHP, MySQL, Bootstrap 5, and JavaScript.

The system allows users to apply for loans, calculate EMI, track loan applications, and enables admin approval workflow with a responsive modern UI.

---

# 🚀 Features

## 👤 Authentication System
- User Registration
- User Login
- Admin Login
- Secure Session Handling
- Password Hashing

---

# 💰 Loan Management
- Apply for Loan
- Loan Tracking
- Loan Status Management
- EMI Calculation
- Interest Calculation

---

# 📊 EMI Calculator
- Real-time EMI Calculation
- Monthly Installment Calculation
- Interest Breakdown
- Bootstrap UI

EMI Formula:

EMI = [P × R × (1+R)^N] / [(1+R)^N - 1]

Where:
- P = Loan Amount
- R = Monthly Interest Rate
- N = Loan Tenure in Months

---

# ✅ Approval Workflow

## User Side
- Apply Loan
- View Loan Status
- EMI Calculator
- Loan Dashboard

## Admin Side
- View All Applications
- Approve Loans
- Reject Loans
- Manage Users

---

# 🎨 Modern UI Features
- Bootstrap 5 Responsive Design
- Dashboard Cards
- Responsive Tables
- Modern Forms
- Mobile Friendly
- Sidebar Navigation
- Smooth UI

---

# 🛠️ Technologies Used

- PHP
- MySQL
- Bootstrap 5
- JavaScript
- HTML5
- CSS3
- jQuery

---

# 📁 Project Structure

```bash
loan-management-system/
│
├── admin/
│   ├── dashboard.php
│   ├── approve-loans.php
│   ├── reject-loans.php
│   └── navbar.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   ├── js/
│   │   └── script.js
│   │
│   └── images/
│
├── config/
│   └── db.php
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── auth.php
│
├── uploads/
│
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── my-loans.php
├── apply-loan.php
├── emi-calculator.php
├── logout.php
└── database.sql
```

---
# ⚙️ Installation Guide
Step 1: Clone Project
```
git clone https://github.com/yogeshkumarsaini/loan-management-system.git
```
Step 2: Move Project

Move the project folder to:

XAMPP
```
htdocs/
```
WAMP
```
www/
```
Step 3: Create Database

Open phpMyAdmin and create database:
```
loan_management
```
Import:
```
database.sql
```
Step 4: Configure Database

Open:
```
config/db.php
```
Update credentials:
```
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "loan_management"
);
```
Step 5: Run Project

Open browser:
```
http://localhost/loan-management-system/
```
---
# 🔐 Default Admin Login
Email
```
admin@gmail.com
```
Password
```
admin123
```
---

# 🗄️ Database Tables
### users
- id
- name
- email
- password
- role
- created_at

### loans
- id
- user_id
- loan_amount
- interest_rate
- loan_term
- emi
- status
- created_at

### repayments
- id
- loan_id
- amount
- paid_date
- status



