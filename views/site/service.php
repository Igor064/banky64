<?php

/** @var yii\web\View $this */
/** @var \app\models\Services $service */

use yii\helpers\Html;

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="about">
    <img src="/img/bush.png" data-offset="15" alt="" class="parallax screen-bush screen-bush--1 about-bush--1">
    <img src="/img/bush2.png" data-offset="25" alt="" class="parallax screen-bush screen-bush--2 about-bush--2">
    <div class="container">
        <h1 class="pg-title">
            услуги
        </h1>
        <div class="service-list">
            <?php
                if ($service != null){
                    /**
                     * @var int $key
                     * @var \app\models\Services $value
                     */
                    foreach ($service as $key => $value){
            ?>
            <div class="service-item">
                <?php
                    if ($value->url_photo != null){
                ?>
                    <div class="service-item-photo">
                        <img src="<?= $value->url_photo ?>" alt="">
                    </div>
                <?php
                    }
                ?>
                <div class="service-item-info">
                    <h2 class="service-item-title"><?= $value->name ?></h2>
                    <div class="service-item-text">
                        <p><?= $value->description ?></p>
                    </div>
                    <div class="service-item-cost">
                        <?php
                            if ($value->in_cost == 0) {
                                if ($value->price == 0) {
                                    echo "Бесплатно";
                                } else {
                                    echo number_format($value->price, 0, '.', ' ') . ' руб /' . ($value->unit ? $value->unit : 'в час');
                                }
                            } elseif ($value->in_cost == 1) {
                                echo "Включено в стоимость посещения";
                            } else {
                                echo "Не включено в стоимость посещения";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>

<section class="contacts">
    <div class="container" style="position: relative; z-index: 2; pointer-events: none;">
        <?= $this->render("_contact"); ?>
    </div>
    <div class="contacts__map__wrap wow fadeInUp">

    </div>
</section>