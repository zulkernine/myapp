<!DOCTYPE>
<html>
    <head>
        <title>form response</title>
        <style>
            *{
                color: rgb(12,34,51);
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <?php 
            $username = $_POST["username"];
            $password = $_POST["password"];
            echo "<script>console.log('BC tor username hochhe - $username' );</script>";
        ?>
        <p style="color = red;">Your password:<?php echo $_POST["password"];?><br></p>
    </body>
</html>