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
            <div style="width:20%"></div>
        </div>
        <div class="txt">
            <div style="left:0;">Прогресс профиля</div>
            <div style="left:50%;" class="green">Прогресс профиля</div>
            <div style="left:100%;">Прогресс профиля</div>
        </div>
    </div>



    <!-- #2 Страница приложений-->
    <main>
        <aside>
            <ul>
                <li class="done">Личные данные</li>
                <li>Кредитный отчет</li>
                <li>Привязать карту</li>
                <li>Фотография пасспорта</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section class="steps">
            <h2>Кредитный отчет</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</div>

            <ul class="apps">
                <li class="mobile">
                    <div class="img"><img src="/web/images/app1.png" alt="" /></div>
                    <h3>Мобильное приложение</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</p>
                    <a href="">Скачать</a>
                </li>
                <li class="website">
                    <div class="img"><img src="/web/images/app2.png" alt="" /></div>
                    <h3>Мобильное приложение</h3>
                    <p>Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</p>
                    <a href="">Установить</a>
                </li>
            </ul>
            <div class="paginator">
                <button onclick="redirectBack()" class="back">< Назад</button>

                <ul>
                    <li></li>
                    <li class="current"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

                <?= Html::submitButton('Далее >', ['class' => '', 'onclick' => 'redirectTo()']) ?>
            </div>
        </section>
        <script>
            function redirectBack() {
                window.location = "/cabinet";
            }

            function redirectTo() {
                window.location = "/cabinetcardbinding";
            }
        </script>
    </main>
    <!-- ///////////#2 Страница приложений-->
</div>