<h1>Registration</h1>

<?php 
    if(isset($_SESSION["msg"])) {
        print_r($_SESSION["msg"]);
        unset($_SESSION["msg"]);
    }
?>

<form action="register" method="POST">
    <div>
        <label for="name">Username: </label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="fullname">Full Name: </label>
        <input type="text" name="fullname" id="fullname" required>
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="password">Passord: </label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="password_repeat">Password Repeat: </label>
        <input type="password" name="password_repeat" id="password_repeat" required>
    </div>
    <button type="submit">Register</button>
</form>