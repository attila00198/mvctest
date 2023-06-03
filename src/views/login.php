<div class="row justify-content-center align-items-center g-2">
    <div class="col-sm-12 col-md-4 mx-auto">
        <h1 class="mb-4 text-center">Sign In</h1>

        <?php if (isset($_SESSION["msg"])) : ?>
            <div class="alert alert-<?= $_SESSION["msg"]["category"] ?> col pb-4" role="alert">
                <strong><?= $_SESSION["msg"]["heading"]. ": " ?></strong><?= $_SESSION["msg"]["message"] ?>
            </div>
            <?php unset($_SESSION["msg"]); ?>
        <?php endif; ?>

        <form class="px-2" action="login" method="POST">
            <div class="form-floating mb-4">
                <input type="text" name="username" class="form-control bg-dark text-white" id="username" placeholder="username" autofocus required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control bg-dark text-white" id="password" placeholder="password" required>
                <label for="password">Passord</label>
            </div>
            <div class="mb-4 p-2">
                <button type="submit" class="btn btn-success">Sign in</button>
            </div>
            <div class="mb-4 p-2">
                <a href="register">Don't have an account?</a>
            </div>
        </form>
    </div>
</div>