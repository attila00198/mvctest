<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Teszt</title>
</head>

<body>
    <div>
        <a href="/">Home</a>
        <?php if (!isset($_SESSION["user"])) : ?>
            <a href="login">Sign In</a>
            <a href="register">Sign Up</a>
        <?php else : ?>
            <a href="profile">Profile</a>
            <?php if ($_SESSION["user"]["isAdmin"]) : ?>
                <a href="users">Users</a>
            <?php endif; ?>
            <a href="logout">Logout</a>
        <?php endif; ?>

    </div>

    <?php include "src/app.php" ?>
</body>

</html>