<?php
namespace app\models;
use yii\base\Model;

class SignupFormRequest extends Model{

    public $term;
    public $sum;

    public function rules() {
        return [
            [['term', 'sum'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            'term' => 'Срок',
            'sum' => 'Сумма',
        ];
    }

}