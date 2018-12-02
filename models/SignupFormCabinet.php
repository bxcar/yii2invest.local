<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SignupFormCabinet extends Model
{
    public $age;
    public $malefemale;
    public $status;
    public $familymembers;
    public $children;
    public $education;

    public function rules() {
        return [
            [['age', 'malefemale', 'status', 'familymembers', 'children', 'education'], 'safe', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            'age' => 'Возраст',
            'malefemale' => 'Пол',
            'status' => 'Семейный статус',
            'familymembers' => 'Количество членов семьи',
            'children' => 'Количество детей',
            'education' => 'Образование',
        ];
    }
}
