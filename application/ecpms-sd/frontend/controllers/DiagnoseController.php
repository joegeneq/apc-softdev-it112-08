<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Diagnose;
use frontend\models\Evaluation;
use frontend\models\Prescription;
use frontend\models\Accounting;
use frontend\models\User;
use frontend\models\DiagnoseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DiagnoseController implements the CRUD actions for Diagnose model.
 */
class DiagnoseController extends Controller
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
     * Lists all Diagnose models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DiagnoseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Diagnose model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'evaluation' => $this->findModel($id),
            'prescription' => $this->findModel($id),
            'accounting' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Diagnose model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Diagnose();
        $evaluation = new Evaluation();
        $prescription = new Prescription();
        $accounting = new Accounting();
        $user = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save() &&
            $evaluation->load(Yii::$app->request->post()) && $evaluation->save() &&
            $prescription->load(Yii::$app->request->post()) && $prescription->save() &&
            $accounting->load(Yii::$app->request->post()) && $accounting->save()) {
/*
            $evaluation->record_id==$model->id;//$evaluation->save();
            $prescription->record_id==$model->id;//$prescription->save();
            $accounting->record_id==$model->id;//$accounting->save();
*/
            return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('create', [
                'model' => $model,
                'evaluation' => $evaluation,
                'prescription' => $prescription,
                'accounting' => $accounting,
                'user' => $user,
            ]);
        }
    }

    /**
     * Updates an existing Diagnose model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        /*$evaluation = $this->findModel($id);
        $prescription = $this->findModel($id);
        $accounting = $this->findModel($id);*/

        if ($model->load(Yii::$app->request->post()) && $model->save()){ //&&     
            //$evaluation->load(Yii::$app->request->post()) && $evaluation->save() &&
            //$prescription->load(Yii::$app->request->post()) && $prescription->save() &&
            //$accounting->load(Yii::$app->request->post()) && $accounting->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                //'evaluation' => $evaluation,
                //'prescription' => $prescription,
                //'accounting' => $accounting,
            ]);
        }
    }

    /**
     * Deletes an existing Diagnose model.
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
     * Finds the Diagnose model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Diagnose the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Diagnose::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
