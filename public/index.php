<?php

use App\Shield;
use App\Weapon;

require '../src/Fighter.php';
require '../src/Weapon.php';
require '../src/Shield.php';

$weapon = new Weapon();
$shield = new Shield();

$hercules = new Fighter('Hercules', 20, 6);
$hercules->setWeapon($weapon);
// $hercules->setShield($shield);

$boar = new Fighter('Erymanthian Boar', 22, 10);

$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hercules Labours</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Hercules vs Erymanthian Boar</h1> 
    </header>
    <a href="#hero">Inventory</a>
    <main>

        <div class="fighters">
            <figure class="hercules">
                <img src="<?=  $hercules->getImage() ?>" alt="hercules">
                <figcaption><?= $hercules->getName() ?></figcaption>
            </figure>
            <figure class="monster">
                <img src="<?= $boar->getImage() ?>" alt="monster">
                <figcaption><?= $boar->getName() ?></figcaption>
            </figure>
        </div>

        <?php
        while ($hercules->isAlive() && $boar->isAlive()) : ?>
            <section class="round">
                <h2 class="number">🕛 Round <?= $i ?></h2>
                <div class="fight">

                    <?php $hercules->fight($boar); ?>
                    <div>
                        <?= $hercules->getName() . ' 🗡️  ' . $boar->getName() ?>
                    </div>
                    <div class="life">
                        💙
                        <progress max="<?= Fighter::MAX_LIFE ?>" value="<?= $hercules->getLife() ?>"></progress>
                        <progress max="<?= Fighter::MAX_LIFE ?>" value="<?= $boar->getLife() ?>"></progress>
                    </div>
                    <?php $boar->fight($hercules); ?>
                    <div>
                        <?= $hercules->getName() . ' 🗡️  ' . $boar->getName() ?>
                    </div>
                    <div class="life">
                        💙
                        <progress max="<?= Fighter::MAX_LIFE ?>" value="<?= $hercules->getLife() ?>"></progress>
                        <progress max="<?= Fighter::MAX_LIFE ?>" value="<?= $boar->getLife() ?>"></progress>
                    </div>
                </div>
                <?php $i++; ?>
            </section>
        <?php endwhile; ?>

        <?php
        if (!$hercules->isAlive()) {
            $winner = $boar;
            $loser = $hercules;
        } else {
            $winner = $hercules;
            $loser = $boar;
        }
        ?>
        <section class="win">
            <p>💀 <?= $loser->getName() ?> is dead</p>
            <p>🏆 <?= $winner->getName() ?> wins (remaining 💙 <?= $winner->getLife() ?>)</p>
        </section>
    </main>

    <?php include 'hero.php' ?>
</body>

</html>