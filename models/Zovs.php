<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zovs".
 *
 * @property integer $id
 * @property string $text
 * @property integer $user_id
 * @property string $date
 * @property string $sal
 */
class Zovs extends \yii\db\ActiveRecord
{
    const STATUS_ALLOW = 1;
    const STATUS_DISALLOW = 0;


    public static function tableName()
    {
        return 'zovs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id','status'], 'integer'],
            [['date'], 'safe'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'user_id' => 'User ID',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function isAllowed()
    {
        return $this->status;
    }

    public function allow()
    {
        $this->status = self::STATUS_ALLOW;
        return $this->save(false);
    }

    public function disallow()
    {
        $this->status = self::STATUS_DISALLOW;
        return $this->save(false);
    }

    public static function getRecentOtz()
    {
        return Zovs::find()->orderBy('date asc')->limit(5)->all();
    }

}
