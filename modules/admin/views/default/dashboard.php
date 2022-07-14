<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\helpers\Url;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<dev class="row">
    <div class="col-lg-4">
        <h3>Бани</h3>
        <div class="list-group">
            <a href="<?= Url::to(['/admin/bany/create'])?>" class="list-group-item list-group-item-action">Создать баню</a>
            <a href="<?= Url::to(['/admin/bany/index'])?>" class="list-group-item list-group-item-action">Список бань</a>
        </div>
    </div>
    <div class="col-lg-4">
        <h3>Мини галерея</h3>
        <div class="list-group">
            <a href="<?= Url::to(['/admin/photos/create'])?>" class="list-group-item list-group-item-action">Загрузить фотографию</a>
            <a href="<?= Url::to(['/admin/photos/index'])?>" class="list-group-item list-group-item-action">Список всех фотографий</a>
        </div>
    </div>
    <div class="col-lg-4">
        <h3>Прайс-лист</h3>
        <div class="list-group">
            <a href="<?= Url::to(['/admin/services/create'])?>" class="list-group-item list-group-item-action">Создать услугу</a>
            <a href="<?= Url::to(['/admin/services/index'])?>" class="list-group-item list-group-item-action">Список всех услуг</a>
        </div>
    </div>
</dev>
<dev class="row mt-3">
    <div class="col-lg-12">
        <h3>Черный список</h3>
        <div class="list-group">
            <a href="<?= Url::to(['/admin/blacklist/create'])?>" class="list-group-item list-group-item-action">Добавить в черный список</a>
            <a href="<?= Url::to(['/admin/blacklist/index'])?>" class="list-group-item list-group-item-action">Поиск по списку</a>
        </div>
    </div>
</dev>