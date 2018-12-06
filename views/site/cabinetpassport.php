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
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</div>

            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

            <ul class="photos">
                <li>
                    <div class="img"><img src="/web/images/photo.png" alt="" /></div>
                    <h3>Фото 33-ей страницы пасспорта</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</p>
<!--                    <button onclick="" class="edit">Изменить</button>-->
                    <?= $form->field($model, 'imageFile')->fileInput() ?>
                </li>
                <li>
                    <div class="img"><img src="/web/images/photo.png" alt="" /></div>
                    <h3>Фото лица на фоне пасспорта</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</p>
                    <button onclick="" class="loader">Загрузить</button>
                </li>
            </ul>

            <?php ActiveForm::end() ?>
            <!--<ul class="photos">
                <li>
                    <div class="img"><img src="/web/images/photo.png" alt="" /></div>
                    <h3>Фото 33-ей страницы пасспорта</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</p>
                    <button onclick="" class="edit">Изменить</button>
                </li>
                <li>
                    <div class="img"><img src="/web/images/photo.png" alt="" /></div>
                    <h3>Фото лица на фоне пасспорта</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</p>
                    <button onclick="" class="loader">Загрузить</button>
                </li>
            </ul>-->

            <button onclick="" class="long">Готово</button>
        </section>
    </main>
    <!-- ///////////#4 ФОтографии паспорта-->
</div>