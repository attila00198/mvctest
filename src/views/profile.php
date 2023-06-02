<h1>Your Profile</h1>

<?php if (count($user) == 0) : ?>
    <p><?php echo "There is no users to show" ?></p>
<?php endif; ?>
<table border="1">
    <thead>
    </thead>
    <tbody>
        <?php foreach ($user as $key => $value) : ?>
            <tr>
                <th><?php echo $key ?></th>
                <td><?php echo $value ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>