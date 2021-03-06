<?php

$loogedUser = $_SESSION['auth']['login'];

$items = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Homework_6-4', 'url' => '6-4.php'],
    ['label' => 'Cart', 'url' => 'cart.php'],
    ['label' => 'Reviews', 'url' => 'reviews.php'],
    ['label' => 'Login', 'url' => 'user.php', 'role' => '?'],
    ['label' => 'Profile', 'url' => 'user.php', 'role' => '@'],
    ['label' => 'Logout '.$loogedUser, 'url' => 'user.php?action=logout', 'role' => '@'],
];

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="img/logo.png" alt="<?= $config['name'] ?>" height="30" class="mr-2">
        <?= $config['name'] ?>
    </a>
    <div class="collapse navbar-collapse navbar-right" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php foreach ($items as $link) : ?>
                <?php if (isset($link['role'])): ?>
                    <?php if (userHasRole($link['role'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                    </li>
                <?php endif ?>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>