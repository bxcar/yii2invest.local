<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset2;

AppAsset2::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="fav16.ico">
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="/web/css/style.css" />
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
<footer>
    <div class="info">
        <div class="wrap">

            <div class="col">
                <div class="txt">Свидетельство о внесении сведений о юридическом лице в государственный реестр микрофинансовых организаций за регистрационным номером УНП 2120177002077</div>
                <a href="" class="downloadApp">Давер App<span>Скачать с Google Play</span></a>
            </div>

            <div class="col">
                <div class="caption">Быстрый переход</div>
                <ul>
                    <li><a href="">О нас</a></li>
                    <li><a href="">Вопрос-ответ</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </div>
            <div class="col">
                <div class="caption">Информация о компании</div>
                <ul>
                    <li><a href="">О компании</a></li>
                    <li><a href="">Новости</a></li>
                    <li><a href="">Награды</a></li>
                    <li><a href="">Инвесторам</a></li>
                    <li><a href="">Партнерская программа</a></li>
                    <li><a href="">Свидетельства</a></li>
                    <li><a href="">Необходимые документы</a></li>
                    <li><a href="">Раскрытие информации</a></li>
                </ul>
            </div>
            <div class="col">
                <div  class="caption">Всегда готовы помочь</div>

                <div class="txt">
                    <a href="tel:+375290000000" class="phone">+375 29 000 00 00</a>
                    Общие вопросы: info@daver.by<br />288200, г. Минск, ул. Победителей, д.1 офис 1
                </div>
            </div>
            <a href="" class="logo"></a>
        </div>
    </div>
    <div class="copyright">
        <div class="wrap">
            © 2015-2018 ООО “Выберибай” <br />При использовании материалов гиперссылка на Vibery.by обязательна. *Белгазпромбанк осуществляет кредитование населения на основе лицензии на осуществление банковской деятельности №8 от 24.05.2013 *МТБанк осуществляет кредитование населения на основе лицензии на осуществление банковской деятельности №13 от 06.05.2013 *Приорбанк осуществляет кредитование населения на основе лицензии на осуществление банковской деятельности №12 от 06.05.2013 *Абсолютбанк осуществляет кредитование населения на основе лицензии на осуществление банковской деятельности № 9 от 24.06.2015 *Технобанк осуществляет кредитование
        </div>
    </div>
</footer>
<script>
    $( "#term-sum-form .click-link" ).click(function() {
        $('#term-sum-form .hide-on-click').css('display', 'none');
        $('#term-sum-form input').css('display', 'inline-block');
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
