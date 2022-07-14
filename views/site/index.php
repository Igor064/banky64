<?php

/** @var yii\web\View $this */

$this->title = 'Банный комплекс в Жасминке';
?>
<div class="screen-block">
    <img src="/img/dec.png" alt="" class="screen-dec">
    <div class="screen-wrap container">
        <img src="/img/bush.png" data-offset="15" alt="" class="parallax screen-bush screen-bush--1">
        <img src="/img/bush2.png" data-offset="25" alt="" class="parallax screen-bush screen-bush--2">
        <section class="screen">
            <h1 class="screen-title wow fadeInUp">Банный комплекс в Жасминке</h1>
            <button class="btn screen-btn" data-subject="Забронировать"><span>Забронировать</span></button>
            <img src="/content/photo.png" alt="" class="screen-photo">
        </section>
    </div>
</div>

<section class="product">
    <img src="/img/dec.png" alt="" class="product-dec">
    <div class="container">
        <?php
            if ($rooms != null) {
                /**
                 * @var int $key
                 * @var \app\models\Room $room
                 */
                foreach ($rooms as $key => $room) {
                    ?>
                    <div class="product-item">
                        <h2 class="title wow fadeInUp">
                            <?= $room->name ?>
                        </h2>
                        <div class="product-item__content">
                            <?php
                                if ($room->photos != null) {
                            ?>
                                <div class="product-item__photo">
                                    <div class="product-item__photo-sliderMin-wrap">
                                        <div class="product-item__photo-sliderMin">
                                            <?php
                                                /**
                                                 * @var int $number
                                                 * @var \app\models\RoomPhoto $photo
                                                 */
                                            foreach ($room->photos as $number => $photo){
                                            ?>
                                                <div><a data-fancybox="gallery-<?= $key?>" href="<?= $photo->url_photo ?>" class="product-item__photo--min"><img src="<?= $photo->url_photo ?>" alt=""></a></div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="product-item__photo-slider-wrap">
                                        <div class="product-item__photo-slider">
                                            <?php
                                                foreach ($room->photos as $number => $photo){
                                            ?>
                                                <div><a data-fancybox="gallery-<?= $key?>-lg" href="<?= $photo->url_photo ?>" class="product-item__photo--lg"><img src="<?= $photo->url_photo ?>" alt=""></a></div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            <div class="product-item__desc">
                                <div class="product-item__text"><?= $room->description ?></div>
                                <div class="product-item__buttons">
                                    <button class="btn product-btn" data-subject="<?= $room->name ?>">
                                    <span>Забронировать</span>
                                    </button>
                                    <div class="product-item__cost">
                                        <?= number_format($room->price, 0, '.', ' ')?> руб/<?= $room->unit ?? "час" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</section>

<section class="advantages">
    <img src="/img/wood.png" alt="" class="advantages-dec advantages-dec--1">
    <img src="/img/wood2.png" alt="" class="advantages-dec advantages-dec--2">
    <div class="container">
        <h2 class="title wow fadeInUp">
            Преимущества нашего комплекса
        </h2>
        <div class="advantages__content">
            <div class="advantages-item wow fadeInUp">
                <div class="advantages-item__icon"><img src="/img/advantages/1.svg" alt=""></div>
                <div class="advantages-item__text">Гибкая система скидок</div>
            </div>
            <div class="advantages-item wow fadeInUp">
                <div class="advantages-item__icon"><img src="/img/advantages/2.svg" alt=""></div>
                <div class="advantages-item__text">Парилка на дубовых дровах</div>
            </div>
            <div class="advantages-item wow fadeInUp">
                <div class="advantages-item__icon"><img src="/img/advantages/3.svg" alt=""></div>
                <div class="advantages-item__text">Уют и комфорт
                </div>
            </div>
            <div class="advantages-item wow fadeInUp">
                <div class="advantages-item__icon"><img src="/img/advantages/4.svg" alt=""></div>
                <div class="advantages-item__text">Бильярд</div>
            </div>
            <div class="advantages-item wow fadeInUp">
                <div class="advantages-item__icon"><img src="/img/advantages/5.svg" alt=""></div>
                <div class="advantages-item__text">Бассейн</div>
            </div>
            <div class="advantages-item wow fadeInUp">
                <div class="advantages-item__icon"><img src="/img/advantages/6.svg" alt=""></div>
                <div class="advantages-item__text">Дубовые веники</div>
            </div>
        </div>
    </div>
</section>

<?php
    if ($photos != null) {
?>
<section class="gallery wow fadeInUp">
    <div class="container">
        <h2 class="title">
            Наш комплекс
        </h2>
        <div class="gallery__content">
            <?php
                foreach ($photos as $key => $photo){
                    ?>
                    <a href="<?=$photo->url?>" data-fancybox="gallery" class="gallery-photo wow fadeInUp"><img src="<?=$photo->url?>" alt=""></a>
                    <?php
                }
            ?>
        </div>
        <!--<form class="gallery-load" action="testresponse.php">
            <input type="hidden" id="pNum" name="page" value="2">
            <button class="gallery-btn">
                        <span>
                            Показать еще
                        </span>
            </button>
        </form>-->
    </div>
</section>
<?php
    }
?>
<section class="contacts">
    <div class="container" style="position: relative; z-index: 2; pointer-events: none;">
        <?= $this->render("_contact"); ?>
    </div>
    <div class="contacts__map__wrap wow fadeInUp">

    </div>
</section>