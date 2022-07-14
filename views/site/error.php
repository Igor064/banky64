<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<section class="about">
    <img src="/img/bush.png" data-offset="15" alt="" class="parallax screen-bush screen-bush--1 about-bush--1">
    <img src="/img/bush2.png" data-offset="25" alt="" class="parallax screen-bush screen-bush--2 about-bush--2">
    <div class="container">
        <h1 class="pg-title">
            <?= Html::encode($this->title) ?>
        </h1>
        <p style="text-align: center;"><?= nl2br(Html::encode($message)) ?></p>
    </div>
</section>