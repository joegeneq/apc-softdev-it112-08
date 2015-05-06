<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PrescriptionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prescriptions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prescription-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo  GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'record_id',
            'd_od_sph',
            'd_od_cyl',
            'd_od_axis',
            'd_od_prism',
            // 'd_od_add',
            // 'd_os_sph',
            // 'd_os_cyl',
            // 'd_os_axis',
            // 'd_os_prism',
            // 'd_os_add',
            // 'n_od_sph',
            // 'n_od_cyl_cyl',
            // 'n_od_axis',
            // 'n_od_prism',
            // 'n_od_add',
            // 'n_os_sph',
            // 'n_os_cyl',
            // 'n_os_axis',
            // 'n_os_prism',
            // 'n_os_add',
            // 'design_id',
            // 'instruction_id',
            // 'od_bc',
            // 'od_diam',
            // 'od_power',
            // 'od_color',
            // 'os_bc',
            // 'os_diam',
            // 'os_power',
            // 'os_color',
            // 'wear_mode_id',
            // 'solutions_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
