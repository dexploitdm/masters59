<?php
namespace app\modules\admin\controllers;

use app\models\Zovs;
use yii\web\Controller;

class ZovsController extends Controller
{
    public function actionIndex()
    {
        $zovs = Zovs::find()->all();
        return $this->render('index',['zovs'=>$zovs]);
    }

    public function actionDelete($id)
    {
        $zovs = Zovs::findOne($id);
        if($zovs->delete())
        {
            return $this->redirect(['zovs/index']);
        }
    }

    public function actionAllow($id)
    {
        $zovs = Zovs::findOne($id);
        if($zovs->allow())
        {
            return $this->redirect(['index']);
        }
    }
    public function actionDisallow($id)
    {
        $zovs = Zovs::findOne($id);
        if($zovs->disallow())
        {
            return $this->redirect(['index']);
        }
    }
}

?>