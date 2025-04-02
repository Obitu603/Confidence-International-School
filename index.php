<?php 
require'dbcon.php';
include('message.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <title>Login </title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left Background Image -->
            <div class="col-md-6 bg-image"></div>

            <!-- Right Login Form -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <form action="code.php" Method = "POST" style="width: 80%;">
                    <h2 class="text-center mb-4">Login</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name ="login">Sign In</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
