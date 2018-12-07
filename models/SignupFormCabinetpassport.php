<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class SignupFormCabinetpassport extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $imageFile2;

    public function rules()
    {
        return [
            [['imageFile', 'imageFile2'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $this->imageFile2->saveAs('uploads/' . $this->imageFile2->baseName . '.' . $this->imageFile2->extension);
            return true;
        } else {
            return false;
        }
    }
}