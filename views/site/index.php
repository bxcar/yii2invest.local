<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'My Yii Application';

$this->params['breadcrumbs'][] = $this->title;
?>
<section class="main-slide">
    <div class="header container">

        <div class="menu-wrap">
            <div class="logo"><a href=""><img src="/web/img/logo.png" alt=""></a></div>

        </div>

    </div>
    <div class="flex-wrap container">
        <div class="text-wrap">
            <div class="text-medium01">Какая вам необходима сумма и на какой срок?</div>
            <div class="text-light">Потягайте там справа ползунки и нажмите кнопку получить или перейдите сразу к
                регистрации в системе
            </div>
        </div>
        <div class="calculator-wrap">
            <div class="calculator">
                <div class="calc-group">

                    <div class="flex-wrap justify-center"><span class="text-light">Время вклада</span></div>
                    <div class="flex-wrap justify-center"><span class="text-light03 black"
                                                                id="duration1">4 000&nbsp;</span><span
                                class="text-light03 grey02">BYN</span></div>
                    <div class="rangeslider__labels slider">
                        <div id="slider"></div>
                    </div>

                    <div class="flex-wrap justify-center"><span class="text-light">Срок займа</span></div>
                    <div class="flex-wrap justify-center"><span class="text-light03 black"
                                                                id="duration2">10&nbsp;</span><span
                                class="text-light03 grey02">дней</span></div>
                    <div class="rangeslider__labels slider2">
                        <div id="slider2"></div>
                    </div>


                </div>
                <div class="call-box">
                    <div class="flex-wrap justify-center"><span
                                class="text-light">Ваш номер телефона для регистрации</span></div>
                    <?php $form = ActiveForm::begin([
                        'id' => 'register-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        ],
                    ]); ?>
                    <div class="flex-wrap-columns">
                        <input placeholder="+375 29 111 11 11" type="password" id="signupform-phone" class="form-control phone" name="SignupForm[phone]"
                               aria-required="true">
                        <input placeholder="Алексей Иванович" type="text" id="signupform-email" class="form-control name" name="SignupForm[email]"
                               aria-required="true">
                    </div>
                    <div>
                        <?= Html::submitButton('Проконсультироваться', ['class' => 'button-wrap']) ?>
                    </div>
                    <style>
                        .flex-wrap-columns {
                            width: 100%;
                            display: flex;
                            justify-content: space-between;
                        }

                        #register-form .form-control {
                            width: 45%;
                            outline: none;
                        }
                    </style>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
</section>

<section class="content">
    <div class="flex-wrap main-img">

        <div class="flex-wrap text-box">
            <div class="max-width">
                <span class="text-light03">Круглосуточно по всей стране </span>
                <span class="text-light">Получить займ онлайн очень просто: нужен паспорт и банковская карта, на которую поступят деньги. Рассчитать стоимость займа онлайн можно на главной странице - через онлайн калькулятор</span>
            </div>
        </div>
        <div class="flex-wrap images-box"><img src="/web/img/russia.jpg" alt=""></div>
    </div>
    <div class="flex-wrap main-img">
        <div class="flex-wrap images-box"><img src="/web/img/man.jpg" alt=""></div>
        <div class="flex-wrap text-box">
            <div class="max-width">
                <span class="text-light03">Без посещения банка </span>
                <span class="text-light">Получить займ онлайн очень просто: нужен паспорт и банковская карта, на которую поступят деньги. Рассчитать стоимость займа онлайн можно на главной странице - через онлайн калькулятор </span>
            </div>
        </div>
    </div>
    <div class="flex-wrap main-img">

        <div class="flex-wrap text-box">
            <div class="max-width">
                <span class="text-light03">Быстрое принятие решения </span>
                <span class="text-light">Получить займ онлайн очень просто: нужен паспорт и банковская карта, на которую поступят деньги. Рассчитать стоимость займа онлайн можно на главной странице - через онлайн калькулятор</span>
            </div>
        </div>
        <div class="flex-wrap images-box"><img src="/web/img/woman.jpg" alt=""></div>
    </div>
    <div class="flex-wrap main-img">
        <div class="flex-wrap images-box"><img src="/web/img/calc.jpg" alt=""></div>
        <div class="flex-wrap text-box">
            <div class="max-width">
                <span class="text-light03">Без справки о доходах</span>
                <span class="text-light">Получить займ онлайн очень просто: нужен паспорт и банковская карта, на которую поступят деньги. Рассчитать стоимость займа онлайн можно на главной странице - через онлайн калькулятор</span>
            </div>
        </div>
    </div>

