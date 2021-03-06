<?php
namespace app\models;
use yii\base\Model;

class SignupForm extends Model{

    public $email;
    public $phone;
    public $term;
    public $sum;
    public $auth_key;
    public $access_token;

    public function rules() {
        return [
            [['email', 'phone', 'term', 'sum'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            'email' => 'Email',
            'phone' => 'Телефон',
            'term' => 'Срок',
            'sum' => 'Сумма',
        ];
    }

}