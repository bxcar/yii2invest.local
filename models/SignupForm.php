<?php
namespace app\models;
use yii\base\Model;

class SignupForm extends Model{

    public $email;
    public $phone;
    public $auth_key;
    public $access_token;

    public function rules() {
        return [
            [['email', 'phone'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            'email' => 'Email',
            'phone' => 'Телефон',
        ];
    }

}