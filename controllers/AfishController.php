<?php


namespace app\controllers;
use app\models\Catalog;
use app\models\ImageUpload;
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
     * Displays a single Afish model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $afish = Afish::findOne($id);
        return $this->render('view', [
            'afish' => $afish
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

        if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {
            Yii::$app->session->setFlash('afish', "Запись добавлена. Ожидайте проверку на публикацию");
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
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
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
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
        $model = $this->findModel($id);

        if ( $model->delete()){
            $model->deleteCover();
        }
        return $this->redirect(['main']);
    }

    public function actionSetImage($id)
    {
        $model = new ImageUpload;
        if(Yii::$app->request->isPost){
            $afish = $this->findModel($id);
            //Загрузка файла
            $file = UploadedFile::getInstance($model, 'image');
            //Передаем его в модель методу uploadFile
            if($afish->saveImage($model->uploadFile($file, $afish->image)))
            {
                return $this->redirect(['view', 'id'=>$afish->id]);
            }
        }

        //Отображение вида с формы, где будем отображать картинку
        return $this->render('image', ['model'=>$model]);
    }


}