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
    <form action="../Auth/helpers/register_helper.php" method="POST">
        <div class="container card login-form">
            <div class="card-body">

           
                <div>
                    <label for="f_name">First name</label>
                    <input type="text" name="f_name" id="f_name">

                </div><br>
                <div>
                <label for="m_name">Middle name</label>
                    <input type="text" name="m_name" id="m_name">
                </div><br>
                <div>
                <label for="l_name">Last name</label>
                    <input type="text" name="l_name" id="l_name">
                </div><br>
                <div>
                <label for="phone">phone</label>
                    <input type="text" name="phone" id="phone">
                </div><br>

                <div>
                <label for="age">Age</label>
                    <input type="text" name="age" id="age">
                </div><br>

                <div>
                <label for="id_no">Id Number</label>
                    <input type="text" name="id_no" id="id_no">
                </div><br>

                <div>
                <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender">
                </div><br>

                <div >
                    <input  type=submit value="submit">
                </div>
            </div>
        </div>
    </form>


</body>
</html>


