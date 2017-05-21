<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model {

    public $image;

    public function rules()
    {
        return [
            [['image'],'required'],
            [['image'],'file','extensions'=> 'jpg,png']
        ];
    }



    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;
        if($this->validate()){
            //Удаляем картинку, только в том случае, если она существует
            $this->deleteCurrentImage($currentImage);
            return $this->saveImage();
            //Возвращаем название изображения, чтобы передать ее модели статьи,
            // что бы она сохранила ее имя в базе
        }
    }
//Выбор каталога
    private function getFolder()
    {
        return Yii::getAlias('@web') . 'uploads/';
    }
//Генерация
    private function generateFilename()
    {
        return strtolower(md5(uniqid($this->image->baseName)).'.'.$this->image->extension);
    }
//Удаление текущего изображения
    public function deleteCurrentImage($currentImage)
    {
        if($this->fileExists($currentImage))
        {
            unlink($this->getFolder() . $currentImage);
        }
    }
    public function fileExists($currentImage)
    {
        if(!empty($currentImage) && $currentImage != null)
        {
            return file_exists($this->getFolder() .$currentImage);
        }
    }
//Загрузка картинки
    public function saveImage()
    {
        //Генерируем название картинки
        $filename = $this->generateFilename();
        //Указываем путь, куда будет сохраняться изображение
        $this->image->saveAs($this->getFolder() .$filename);
        return $filename;
    }


}


?>