<?php

namespace backend\controllers;

use Yii;
use app\models\blog;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use dektrium\user\models\User;
use yii\filters\AccessControl;

/**
 * BlogController implements the CRUD actions for blog model.
 */
class BlogController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all blog models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => blog::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single blog model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    public function verUsuario($id = NULL) {
        if ($id != NULL) {
            $nameautor = User::findOne($id);
        } else {
            $nameautor = User::findOne(Yii::$app->user->getId());
        }
        return $nameautor->username;
    }

    /**
     * Creates a new blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new blog();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $usuario = $this->verUsuario();
        if (($usuario == $model->Autor) || (Yii::$app->user->can('admin'))) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->Id]);
            } else {
                return $this->render('update', [
                            'model' => $model,
                ]);
            }
        } else {
            return $this->redirect(['error']);
        }
    }

    public function actionDelete($id) {
        $model = $this->findModel($id);

        $usuario = $this->verUsuario();
        if (($usuario == $model->Autor) || (Yii::$app->user->can('admin'))) {
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        } else {
            return $this->redirect(['error']);
        }
    }

    /**
     * Finds the blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = blog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
