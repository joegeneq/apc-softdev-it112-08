<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Accounting */

$this->title = $model->record_id;
$this->params['breadcrumbs'][] = ['label' => 'Accountings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->record_id], ['class' => 'btn btn-primary']) ?>
<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo  Html::a('Delete', ['delete', 'id' => $model->record_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'record_id',
            'professional_fee',
            'frames_price',
            'lenses_price',
            'contacts_price',
            'solutions_price',
            'ancilliary_procedures',
            'others',
            'insurance_id',
            'senior_citizen',
            'person_w_disability',
            'total',
            'deposit',
            'balance',
        ],
    ]) ?>

</div>
