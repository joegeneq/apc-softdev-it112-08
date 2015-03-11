<?php

namespace frontend\controllers;

use Yii;
use frontend\models\HistoryFamily;
use frontend\models\HistoryFamilySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HistoryFamilyController implements the CRUD actions for HistoryFamily model.
 */
class HistoryFamilyController extends Controller
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
     * Lists all HistoryFamily models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HistoryFamilySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HistoryFamily model.
     * @param integer $patient_id
     * @param integer $family_disease_id
     * @return mixed
     */
    public function actionView($patient_id, $family_disease_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($patient_id, $family_disease_id),
        ]);
    }

    /**
     * Creates a new HistoryFamily model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HistoryFamily();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'family_disease_id' => $model->family_disease_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HistoryFamily model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $patient_id
     * @param integer $family_disease_id
     * @return mixed
     */
    public function actionUpdate($patient_id, $family_disease_id)
    {
        $model = $this->findModel($patient_id, $family_disease_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'patient_id' => $model->patient_id, 'family_disease_id' => $model->family_disease_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HistoryFamily model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $patient_id
     * @param integer $family_disease_id
     * @return mixed
     */
    public function actionDelete($patient_id, $family_disease_id)
    {
        $this->findModel($patient_id, $family_disease_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HistoryFamily model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $patient_id
     * @param integer $family_disease_id
     * @return HistoryFamily the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($patient_id, $family_disease_id)
    {
        if (($model = HistoryFamily::findOne(['patient_id' => $patient_id, 'family_disease_id' => $family_disease_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
