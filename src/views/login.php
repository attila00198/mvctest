<?php
if (isset($_SESSION["msg"])) {
    print_r($_SESSION["msg"]);
    unset($_SESSION["msg"]);
}
?>

<h1>Sign is</h1>

<form action="login" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Passord: </label>
        <input type="password" name="password" id="password" required>
    </div>
    <button type="submit">Sign in</button>
</form>