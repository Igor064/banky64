<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="icon" href="/favicon.ico">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <main>
        <header class="header">
            <div class="header__c container">
                <nav class="header-nav">
                    <ul class="header-nav__list">
                        <li class="header-nav__item"><a href="<?= Url::to(["/site/index"])?>" class="header-nav__link">Наши бани</a></li>
                        <li class="header-nav__item"><a href="<?= Url::to(["/site/about"])?>" class="header-nav__link">О комплексе</a></li>
                        <li class="header-nav__item"><a href="<?= Url::to(["/site/service"])?>" class="header-nav__link">Услуги</a></li>
                        <li class="header-nav__item"><a href="<?= Url::to(["/site/contact"])?>" class="header-nav__link">Контакты</a></li>
                    </ul>
                </nav>
                <a href="<?= Url::to(["/site/index"])?>" class="header-logo">
                    <img src="/img/logo.png" alt="">
                </a>
                <div class="header-contact">
                    <div class="header-contact__item header-contact__item--loc">
                        <p>Саратов<br>ул. Моисеева, 5Б.</p>
                    </div>
                    <div class="header-contact__item header-contact__item--phone">
                        <p>
                            <a href="tel:+78452388074">+7 (8452) 38-80-74</a>
                            <a href="tel:+79878088793">+7 (987) 808-87-93</a>
                        </p>
                    </div>
                </div>
                <div class="header__burger">
                    <div class="dash"></div>
                </div>
                <nav class="mobile-nav">
                    <ul class="mobile-nav__list">
                        <li class="mobile-nav__item"><a href="<?= Url::to(["/site/index"])?>" class="mobile-nav__link">Наши бани</a></li>
                        <li class="mobile-nav__item"><a href="<?= Url::to(["/site/about"])?>" class="mobile-nav__link">О комплексе</a></li>
                        <li class="mobile-nav__item"><a href="<?= Url::to(["/site/service"])?>" class="mobile-nav__link">Услуги</a></li>
                        <li class="mobile-nav__item"><a href="<?= Url::to(["/site/contact"])?>" class="mobile-nav__link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </header>
            <?= $content ?>
        <footer class="footer">
            <div class="container">
                <div class="footer__row">
                    <div class="footer-text">
                        ИП Кузьмичев Игорь Николаевич<br>
                        ИНН: 645300234890<br>
                        ОГРН: 304645334300171
                        <a href="mailto:igor.k@bania64.ru" class="footer-mail">igor.k@bania64.ru</a>
                    </div>
                    <a href="#policy" class="footer-policy">
                        Политика конфиденциальности
                    </a>
                    <div class="footer-dev">
                        <p>Сайт сделан web-студией:</p>
                        <a href="https://sokolovsky.dev" target="_blank" rel="noopener noreferrer">
                            sokolovsky.dev
                        </a>
                    </div>
                </div>
                <div class="footer-cr">
                    © 2022  Все права защищены
                </div>
            </div>
        </footer>
    </main>
<div class="popup" id="form-p">
    <div class="popup-wrap popup-wrap--center">
        <form class="form" id="contact" method="post" onsubmit="return false;">
            <div class="close">
            </div>
            <div class="form-title">
                Оставьте заявку
            </div>
            <div class="form-subtitle">
                Мы вам обязательно перезвоним <br>
                и ответим на ваши вопросы
            </div>
            <div class="form-content">
                <label for="#input-name" class="form-input-label">
                    <input required type="text" id="input-name" name="name" placeholder="Ваше имя" class="form-input">
                </label>
                <label for="#input-phone" class="form-input-label">
                    <input required type="text" id="input-phone" name="phone" placeholder="+7 (___) ___-__-__" class="form-input">
                </label>
                <input type="hidden" name="subject" id="form-subject">
                <input type="hidden" name="<?= \Yii::$app->getRequest()->csrfParam?>" value="<?= \Yii::$app->getRequest()->getCsrfToken()?>">
            </div>
            <button class="form-btn btn" type="submit">
                    <span>
                        Оставить заявку
                    </span>
            </button>
            <div class="form-agree">
                Нажимая кнопку "Оставить заявку" Вы даете <a href="#policy">согласие на обработку персональных данных</a>
            </div>
        </form>
    </div>
