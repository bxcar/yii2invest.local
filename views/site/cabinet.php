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
            <div style="width:0"></div>
        </div>
        <div class="txt">
            <div style="left:0;">Прогресс профиля</div>
            <div style="left:50%;" class="green">Прогресс профиля</div>
            <div style="left:100%;">Прогресс профиля</div>
        </div>
    </div>

    <!-- # ///////////Статусбар-->


    <!-- #1 Страница карты-->
    <!--<main>
        <div class="caption">
            <h1>Личный кабинет</h1>
        </div>

        <aside>
            <ul>
                <li class="done">ФИО</a></li>
                <li class="done">Личные данные</li>
                <li>Кредитный отчет</li>
                <li>Фотография пасспорта</li>
                <li>Привязать карту</li>
                <li>Подать заявку</a></li>
            </ul>
        </aside>

        <section>
            <h2>Привязка карты</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</div>
            <div class="card">
                <form action="" method="POST" name="">
                    <div>
                        <div class="row number">
                            <input name="" type="text" value="" placeholder="Card Number" />
                        </div>
                        <div class="row date">
                            <input name="" type="text" value="" placeholder="Month" />
                            <input name="" type="text" value=""placeholder="Year" />
                        </div>
                        <div class="row holder">
                            <input name="" type="text" value="" placeholder="Card Holder Name" />
                        </div>
                        <div class="row cvv">
                            <input name="" type="text" value="" placeholder="CVV" />
                        </div>
                    </div>
                    <button onclick="" class="long">Готово</button>
                </form>
            </div>
        </section>
    </main>-->
    <!-- ///////////#1 Страница карты-->


    <!-- #2 Страница приложений-->
    <!--<main>
        <aside>
            <ul>
                <li class="done">ФИО</li>
                <li class="done">Личные данные</li>
                <li>Кредитный отчет</li>
                <li>Фотография пасспорта</li>
                <li>Привязать карту</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section>
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
        </section>
    </main>-->
    <!-- ///////////#2 Страница приложений-->

    <!-- #3 Личные данные-->
    <main>
        <aside>
            <ul>
                <li>Личные данные</li>
                <li>Кредитный отчет</li>
                <li>Привязать карту</li>
                <li>Фотография пасспорта</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section class="steps">
            <h2>Личные данные</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были
                спокойны и так далее
            </div>


            <?php $form = ActiveForm::begin(['id' => 'register-form-cabinet']); ?>
            <div id="step1">

                <div class="col">
                <?= $form->field($model, 'age')->dropDownList([
                    '0' => 'Выбрать',
                    '20' => '20',
                    '30' => '30',
                    '40' => '40'
                ]); ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'malefemale')->dropDownList([
                        '0' => 'Выбрать',
                        'Мужской' => 'Мужской',
                        'Женский' => 'Женский'
                    ]); ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'status')->dropDownList([
                        '0' => 'Выбрать',
                        'Сосотою в брак' => 'Сосотою в браке',
                        'Не состою в браке' => 'Не состою в браке',
                    ]); ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'familymembers')->dropDownList([
                        '0' => 'Выбрать',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5'
                    ]); ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'children')->dropDownList([
                        '0' => 'Выбрать',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5'
                    ]); ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'education')->dropDownList([
                        '0' => 'Выбрать',
                        'Высше' => 'Высшее',
                        'Неоконченное высше' => 'Неоконченное высшее',
                        'Среднее' => 'Среднее'
                    ]); ?>
                </div>


                <div class="paginator">
                    <button onclick="" disabled>< Назад</button>

                    <ul>
                        <li class="current"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <?= Html::submitButton('Далее >', ['class' => '']) ?>
                </div>

            </div>

            <?php ActiveForm::end(); ?>

        </section>
    </main>
    <!-- ///////////#3 Личные данные-->

    <!-- #4 ФОтографии паспорта-->
    <!--<main>
        <aside>
            <ul>
                <li class="done">ФИО</li>
                <li class="done">Личные данные</li>
                <li>Кредитный отчет</li>
                <li>Фотография пасспорта</li>
                <li>Привязать карту</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section>
            <h2>Фотографии пасспорта</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</div>

            <ul class="photos">
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
            </ul>

            <button onclick="" class="long">Готово</button>
        </section>
    </main>-->
    <!-- ///////////#4 ФОтографии паспорта-->


    <!-- #5 заявка на займ-->
    <!--<main>
        <aside>
            <ul>
                <li class="done">ФИО</li>
                <li class="done">Личные данные</li>
                <li>Кредитный отчет</li>
                <li>Фотография пасспорта</li>
                <li>Привязать карту</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section>
            <h2>Ваша заявка на займ</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</div>

            <table>
                <tr>
                    <th>Срок</th>
                    <th>Сумма</th>
                    <th></th>
                </tr>
                <tr>
                    <td>6 месяцев</td>
                    <td>10 000 BYN</td>
                    <td><a href="">Редактировать</a></td>
                </tr>
                <tr>
                    <td>6 месяцев</td>
                    <td>10 000 BYN</td>
                    <td><a href="">Редактировать</a></td>
                </tr>
                <tr>
                    <td>6 месяцев</td>
                    <td>10 000 BYN</td>
                    <td><a href="">Редактировать</a></td>
                </tr>
                <tr>
                    <td>6 месяцев</td>
                    <td>10 000 BYN</td>
                    <td><a href="">Редактировать</a></td>
                </tr>
            </table>

            <button onclick="" class="long">Отправить заявку</button>
        </section>
    </main>-->
    <!-- ///////////#5 Заявка на займ-->
</div>