<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAssetAdmin;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAssetAdmin::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => "Управление",
            'brandUrl' => "/",
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                [
                    'label' => 'Главная',
                    'url' => ["/admin/default/dashboard"],
                    'visible' => !Yii::$app->user->isGuest,
                ],
                [
                    'label' => 'Бани',
                    'url' => ['/admin/bany/index'],
                    'visible' => !Yii::$app->user->isGuest,
                ],
                [
                    'label' => 'Черный список',
                    'url' => ['/admin/blacklist/index'],
                    'visible' => !Yii::$app->user->isGuest,
                ],
                [
                    'label' => 'Услуги',
                    'url' => ['/admin/services/index'],
                    'visible' => !Yii::$app->user->isGuest,
                ],
                Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/admin/default/index']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/admin/default/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Выйти (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div style="margin-top: 60px;">
                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Главная', 'url' => '/admin/default/dashboard'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; My Company <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>