<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: proj_logedin.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width",initial-scale=1.0>

        <link rel="stylesheet" href=" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="ind_style.css">

        <title>Welcome</title>
    </head>
    <body>
    </body>
</html>
