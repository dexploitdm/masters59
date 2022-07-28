<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "catalog".
 *
 * @property string $id
 * @property string $title
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
        ];
    }

    public function getAfishes()
    {
        return $this->hasMany(Afish::className(),['catalog_id'=>'id']);
    }

    public static function getAll()
    {
        return Catalog::find()->all();
    }

    public static function getAfishesByCatalog($id)
    {
        // build a DB query to get all articles
        $query = Afish::find()->where(['catalog_id'=>$id, 'status'=>'1']);

        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();

        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>7]);

        // limit the query using the pagination and retrieve the articles
        $afish = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['afishes'] = $afish;
        $data['pagination'] = $pagination;

        return $data;
    }

    public function viewedaCounter()
    {
        $this->viewed += 1;
        return $this->save(false);
    }

}
