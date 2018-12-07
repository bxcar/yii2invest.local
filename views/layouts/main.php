<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->

<!--    <link media="all" href="css/template2.css" type="text/css" rel="stylesheet">-->
<!--    <link media="all" href="css/responsive2.css" type="text/css" rel="stylesheet">-->
    <!--<link rel="stylesheet" href="/uikit-2.26.4css/uikit.min.css" />
    <script src="/uikit-2.26.4/js/components/sticky.js"></script>
    <script src="/uikit-2.26.4/js/uikit.min.js"></script>-->
<!--    <link rel="stylesheet" href="css/jquery-ui2.css">-->

<!--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#slider" ).slider();
    } );
    $( function() {
        $( "#slider2" ).slider();
    } );
    $( function() {
        $( "#slider3" ).slider();
    } );
    $( function() {
        $( "#slider4" ).slider();
    } );
</script>
<script>
    $( function() {
        $( "#slider" ).slider({
            value:4000,
            min: 0,
            max: 8000,
            step: 10,
            slide: function( event, ui ) {

                var sum = $('#deposit1').val();
                $('#duration1').text(ui.value);
                if (!sum) return;
                var daverProfit = ui.value ;
                $('#daverProfit1').text(daverProfit.toFixed(2));
            }
        });

        $( "#slider2" ).slider();
    } );
</script>
<script>
    $( function() {
        $( "#slider2" ).slider({
            value:10,
            min: 0,
            max: 365,
            step: 1,
            slide: function( event, ui ) {

                var sum = $('#deposit1').val();
                $('#duration2').text(ui.value);
                if (!sum) return;
                var daverProfit = ui.value ;
                $('#daverProfit1').text(daverProfit.toFixed(2));
            }
        });

        $( "#slider3" ).slider();
    } );
</script>
<script>
    $( function() {
        $( "#slider3" ).slider({
            value:10,
            min: 0,
            max: 365,
            step: 1,
            slide: function( event, ui ) {

                var sum = $('#deposit1').val();
                $('#duration3').text(ui.value);
                if (!sum) return;
                var daverProfit = ui.value ;
                $('#daverProfit1').text(daverProfit.toFixed(2));
            }
        });

        $( "#slider4" ).slider();
    } );
</script>
<script>
    $( function() {
        $( "#slider4" ).slider({
            value:10,
            min: 0,
            max: 365,
            step: 1,
            slide: function( event, ui ) {

                var sum = $('#deposit1').val();
                $('#duration4').text(ui.value);
                if (!sum) return;
                var daverProfit = ui.value ;
                $('#daverProfit1').text(daverProfit.toFixed(2));
            }
        });

        $( "#slider5" ).slider();
    } );
</script>
<script>
    $('#signupform-term').attr('value', $('#duration2').html());
    $("body").on('DOMSubtreeModified', "#duration2", function() {
        $('#signupform-term').attr('value', $('#duration2').html());
    });

    $('#signupform1-term').attr('value', $('#duration3').html());
    $("body").on('DOMSubtreeModified', "#duration3", function() {
        $('#signupform1-term').attr('value', $('#duration3').html());
    });

    $('#signupform-sum').attr('value', $('#duration1').html());
    $("body").on('DOMSubtreeModified', "#duration1", function() {
        $('#signupform-sum').attr('value', $('#duration1').html());
    });

    $('#signupform1-sum').attr('value', $('#duration4').html());
    $("body").on('DOMSubtreeModified', "#duration4", function() {
        $('#signupform1-sum').attr('value', $('#duration4').html());
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
