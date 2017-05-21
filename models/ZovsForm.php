<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ZovsForm extends Model
{
    public $zovs;

    public function rules()
    {
        return [
            [['zovs'], 'required'],
            [['zovs'], 'string', 'length' => [3,250]]
        ];
    }

    public function saveZovs()
    {
        $zovs = new Zovs;
        $zovs->text = $this->zovs;
        $zovs->user_id = Yii::$app->user->id;
        $zovs->date = date('Y-m-d');
        $zovs->status = 0;
        return $zovs->save();

    }
}