<?php if (count($user) == 0) : ?>
    <p><?php echo "There is no users to show" ?></p>
<?php endif; ?>

<div class="row justify-content-center align-items-center g-2">
    <div class="col-sm-12 col-md-8">
        <h1 class="text-center">Your Profile</h1>
        <table class="table table-dark table-responsive">
            <tbody>
                <?php foreach ($user as $key => $value) : ?>
                    <?php if ($key != "id") : ?>
                        <tr>
                            <th><?= ucfirst($key) ?></th>
                            <?php if ($key == "passwd") : ?>
                                <td>************</td>
                            <?php else : ?>
                                <td><?= $value ?></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>