</section>

<section class="content white01">
    <div class="container title-center"><span class="text-light03">Что необходимо для оформления</span></div>
    <div class="flex-wrap container space-between">
        <div class="slider-box">
            <img src="/web/img/credit-card.png" alt="" class="img-box">
            <span class="text-light">Банковская карта</span>
        </div>
        <div class="slider-box">
            <img src="/web/img/passport.png" alt="" class="img-box">
            <span class="text-light">Паспорт</span>
        </div>
        <div class="slider-box">
            <img src="/web/img/wallet.png" alt="" class="img-box">
            <span class="text-light">Подтвержденный доход </span>
        </div>
        <div class="slider-box">
            <img src="/web/img/team.png" alt="" class="img-box">
            <span class="text-light">Возраст от 18 до 75лет</span>
        </div>


    </div>

</section>


<section class="content green01 flex-column slider-box">
    <div class="container title-center"><span class="text-light03">Оформим за 10 минут</span></div>
    <div class="calculator-wrap">
        <div class="calculator">
            <div class="calc-group">

                <div class="flex-wrap justify-center"><span class="text-light">Время вклада</span></div>
                <div class="flex-wrap justify-center"><span class="text-light03 black" id="duration3"
                                                            style="color: #32394d;">8 000&nbsp;</span><span
                            class="text-light03 grey02">BYN</span></div>
                <div class="rangeslider__labels slider3">
                    <div id="slider3"></div>
                </div>

                <div class="flex-wrap justify-center"><span class="text-light">Срок займа</span></div>
                <div class="flex-wrap justify-center"><span class="text-light03 black" id="duration4"
                                                            style="color: #32394d;">10&nbsp;</span><span
                            class="text-light03 grey02">дней</span></div>
                <div class="rangeslider__labels slider4">
                    <div id="slider4"></div>
                </div>


            </div>
            <div class="call-box">
                <div class="flex-wrap justify-center"><span
                            class="text-light">Ваш номер телефона для регистрации</span></div>

                    <?php $form = ActiveForm::begin([
                        'id' => 'register-form1',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        ],
                    ]); ?>
                    <div class="flex-wrap-columns">
                        <input placeholder="+375 29 111 11 11" type="password" id="signupform1-phone" class="form-control phone" name="SignupForm[phone]"
                               aria-required="true">
                        <input placeholder="Алексей Иванович" type="text" id="signupform1-email" class="form-control name" name="SignupForm[email]"
                               aria-required="true">
                    </div>
                    <div>
                        <?= Html::submitButton('Проконсультироваться', ['class' => 'button-wrap']) ?>
                    </div>
                    <style>
                        .flex-wrap-columns {
                            width: 100%;
                            display: flex;
                            justify-content: space-between;
                        }

                        #register-form1 .form-control {
                            width: 45%;
                            outline: none;
                        }
                    </style>
                    <?php ActiveForm::end() ?>
            </div>
        </div>

</section>
<section class="content white01">
    <div class="container title-center"><span class="text-light03">Партнеры</span></div>
    <div class="flex-wrap container space-between">
        <div class="partner-box">
            <img src="/web/img/partner1.png" alt="" class="img-box">

        </div>
        <div class="partner-box">
            <img src="/web/img/partner2.png" alt="" class="img-box">

        </div>
        <div class="partner-box">
            <img src="/web/img/partner3.png" alt="" class="img-box">

        </div>
        <div class="partner-box">
            <img src="/web/img/partner4.png" alt="" class="img-box">

        </div>


    </div>
</section>

<section class="footer">
    <div class="container flex space-between">
        <div class="footer-sect">
            <a class="flex-wrap" href="">
                <img src="/web/img/logo01.png" alt="">
            </a>
        </div>
        <div class="footer-sect01 flex flex-column">

        </div>
        <div class="footer-sect01 flex flex-column">

        </div>
        <div class="footer-sect flex flex-column">
            <div class="flex flex-column call-wrap">
                <span class="text-medium02">Всегда готовы помочь</span>
                <a href="tel:+375 29 000 00 00" class="text-medium05">+375 29 000 00 00</a>
            </div>
            <div class="flex-wrap call-wrap opacity">
                <span class="text-medium02">Общие вопросы:&nbsp;</span><a href="mailto:info@daver.by"
                                                                          class="text-light mailto">info@daver.by</a>
            </div>

        </div>
    </div>
</section>
<section class="copyright">
    <div class="container copyright-txt opacity">© 2015-2018 ООО “Выберибай”</div>
</section>