<?php

namespace app\controllers;

use app\models\Banner;
use app\models\Comment;
use app\models\ZovsForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Afish;
use app\models\Zovs;
use app\models\CommentForm;
use app\models\Catalog;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $info = Banner::find()->all();
        $cataloges = Catalog::getAll();
        $best = Afish::getPopular();

        return $this->render('index',[
            'cataloges'=>$cataloges,
            'best'=>$best,
            'info'=>$info
        ]);
    }


    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */

    public function actionCatalog($id)
    {
        $data = Catalog::getAfishesByCatalog($id);
        $afish = Afish::findOne($id);
        $cataloges = Catalog::getAll();
        $popular = Afish::getPopular();
        $recent = Afish::getRecent();

        return $this->render('catalog',[
            'afishes'=>$data['afishes'],
            'afish'=>$afish,
            'popular'=>$popular,
            'recent'=>$recent,
            'cataloges'=>$cataloges,
            'pagination'=>$data['pagination']
        ]);
    }

    public function actionView($id)
    {
        $afish = Afish::findOne($id);
        $cataloges = Catalog::getAll();
        $popular = Afish::getPopular();
        $comments = $afish->getAfishComments();
        $commentForm = new CommentForm();

        $afish->viewedCounter();

        return $this->render('single',[
            'afish'=>$afish,
            'cataloges'=>$cataloges,
            'popular'=>$popular,
            'comments'=>$comments,
            'commentForm'=>$commentForm

        ]);
    }

    public function actionComment($id)
    {

        $model = new CommentForm();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id))
            {
                Yii::$app->getSession()->setFlash('comment', 'Ваш комментарий отправлен на проверку');
                return $this->redirect(['site/view','id'=>$id]);
            }
        }
    }

    public function actionAbout()
    {

        $zovsForm = new ZovsForm();
        $zovs = Zovs::find()->where(['status'=>'1'])->limit(10)->all();
        //$hs = Element::find()->where(['h' => '1'])->limit(1)->all();


        return $this->render('about',[
            'zovs'=>$zovs,
            'zovsForm'=>$zovsForm


        ]);
        //return $this->render('about',compact('zovsForm','zovs','commentForm'));
    }
    public function actionZovs()
    {
        $model = new ZovsForm();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveZovs())
            {
                Yii::$app->getSession()->setFlash('zovs', 'Ваш отправлен. Ожидайте одобрения на публикацию');
                return $this->redirect(['site/about']);
            }
        }

    }





}
