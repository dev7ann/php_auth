<?php   
// Retrieve the message parameter from the URL
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';

// Display the error message if it's not empty
if (!empty($message)) {
    echo '<div class="alert alert-danger">' . $message . '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   

    <style>
        .register-form {
            width: 50rem;
            margin-top: 140px;
        }
    </style>
</head>
<body>
    <form action="../helpers/register_helper.php" method="POST">
        <div class="container card register-form">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="f_name">First name</label>
                        <input type="text" class="form-control" name="f_name" id="f_name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="m_name">Middle name</label>
                        <input type="text" class="form-control" name="m_name" id="m_name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="l_name">Last name</label>
                        <input type="text" class="form-control" name="l_name" id="l_name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="id_no">ID Number</label>
                        <input type="text" class="form-control" name="id_no" id="id_no">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" name="age" id="age">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
