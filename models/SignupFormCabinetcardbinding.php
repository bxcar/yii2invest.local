<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SignupFormCabinetcardbinding extends Model
{
    public $card_number;
    public $card_month;
    public $card_year;
    public $card_holder_name;
    public $card_cvv;

    public function rules() {
        return [
            [['card_number', 'card_month', 'card_year', 'card_holder_name', 'card_cvv'], 'safe', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            'card_number' => 'Номер карты',
            'card_month' => 'Месяц',
            'card_year' => 'Год',
            'card_holder_name' => 'Имя держателя карты',
            'card_cvv' => 'CVV',
        ];
    }
}
