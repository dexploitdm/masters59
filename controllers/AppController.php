<?php

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller{

    protected function setMeta($title = null){
        $this->view->title = $title;

    }

}