<?php

namespace app\modules\admin\controllers;

use app\models\ImageUpload;
use Yii;
use app\models\Afish;
use app\models\Catalog;
use app\models\AfishSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AfishController implements the CRUD actions for Afish model.
 */
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
     * Lists all Afish models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AfishSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Afish model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
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


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Afish model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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


    public function actionSetCatalog($id)
    {
        $afish = $this->findModel($id);
        //Передаем текущею категорию виду
        $selectedCatalog =$afish->catalog->id;
        //Вывод список категорий из базы
        $cataloges = ArrayHelper::map(Catalog::find()->all(), 'id','title');
        //Отлавливаем значение из DropDawn
        if(Yii::$app->request->isPost)
        {
            $catalog = Yii::$app->request->post('catalog');
            if($afish->saveCatalog($catalog))
            {
                return $this->redirect(['view','id'=>$afish->id]);
            }


        }

        return $this->render('catalog', [
            'afish'=>$afish,
            'selectedCatalog'=>$selectedCatalog,
            'cataloges'=>$cataloges
        ]);
    }





}
