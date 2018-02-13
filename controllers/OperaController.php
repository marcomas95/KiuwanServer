<?php

namespace app\controllers;


use Yii;
use app\models\Opera;
use app\models\OperaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\mysql\QueryBuilder;

/**
 * OperaController implements the CRUD actions for Opera model.
 */
class OperaController extends Controller
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
     * Lists all Opera models.
     * @return mixed
     */
    public function actionShow($id)
    {
        $opera = Opera::find()->all();
        return $this->render('showOperas',['opera'=>$opera, 'id'=>$id]);
    }

    /**
     * Lists all Opera models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (isset($_SESSION['__id']) ) {
            $searchModel = new OperaSearch();
            $dataProvider = $searchModel->search(Yii::$app->getUser()->identity->id_museo);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Displays a single Opera model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (isset($_SESSION['__id']) and Yii::$app->getUser()->identity->ruolo == "operatore" and $this->findModel($id)->id_museo ==               Yii::$app->getUser()->identity->id_museo) {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        } elseif (isset($_SESSION['__id']) and Yii::$app->getUser()->identity->ruolo == "admin"){
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        } else {
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Creates a new Opera model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (isset($_SESSION['__id'])) {
            $model = new Opera();
            $model->id_museo =  Yii::$app->getUser()->identity->id_museo;
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_opera]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Updates an existing Opera model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (isset($_SESSION['__id']) and Yii::$app->getUser()->identity->ruolo == "operatore" and $this->findModel($id)->id_museo ==                Yii::$app->getUser()->identity->id_museo) {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_opera]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }elseif (isset($_SESSION['__id']) and Yii::$app->getUser()->identity->ruolo == "admin") {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_opera]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Deletes an existing Opera model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (isset($_SESSION['__id']) and Yii::$app->getUser()->identity->ruolo == "operatore" and $this->findModel($id)->id_museo ==                Yii::$app->getUser()->identity->id_museo) {
            $this->findModel($id)->delete();
            return $this->redirect(['index']);

        } elseif (isset($_SESSION['__id']) and Yii::$app->getUser()->identity->ruolo == "admin") {
            $this->findModel($id)->delete();
            return $this->redirect(['index']);

        } else {
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Send a json to the client
     *
     */
    public function actionSend()
    {
        $database = (new \yii\db\Query())
            ->select('*')
            ->from('opera')
            ->where(['pubblico' => 'si'])
            ->all();

        if ($database == null) echo json_encode(null);
        else echo json_encode($database);

    }

    /**
     * Finds the Opera model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Opera the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Opera::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
