<?php if (count($user) == 0) : ?>
    <p><?php echo "There is no users to show" ?></p>
<?php endif; ?>

<div class="row justify-content-center align-items-center g-2">
    <h1 class="text-center">Your Profile</h1>
    <div class="table-responsive col-sm-12 col-md-6 mx-auto p-2">
        <table class="table table-dark">
            <caption>Profile Data</caption>
            <tbody>
                <?php foreach ($user as $key => $value) : ?>
                    <?php if ($key != "id" && $key != "isAdmin") : ?>
                        <tr>
                            <th><?= ucfirst($key) ?></th>
                            <?php if ($key == "passwd") : ?>
                                <td>************</td>
                            <?php else : ?>
                                <td><?= $value ?></td>
                            <?php endif; ?>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button class="btn btn-info float-end">Edit</button>
    </div>
</div>