</div>
<div class="popup" id="popup-policy">
    <div class="popup-wrap">
        <div class="policy">
            <div class="close"></div>
            <div class="policy__title">
                Политика конфиденциальности интернет-сайта
            </div>
            <div class="policy-text">
                <p>г. Пенза «__» марта 2021 г.</p>

                <p>
                    Настоящая Политика в области обработки персональных данных и конфиденциальности персональной информации (далее — Политика) действует в отношении всей информации, размещенной на сайте в сети Интернет по адресу: _________ (далее — Сайт), которую посетители, другие пользователи Сайта могут получить о Пользователе во время использования Сайта, его сервисов, программ и продуктов. <br>
                    Использование сервисов Сайта означает безоговорочное согласие Пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации; в случае несогласия с этими условиями Пользователь должен воздержаться от использования сервисов Сайта, перечисленных в П.1.4. «Соглашения об использовании материалов сайта».<br>
                </p>

                <p>
                    1. Общие положения<br>
                    1.1. В рамках настоящей Политики под персональной информацией Пользователя понимаются:<br>
                    1.1.1. Персональная информация, которую Пользователь предоставляет о себе самостоятельно при регистрации (создании учетной записи) или в процессе использования сервисов Сайта, включая персональные данные Пользователя. Обязательная для предоставления сервисов информация помечена специальным образом. Иная информация предоставляется Пользователем на его усмотрение.<br>
                    1.1.2. Администрация Сайта в общем случае не проверяет достоверность персональной информации, предоставляемой пользователями, и не осуществляет контроль за их дееспособностью. Однако Администрация Сайта исходит из того, что пользователь предоставляет достоверную и достаточную персональную информацию по вопросам, предлагаемым в форме регистрации, и поддерживает эту информацию в актуальном состоянии. Риск предоставления недостоверной информации несет предоставивший ее пользователь.<br>
                    1.1.3. Данные, которые автоматически передаются сервисам Сайта в процессе их использования с помощью установленного на устройстве Пользователя программного обеспечения, в том числе IP-адрес, данные файлов cookie, информация о браузере Пользователя (или иной программе, с помощью которой осуществляется доступ к сервисам), технические характеристики оборудования и программного обеспечения, используемых Пользователем, дата и время доступа к сервисам, адреса запрашиваемых страниц и иная подобная информация.<br>
                    1.1.4. Иная информация о Пользователе, обработка которой предусмотрена Соглашением об использовании Сайта.<br>
                    1.1.5. Настоящая Политика конфиденциальности применяется только к Сайту https://tenderconsalt.com. Сайт не контролирует и не несет ответственности за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на Сайте<br>
                </p>

                <p>
                    2. Цели обработки персональной информации пользователей<br>
                    2.1. Сайт собирает и хранит только ту персональную информацию, которая необходима для предоставления сервисов или исполнения соглашений и договоров с Пользователем, за исключением случаев, когда законодательством предусмотрено обязательное хранение персональной информации в течение определенного законом срока.<br>
                    2.2. Персональную информацию Пользователя Сайт обрабатывает в следующих целях:<br>
                    2.2.1. Идентификации Пользователя, зарегистрированного на Сайте, для использования всеми доступными сервисами Сайта, программами и продуктами.<br>
                    2.2.2. Предоставления Пользователю доступа к персонализированным ресурсам Сайта.<br>
                    2.2.3. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования Сайта, оказания услуг, обработку запросов и заявок от Пользователя.<br>
                    2.2.4. Улучшение качества работы Сайта, удобства использования, разработка новых сервисов и услуг.<br>
                    2.2.5. Осуществление рекламной деятельности.<br>
                    2.2.6. Проведение статистических и иных исследований на основе обезличенных данных.<br>
                </p>

                <p>
                    3. Условия обработки персональной информации пользователя и ее передачи третьим лицам<br>
                    3.1. Сайт хранит персональную информацию Пользователей в соответствии с внутренними регламентами конкретных сервисов.<br>
                    3.2. В отношении персональной информации Пользователя сохраняется ее конфиденциальность, кроме случаев добровольного предоставления Пользователем информации о себе для общего доступа неограниченному кругу лиц.<br>
                    3.3. Сайт вправе передать персональную информацию Пользователя третьим лицам в следующих случаях:<br>
                    3.3.1. Пользователь выразил согласие на такие действия.<br>
                    3.3.2. Передача необходима для использования Пользователем определенного сервиса либо для исполнения определенного соглашения или договора с Пользователем.<br>
                    3.3.4. Передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры.<br>
                    3.3.5. В случае продажи Сайта к приобретателю переходят все обязательства по соблюдению условий настоящей Политики применительно к полученной им персональной информации. 3.3.6. В целях обеспечения возможности защиты прав и законных интересов Администрации Сайта или третьих лиц в случаях, когда пользователь нарушает Условия пользования Сайта.<br>
                    3.4. Обработка персональных данных Пользователя осуществляется без ограничения срока любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств. Обработка персональных данных Пользователей осуществляется в соответствии с Федеральным законом от 27.07.2006 № 152-ФЗ «О персональных данных».<br>
                    3.5. При утрате или разглашении персональных данных Администрация Сайта информирует Пользователя об утрате или разглашении персональных данных.<br>
                    3.6. Администрация Сайта принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.<br>
                    3.7. Администрация Сайта совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.<br>
                </p>

                <p>
                    4. Обязательства сторон<br>
                    4.1. Пользователь обязан:<br>
                    4.1.1. Предоставить информацию о персональных данных, необходимую для пользования сервисами Сайта, перечисленными в П.1.4. «Соглашения об использовании материалов сайта».<br>
                    4.1.2. Обновлять, дополнять, удалять предоставленную информацию о персональных данных или ее часть в случае изменения данной информации.<br>
                    4.2. Администрация Сайта обязана:<br>
                    4.2.1. Использовать полученную информацию исключительно для целей, указанных в настоящей Политике конфиденциальности.<br>
                    4.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением предусмотренных настоящей Политикой конфиденциальности.<br>
                    4.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, обычно используемому для защиты такого рода информации в существующем деловом обороте.<br>
                    4.2.4. Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки в случае выявления недостоверных персональных данных или неправомерных действий.<br>
                </p>

                <p>
                    5. Ответственность Сторон<br>
                    5.1. Администрация Сайта, не исполнившая свои обязательства, несет ответственность за убытки, понесенные Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации.<br>
                    5.2. В случае утраты или разглашения конфиденциальной информации Администрация Сайта не несет ответственности, если данная конфиденциальная информация:<br>
                    5.2.1. Стала публичным достоянием до ее утраты или разглашения.<br>
                    5.2.2. Была получена от третьей стороны до момента ее получения Администрацией Сайта.<br>
                    5.2.3. Была разглашена с согласия Пользователя.<br>
                    5.3. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией Сайта применяется действующее законодательство Российской Федерации.<br>
                </p>

                <p>
                    6. Дополнительные условия<br>
                    6.1. Администрация Сайта вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.<br>
                    6.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на Сайте, если иное не предусмотрено новой редакцией Политики конфиденциальности.<br>
                    6.3. Настоящая Политика конфиденциальности является неотъемлемой частью Пользовательского соглашения, размещенного на странице по адресу: ______________
                </p>

            </div>
        </div>
    </div>
</div>


<script src="/js/jquery-1.11.0.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/slick.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script>
    new WOW().init();
</script>
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
/>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script src="/js/main.js"></script>


<script>
    $(function(){
        var elem = document.createElement('script');
        elem.type = 'text/javascript';
        elem.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afc3b80c7da7f898f856fe516fe0fc800a2af7cc55cda3a01f6f3670372a75ca8&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false&amp;';
        $('.contacts__map__wrap').append(elem);
        //2. Получить элемент, к которому необходимо добавить маску
        $("#input-phone").mask("+7 (999) 999-99-99");
    });

    $('button[type="submit"]').on('click', function () {
        $.post(
            "/site/sms",
            $("#contact").serializeArray(),
            function(data) {
                if (data.status == 1) {
                    $(".form-title").html("Ваша заявка принята!");
                    $("form>.form-content").hide();
                    $('button[type="submit"]').hide();
                    $('form>.form-agree').hide();
                }
            }
        );
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
