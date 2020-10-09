<?php require('partials/head.view.php') ?>


<h1>Results</h1>

<?php foreach ($users as $user): ?>
    <li>
        <?=$user->name?>
    </li>
<?php endforeach ?>
<?php require('partials/footer.view.php') ?>
