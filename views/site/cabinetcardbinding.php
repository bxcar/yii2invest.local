<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="wrap">
    <nav>
        <a href="" class="logo"></a>

        <ul class="navs">
            <li><a href="">О нас</a></li>
            <li><a href="">Вопрос-ответ</a></li>
            <li><a href="">Контакты</a></li>
        </ul>

        <ul class="btns">
            <li>
                <button onclick="" class="blue">Получить займ</button>
            </li>
            <li>
                <button onclick="" class="green">Инвестировать</button>
            </li>
            <!--            <li><button onclick="">Выйти</button></li>-->
            <li><a href="<?= Url::to(['site/logout']) ?>" data-method="post">Выйти</a></li>
        </ul>
    </nav>

    <!-- # Статусбар-->

    <div class="status" id="status">
        <div class="progress">
            <div style="width:40%"></div>
        </div>
        <div class="txt">
            <div style="left:0;">Прогресс профиля</div>
            <div style="left:50%;" class="green">Прогресс профиля</div>
            <div style="left:100%;">Прогресс профиля</div>
        </div>
    </div>

    <!-- # ///////////Статусбар-->


    <!-- #1 Страница карты-->
    <main>
        <div class="caption">
            <h1>Личный кабинет</h1>
        </div>

        <aside>
            <ul>
                <li class="done">Личные данные</li>
                <li class="done">Кредитный отчет</li>
                <li>Привязать карту</li>
                <li>Фотография пасспорта</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section class="steps" style="height: 600px;">
            <h2>Привязка карты</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</div>
            <div class="card">
                <?php $form = ActiveForm::begin([
                    'id' => 'register-form-cabinetcardbinding',
                    'fieldConfig' => [
                        'options' => [
                            'tag' => false,
                        ],
                    ],
                ]); ?>
                <div id="step1">

                    <div>
                        <div class="row number">
                            <?php echo $form->field($model, 'card_number', ['template' => "{input}"])->textInput()->input('card_number', ['placeholder' => "Номер карты"])->label(false); ?>
                        </div>
                        <div class="row date">
                            <?php echo $form->field($model, 'card_month', ['template' => "{input}"])->textInput()->input('card_month', ['placeholder' => "Месяц"])->label(false); ?>
                            <?php echo $form->field($model, 'card_year', ['template' => "{input}"])->textInput()->input('card_year', ['placeholder' => "Год"])->label(false); ?>
                        </div>
                        <div class="row holder">
                            <?php echo $form->field($model, 'card_holder_name', ['template' => "{input}"])->textInput()->input('card_holder_name', ['placeholder' => "Имя держателя карты"])->label(false); ?>
                        </div>
                        <div class="row cvv">
                            <?php echo $form->field($model, 'card_cvv', ['template' => "{input}"])->textInput()->input('card_cvv', ['placeholder' => "CVV"])->label(false); ?>
                        </div>
                    </div>


                    <div class="paginator" style="margin-top: 100px;">
                        <div onclick="redirectBack()" class="back">< Назад</div>

                        <ul>
                            <li></li>
                            <li></li>
                            <li class="current"></li>
                            <li></li>
                            <li></li>
                        </ul>

                        <?= Html::submitButton('Далее >', ['class' => '']) ?>
                    </div>

                </div>

                <style>
                    #register-form-cabinetcardbinding .help-block {
                        display: none;
                    }

                    .back {
                        float: left;
                        transition: 0.5s;
                        font-size: 18px;
                        color: #fff;
                        font-weight: bold;
                        width: 145px;
                        height: 65px;
                        border-radius: 5px;
                        border: none;
                        background: #3c424d;
                        cursor: pointer;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .back:hover {
                        background: #ebeced;
                        color: #32394d;
                    }
                </style>

                <?php ActiveForm::end(); ?>
            </div>
        </section>
        <script>
            function redirectBack() {
                window.location = "/cabinetcreditreport";
            }
        </script>
    </main>
    <!-- ///////////#1 Страница карты-->
</div>