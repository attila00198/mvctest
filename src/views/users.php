<h1>Users</h1>

<?php if (count($users) == 0) : ?>
    <p><?php echo "There is no users to show" ?></p>
<?php endif; ?>
<table border="1">
    <thead>
        <tr>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user["name"] ?></td>
                <td><?php echo $user["fullname"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td>********</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>