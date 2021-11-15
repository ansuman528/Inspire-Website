<?php

include('partials/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="assets\css\regstyle.css">
</head>

<body>
    <div class="testbox">
        <h1>Registration</h1>
        <label>Collect your referal from President</label>

        <form method="POST" action="reghandler.php">
        <hr>
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="email" id="name" placeholder="Email" required/>
        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="text" name="referal" id="name" placeholder="Referal" required/>
        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input type="password" name="password" id="name" placeholder="Password" required/>
        <button type="submit" name="submit" class="button">Register</button>
        </form>
    </div>
</body>

</html>