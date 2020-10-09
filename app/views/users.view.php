<?php require('partials/head.view.php') ?>


<h1>All users</h1>

<?php foreach ($users as $user): ?>
    <li>
        <?= $user->name ?>
    </li>
<?php endforeach ?>

<form method="POST" action="/users">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.view.php') ?>
