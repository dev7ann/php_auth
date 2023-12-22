<?php  ?>

<!DOCTYPE html>
<html>
    <head>
        <title>USER REGISTRATION</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <body>
        <form action="action.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col col-3">
                        <label for="f_name">first name</label>
                        <input class="form-control" type="text" name="f_name" id="f_name">
                    </div><br></br>
                    <div class="col col-3">
                        <label for="m_name">middle name</label>
                        <input class="form-control" type="text" name="m_name" id="m_name">
                    </div><br></br>
                    <div class="col col-3">
                        <label for="l_name">last name</label>
                        <input class="form-control" type="text" name="l_name" id="l_name">
                    </div><br></br>
                </div>
                <div class="row">
                    <div class="col col-3">
                        <label for="email">email</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div><br></br>
                    <div class="col col-3">
                        <label for="password">password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div><br></br> 
                </div> <br><br>

                <div class="row">
                <input class="btn btn-danger pull-right" type="submit" value="Submit">  
                </div>
                 </div>
            </div>
         </form>
        
       

    </body>
   
</html>