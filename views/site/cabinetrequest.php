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
            <div style="width:80%"></div>
        </div>
        <div class="txt">
            <div style="left:0;">Прогресс профиля</div>
            <div style="left:50%;" class="green">Прогресс профиля</div>
            <div style="left:100%;">Прогресс профиля</div>
        </div>
    </div>


    <!-- #5 заявка на займ-->
    <main>
        <aside>
            <ul>
                <li class="done">Личные данные</li>
                <li class="done">Кредитный отчет</li>
                <li class="done">Привязать карту</li>
                <li class="done">Фотография пасспорта</li>
                <li>Подать заявку</li>
            </ul>
        </aside>

        <section>
            <h2>Ваша заявка на займ</h2>
            <div class="txt">Для скоринговой оценки вашего чего то там и банки и всякое такое, ну тип что бы были спокойны и так далее</div>

            <?php $form = ActiveForm::begin([
                'id' => 'term-sum-form',
                'fieldConfig' => [
                    'options' => [
                        'tag' => false,
                    ],
                ],
            ]); ?>

            <table>
                <tr>
                    <th>Срок</th>
                    <th>Сумма</th>
                    <th></th>
                </tr>
                <tr>
                    <td><span class="hide-on-click"><?= $row_term[0]['term'] ?></span>
                        <input id="term-sum-form-term" class="form-control term" name="SignupFormRequest[term]" aria-required="true" value="<?= $row_term[0]['term'] ?>"> <?= num2word($row_term[0]['term'], array('день', 'дня', 'дней'))?>
                    </td>
                    <td><span class="hide-on-click"><?= $row_sum[0]['sum'] ?></span>
                        <input id="term-sum-form-sum" class="form-control sum" name="SignupFormRequest[sum]" aria-required="true" value="<?= $row_sum[0]['sum'] ?>"> BYN</td>
                    <td><a class="click-link">Редактировать</a></td>
                </tr>
            </table>
            <?= Html::submitButton('Обновить', ['class' => 'long']) ?>

            <div class="paginator" style="margin-top: 40px;">
                <div onclick="redirectBack()" class="back">< Назад</div>

                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li class="current"></li>
                </ul>

                <button style="visibility: hidden" onclick="" class="back">Далее ></button>
            </div>

            <?php ActiveForm::end(); ?>
        </section>
    </main>
    <?php
    function num2word($num, $words)
    {
        $num = $num % 100;
        if ($num > 19) {
            $num = $num % 10;
        }
        switch ($num) {
            case 1: {
                return($words[0]);
            }
            case 2: case 3: case 4: {
            return($words[1]);
        }
            default: {
                return($words[2]);
            }
        }
    }
    ?>

    <script>
        function redirectBack() {
            window.location = "/cabinetpassport";
        }
    </script>
    <style>
        .long {
            margin-bottom: 20px;
        }

        #term-sum-form input {
            width: 80px;
            padding: 5px 10px;
            box-sizing: border-box;
        }

        #term-sum-form input {
            display: none;
        }

        .click-link {
            text-decoration: underline;
            cursor: pointer;
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
    <!-- ///////////#5 Заявка на займ-->
</div>