<?php

namespace app\controllers;

use Yii;
use app\models\Utente;
use app\models\UtenteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtenteController implements the CRUD actions for Utente model.
 */
class UtenteController extends Controller
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
     * Lists all Utente models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (isset($_SESSION['__id']) and (Yii::$app->getUser()->identity->ruolo == "admin")) {
            $searchModel = new UtenteSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            header("location: /Project/Server/SmartMuseum/web/index.php",  true,  301 );  exit;
        }
    }

    /**
     * Displays a single Utente model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (isset($_SESSION['__id']) and (Yii::$app->getUser()->identity->ruolo == "admin")) {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        } else {
            header("location: /Project/Server/SmartMuseum/web/index.php",  true,  301 );  exit;
        }
    }

    /**
     * Creates a new Utente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (isset($_SESSION['__id']) and (Yii::$app->getUser()->identity->ruolo == "admin")) {
            $model = new Utente();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $model->password = password_hash($model->password, PASSWORD_DEFAULT);
                $model->save();
                return $this->redirect(['view', 'id' => $model->id_utente]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            header("location: /Project/Server/SmartMuseum/web/index.php",  true,  301 );  exit;
        }
    }

    /**
     * Updates an existing Utente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (isset($_SESSION['__id']) and (Yii::$app->getUser()->identity->ruolo == "admin")) {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $model->password = password_hash($model->password, PASSWORD_DEFAULT);
                $model->save();
                return $this->redirect(['view', 'id' => $model->id_utente]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else {
            header("location: /Project/Server/SmartMuseum/web/index.php",  true,  301 );  exit;
        }
    }

    /**
     * Deletes an existing Utente model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (isset($_SESSION['__id']) and (Yii::$app->getUser()->identity->ruolo == "admin")) {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        } else {
            header("location: /Project/Server/SmartMuseum/web/index.php",  true,  301 );  exit;
        }
    }

    /**
     * Finds the Utente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Utente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Utente::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
