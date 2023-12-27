<?php   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>


    <form action="action.php" method="post">
        <div class="container">
            <div class="row">
        <div class="col col 2">
            <label for="f_name">First name</label>
            <input type="text" name="f_name" id="f_name">

        </div><br>
        <div class="row">
        <div class="col col 2">
           <label for="m_name">Middle name</label>
            <input type="text" name="m_name" id="m_name">
        </div><br>
        <div class="row">
        <div class="col col 2">
        <label for="l_name">Last name</label>
            <input type="text" name="l_name" id="l_name">

        </div><br>
        <div >
        <input type="button"  type=submit value="submit">

        </div>
</div>
        </div>
            </div>
        </div>

    </form>
    

    
</body>
</html>