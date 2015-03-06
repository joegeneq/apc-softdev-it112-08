<?php
use kartik\tabs\TabsX;
use kartik\builder\Form;
use yii\helpers\Html;
use app\models\Region;
//$model->"app\models\Province";
/* @var $this yii\web\View */
/* @var $model app\models\Province */

$this->title = 'Create Province';
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-create">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
$modelR = new Region();
$content1 = "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.";
$items = [
    [   'label'=>'Region',
        'content'=>$this->render('_form', ['model' => $model,]),
        'active'=>true],
    [   'label'=>'Province',
        'content'=>$content1,
        'active'=>false],
    [   'label'=>'City',
        'content'=>$this->render('_search', ['model' => $model,]),
        'active'=>false],
    ];

echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'height'=>TabsX::SIZE_LARGE,
   // 'align'=>TabsX::ALIGN_CENTER,
    'bordered'=>true,
    'encodeLabels'=>false

]);

?>
    
</div>
