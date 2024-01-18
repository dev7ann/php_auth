<?php   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        .login-form {
            width: 25rem;
            margin-top: 140px;
        }
    </style>
</head>
<body>
    <form action="../helpers/login_helper.php" method="POST">
        <div class="container card login-form">
            <div class="card-body">
                <h4>Fill to Login</h4><br>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>

                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>

                <div class="mt-3">
                    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
