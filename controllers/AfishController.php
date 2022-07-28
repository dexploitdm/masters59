<?php


namespace app\controllers;
use app\models\Catalog;
use app\models\User;
use Yii;
use app\models\Afish;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class AfishController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Finds the Afish model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Afish the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Afish::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionIndex()
    {
        $model = new Afish();
        $cataloges = ArrayHelper::map(Catalog::find()->all(), 'id','title');
        return $this->render('index', [
            'model'=>$model,
            'cataloges'=>$cataloges
        ]);
    }

    /**
     * Lists all user Afish models.
     * @return mixed
     */
    public function actionMain()
    {
        $user = User::findOne(Yii::$app->user->id);
        $afish = $user->getUserAfish();

        //var_dump($afish);

        return $this->render('main', [
            'afish'=>$afish
        ]);
    }

    /**
     * Creates a new Afish model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Afish();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image){
                $model->upload();
            }

            if($model->saveArticle())
            {
                Yii::$app->getSession()->setFlash('afish', 'Ваш запрос отправлен. Ожидайте одобрения на публикацию');
                return $this->redirect(['afish/main']);
            }
        }
    }

    /**
     * Updates an existing Afish model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $cataloges = ArrayHelper::map(Catalog::find()->all(), 'id','title');
        $selectedCatalog = $model->catalog->id;
        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image){
                $model->upload();
            }
            //unset($model->image);
            if( $model->saveArticle()){
                return $this->redirect(['main']);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'cataloges' => $cataloges,
                'selectedCatalog' => $selectedCatalog,
            ]);
        }
    }

    /**
     * Deletes an existing Afish model.
     * If deletion is successful, the browser will be redirected to the 'main' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['main']);
    }



}