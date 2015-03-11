<?php

namespace frontend\controllers;

use Yii;
use frontend\models\HistorySports;
use frontend\models\HistorySportsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HistorySportsController implements the CRUD actions for HistorySports model.
 */
class HistorySportsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all HistorySports models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HistorySportsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HistorySports model.
     * @param integer $sports_id
     * @param integer $patient_id
     * @return mixed
     */
    public function actionView($sports_id, $patient_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($sports_id, $patient_id),
        ]);
    }

    /**
     * Creates a new HistorySports model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HistorySports();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sports_id' => $model->sports_id, 'patient_id' => $model->patient_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HistorySports model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $sports_id
     * @param integer $patient_id
     * @return mixed
     */
    public function actionUpdate($sports_id, $patient_id)
    {
        $model = $this->findModel($sports_id, $patient_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sports_id' => $model->sports_id, 'patient_id' => $model->patient_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HistorySports model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $sports_id
     * @param integer $patient_id
     * @return mixed
     */
    public function actionDelete($sports_id, $patient_id)
    {
        $this->findModel($sports_id, $patient_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HistorySports model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $sports_id
     * @param integer $patient_id
     * @return HistorySports the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sports_id, $patient_id)
    {
        if (($model = HistorySports::findOne(['sports_id' => $sports_id, 'patient_id' => $patient_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
