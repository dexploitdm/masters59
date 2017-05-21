<?php

namespace app\modules\admin\controllers;

use app\models\Afish;
use app\models\Comment;
use app\models\Zovs;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $recentOtz = Zovs::getRecentOtz();
        $recenCom = Comment::getRecentCom();
        return $this->render('index',[
            'recentOtz'=>$recentOtz,
            'recenCom'=>$recenCom,


        ]);
    }
}
