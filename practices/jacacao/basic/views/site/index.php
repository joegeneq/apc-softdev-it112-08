<?php
use kartik\tabs\TabsX;
use yii\helpers\Url;
// Above
$content1 = "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.";
$content2 = "ajsdfoi";
$content3 = "oiaj8ouiw";
$content4 = "number4";
$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Home',
        'content'=>$content1,
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Profile',
        'content'=>$content2,
        'active'=>false
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Profile',
        'content'=>$content3,
        'linkOptions'=>['data-url'=>\yii\helpers\Url::to(['/../region/index'])]
    ],


    
];
echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_LEFT,
    'height'=>TabsX::SIZE_LARGE,
   // 'align'=>TabsX::ALIGN_CENTER,
    'bordered'=>true,
    'encodeLabels'=>false

]);


?>