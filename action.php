<?php
 if(isset($_POST))
{
    $f_name = $_POST ['f_name'];
    $m_name = $_POST ['m_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}


     


?>

<!Doctype HTML>
<html>
    <head>
    
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>

    </style>
    <body>
    <div class="container">
        <div class="row">
            <div class="col col-3">
                <p>Fisrt name</p>
                <p>
                    <?php echo $f_name ?>
                </p>
            </div>
            <div class="col col-3">
                <p>Middle name</p>
                <p>
                    <?php echo $m_name ?>
                </p>
            </div>
            <div class="col col-3">
                <p>Last name</p>
                <p>
                    <?php echo $l_name ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col col-3">
                <p>Email</p>
                <p>
                    <?php echo $email ?>
                </p>    
            </div>
            <div class="col col-3">
                <p>Password</p>
                <p>
                    <input type="password" value="<?php echo $password ?>">
                </p>
            </div>
        </div>

    </div>
        

    </body>
</html>