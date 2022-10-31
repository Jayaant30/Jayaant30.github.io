<?php

session_start();

if (isset($_POST['submit'])) {
    session_destroy();
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width",initial-scale=1.0>

        <link rel="stylesheet" href=" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="ind_style.css">

        <title>Log out</title>
    </head>
    <body>
    <div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Logout Screen</p>
            <div class="input-group">
				<button name="submit" class="btn">Home</button>
			</div>
    </body>
</html>
