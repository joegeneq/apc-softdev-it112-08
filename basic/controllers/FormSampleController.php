<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\FormSample;

class SiteController extends Controller
{
    // ...existing code...

    public function actionEntry()
    {
        $model = new FormSample;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('formsample-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('formsample', ['model' => $model]);
        }
    }
}