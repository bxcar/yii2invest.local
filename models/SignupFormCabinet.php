<?php
namespace app\models;
use yii\base\Model;

class SignupFormCabinet extends Model{

    public $age;
    public $malefemale;
    public $status;
    public $familymembers;
    public $children;
    public $education;

    public function rules() {
        return [
            [['age', 'malefemale', 'status', 'familymembers', 'children', 'education'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            /*'email' => 'Email',
            'phone' => 'Телефон',*/
        ];
    }

}