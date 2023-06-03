<?php if (count($users) == 0) : ?>
    <p><?php echo "There is no users to show" ?></p>
<?php endif; ?>

<div class="table-responsive col-sm-12 col-md-8 mx-auto p-2">
    <h1 class="text-center">Users</h1>
    <table class="table table-striped table-dark">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th>Username</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user["name"] ?></td>
                    <td><?= $user["fullname"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td>********</td>
                    <td>
                        <input class="form-check-input" id="isAdmin" type="checkbox" value="<?= $user["isAdmin"] ?>" <?php echo ($user['isAdmin'] == 1 ? 'checked' : ''); ?> disabled>
                    </td>
                    <td>
                        <button class="btb btn-info mr-4">Edit</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>