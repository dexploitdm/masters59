<?php

namespace app\components;

use app\models\ContactForm;
use Yii;
use yii\base\Widget;


class FBFWidget extends Widget
{

    public function run()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted', "Ваш запрос отправлен. Наш специалист с Вами скоро свяжется");
        }
        return $this->render('fbfWidget', [
            'model' => $model,
        ]);
    }

}