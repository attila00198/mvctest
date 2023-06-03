<div class="row justify-content-center align-items-center g-2">
    <div class="col-sm-12 col-md-4 mx-auto">
        <h1 class="mb-4 text-center">Sign Up</h1>

        <?php if (isset($_SESSION["msg"])) : ?>
            <div class="alert alert-<?= $_SESSION["msg"]["category"] ?> col pb-4">
            <strong><?= $_SESSION["msg"]["heading"]. ": " ?></strong><?= $_SESSION["msg"]["message"] ?>
            </div>
            <?php unset($_SESSION["msg"]); ?>
        <?php endif; ?>

        <form action="register" method="POST">
            <div class="form-floating mb-4">
                <input type="text" name="username" class="form-control bg-dark text-white" id="username" placeholder="username" autofocus required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" name="fullname" class="form-control bg-dark text-white" id="fullname" placeholder="Full Name" required>
                <label for="fullnane">Full Name</label>
            </div>
            <div class="form-floating mb-4">
                <input type="email" name="email" class="form-control bg-dark text-white" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control bg-dark text-white" id="password" placeholder="password" required>
                <label for="password">Passord</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="password_repeat" class="form-control bg-dark text-white" id="password_repeat" placeholder="Password Repeat" required>
                <label for="password_repeat">Passord Repeat</label>
            </div>
            <div class="mb-4 p-2">
                <button type="submit" class="btn btn-success">Sign Up</button>
            </div>
            <div class="mb-4 p-2">
                <a href="login">I have an account.</a>
            </div>
        </form>
    </div>
</div>