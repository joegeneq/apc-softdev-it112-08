<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'role',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'firstname',
            // 'lastname',
            // 'middlename',
            // 'birthday',
            // 'gender',
            // 'city_id',
            // 'home_address',
            // 'company_address',
            // 'company_name',
            // 'cel',
            // 'tel',
            // 'fb',
            // 'allergies:ntext',
            // 'medications:ntext',
            // 'treatments:ntext',
            // 'eyeglasses',
            // 'eyeglasses_age',
            // 'contact_lens',
            // 'contact_lens_age',
            // 'contact_lens_id',
            // 'blindness_grand',
            // 'blindness_parents',
            // 'blindness_siblings',
            // 'blindness_children',
            // 'cataracts_grand',
            // 'cataracts_parents',
            // 'cataracts_siblings',
            // 'cataracts_children',
            // 'crossed_eyes_grand',
            // 'crossed_eyes_parents',
            // 'crossed_eyes_siblings',
            // 'crossed_eyes_children',
            // 'glaucoma_grand',
            // 'glaucoma_parents',
            // 'glaucoma_siblings',
            // 'glaucoma_children',
            // 'macular_degeneration_grand',
            // 'macular_degeneration_parents',
            // 'macular_degeneration_siblings',
            // 'macular_degeneration_children',
            // 'retinal_detachment_grand',
            // 'retinal_detachment_parents',
            // 'retinal_detachment_siblings',
            // 'retinal_detachment_children',
            // 'arthritis_grand',
            // 'arthritis_parents',
            // 'arthritis_siblings',
            // 'arthritis_children',
            // 'cancer_grand',
            // 'cancer_parents',
            // 'cancer_siblings',
            // 'cancer_children',
            // 'diabetes_grand',
            // 'diabetes_parents',
            // 'diabetes_siblings',
            // 'diabetes_children',
            // 'heart_disease_grand',
            // 'heart_disease_parents',
            // 'heart_disease_siblings',
            // 'heart_disease_children',
            // 'high_blood_pressure_grand',
            // 'high_blood_pressure_parents',
            // 'high_blood_pressure_siblings',
            // 'high_blood_pressure_children',
            // 'kidney_disease_grand',
            // 'kidney_disease_parents',
            // 'kidney_disease_siblings',
            // 'kidney_disease_children',
            // 'lupus_grand',
            // 'lupus_parents',
            // 'lupus_siblings',
            // 'lupus_children',
            // 'thyroid_disease_grand',
            // 'thyroid_disease_parents',
            // 'thyroid_disease_siblings',
            // 'thyroid_disease_children',
            // 'others:ntext',
            // 'headaches',
            // 'migrains',
            // 'seizures',
            // 'loss_of_vision',
            // 'blurred_vision',
            // 'distorted_vision',
            // 'loss_of_side_vision',
            // 'double_vision',
            // 'dryness_vision',
            // 'mucous_discharge',
            // 'redness',
            // 'sandy_gritty_feeling',
            // 'itching',
            // 'burning',
            // 'foreign_body_sensation',
            // 'excess_tearing_watering',
            // 'glare_light_sensitivity',
            // 'eye_pain_soreness',
            // 'chronic_infection_of_eye_or_lid',
            // 'sties_chalazion',
            // 'flashes_floaters_of_vision',
            // 'tired_eyes',
            // 'sports:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
