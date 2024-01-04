<?php   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        .login-form{
            width: 25rem;
            margin-top: 140px;
        }
    </style>
</head>
<body>
    <form action="'../helpers/login_helper.php'" method="POST">
        <div class="container card login-form">
            <div class="card-body">

            <h4>fill to login</h4><br>



            <div>
                <label for="user name">USER NAME</label>
                <input type="text" id="user name" class="form-group" name="username"><br>

            </div>
            <div>
                <label for="password">PASSWORD</label>
                <input type="password" id="password" class="form-group" name="password"><br>
            </div><br>
            <div>
                <input type="button" class="pull-right btn btn-danger"  type=submit value="submit">
            </div>

            </div>
        </div>
        
        
      

    </form>


</body>
</html>