<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sehat</title>
        <link rel="stylesheet" href="css/signup.css"></link>
        <link rel="stylesheet" href="css/style.css"></link>

    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            </div>
            <br><br><br><br><br><br>
            <div style="height:10px;width:100%;">
            <p style="font-size:40px;font-weight:700;margin-left:300px;">You have been logged out. <a href="login_customer.php">Login again.</a></p>
</div>

<footer>
            
</footer>
      
    </body>
</html>
