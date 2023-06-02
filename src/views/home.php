<h1>Home Page</h1>

<div class="msg">
    <?php
    if (isset($_SESSION["msg"])) {
        echo $_SESSION["msg"]["message"];
        unset($_SESSION["msg"]);
    }
    ?>
</div>