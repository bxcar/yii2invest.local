<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//use yii\widgets\ActiveForm;

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
            <div style="width:60%"></div>
        </div>
        <div class="txt">
            <div style="left:0;">Прогресс профиля</div>
            <div style="left:50%;" class="green">Прогресс профиля</div>
            <div style="left:100%;">Прогресс профиля</div>
        </div>
    </div>


    <!-- #4 ФОтографии паспорта-->
    <main>
        <aside>
            <ul>
                <li class="done">Личные данные</li>
                <li class="done">Кредитный отчет</li>
                <li class="done">Привязать карту</li>
                <li>Фотография пасспорта</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section>
            <h2>Фотографии пасспорта</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были
                спокойны и так далее
            </div>

            <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data'],
                'id' => 'register-form-cabinetpassport',
                'fieldConfig' => [
                    'options' => [
                        'tag' => false,
                    ],
                ],
            ]) ?>

            <ul class="photos">
                <li>
                    <div class="img">
                        <?php if ($model->imageFile) { ?>
                            <img style="width: 121px; height: 95px; object-fit: cover;"
                                 src="/web/uploads/<?= $model->imageFile ?>" alt="">
                        <?php } else { ?>
                            <img src="/web/images/photo.png" alt=""/>
                        <?php } ?>
                    </div>
                    <h3>Фото 33-ей страницы пасспорта</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и
                        так далее</p>
                    <?= $form->field($model, 'imageFile')->fileInput()->label('Загрузить') ?>
                </li>
                <li>
                    <div class="img"><?php if ($model->imageFile2) { ?>
                            <img style="width: 121px; height: 95px; object-fit: cover;"
                                 src="/web/uploads/<?= $model->imageFile2 ?>" alt="">
                        <?php } else { ?>
                            <img src="/web/images/photo.png" alt=""/>
                        <?php } ?></div>
                    <h3>Фото лица на фоне пасспорта</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и
                        так далее</p>
                    <?= $form->field($model, 'imageFile2')->fileInput()->label('Загрузить') ?>
                </li>
            </ul>

            <?= Html::submitButton('Готово', ['class' => 'long']) ?>

            <div class="paginator" style="margin-top: 40px;">
                <button onclick="redirectBack()" class="back">< Назад</button>

                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li class="current"></li>
                    <li></li>
                </ul>

                <button onclick="redirectTo()" class="back">Далее ></button>
            </div>

            <script>
                function redirectBack() {
                    window.location = "/cabinetcardbinding";
                }

                function redirectTo() {
                    window.location = "/cabinetrequest";
                }
            </script>

            <style>
                #register-form-cabinetpassport label[for="signupformcabinetpassport-imagefile"],
                #register-form-cabinetpassport label[for="signupformcabinetpassport-imagefile2"] {
                    display: block;
                    width: 200px;
                    height: 65px;
                    text-decoration: none;
                    color: #fff;
                    text-align: center;
                    padding: 20px;
                    font-size: 18px;
                    font-weight: bold;
                    border-radius: 3px;
                    border: none;
                    background: #3c424d;
                    position: absolute;
                    right: 0;
                    top: 50%;
                    margin-top: -33px;
                    cursor: pointer;
                }

                #register-form-cabinetpassport label[for="signupformcabinetpassport-imagefile"]:hover,
                #register-form-cabinetpassport label[for="signupformcabinetpassport-imagefile2"]:hover {
                    background: #ebeced;
                    color: #32394d;
                }

                #register-form-cabinetpassport input {
                    display: none;
                }

                .paginator {
                    margin: 40px 0 0 0;
                    height: 65px;
                    text-align: center;
                }

                .paginator ul {
                    display: inline-block;
                    vertical-align: top;
                    margin: 25px 0;
                    padding: 0;
                    list-style: none;
                }

                .paginator ul li {
                    display: inline-block;
                    cursor: pointer;
                    background: #ebeced;
                    vertical-align: top;
                    width: 10px;
                    height: 10px;
                    margin: 5px;
                    border-radius: 5px;
                }

                .paginator ul li.current {
                    background: #3c424d;
                }

                .paginator button {
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
                }

                .paginator button:last-child {
                    float: right;
                }

                .paginator button:hover {
                    background: #ebeced;
                    color: #32394d;
                }
            </style>

            <?php ActiveForm::end() ?>
        </section>
    </main>
    <!-- ///////////#4 ФОтографии паспорта-->
</div>