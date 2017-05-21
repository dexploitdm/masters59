<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property string $id
 * @property string $title1
 * @property string $title2
 * @property string $text1
 * @property string $text2
 * @property string $description
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text1', 'text2','description'], 'string'],
            [['title1', 'title2'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title1' => 'Название Слайда 1',
            'title2' => 'Название Слайда 2',
            'text1' => 'Текст слайда 1',
            'text2' => 'Текст Слайда 2',
            'description' => 'Описание Банера 2',
        ];
    }
}
