<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property string $text
 * @property integer $user_id
 * @property integer $status
 * @property string $date
 */
class Comment extends \yii\db\ActiveRecord
{
    const STATUS_ALLOW = 1;
    const STATUS_DISALLOW = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'afish_id', 'status'], 'integer'],
            [['text'], 'string', 'max' => 255],
            [['afish_id'], 'exist', 'skipOnError' => true, 'targetClass' => Afish::className(), 'targetAttribute' => ['afish_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'afish_id' => 'Afish ID',
            'status' => 'Status',
            'date' => 'Date',
        ];
    }

    public function getAfish()
    {
        return $this->hasOne(Afish::className(), ['id' => 'afish_id']);
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

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date);
    }

    public function getRecentCom()
    {
        return Comment::find()->orderBy('date asc')->limit(5)->all();
    }


}
