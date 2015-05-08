<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\models\User;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Abesamis Eye Clinic',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            /**
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];

            **/
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                    if(Yii::$app->user->identity->role === 20){//ADMIN
                    $menuitems =['label' => 'Home', 'url' => ['/site/index']];
                    $menuItems[] = [ 'label' => 'Edit Tables', 'items' =>[
                        ['label' => 'Acuity', 'url' => ['/acuity/index']],
                        ['label' => 'City', 'url' => ['/city/index']],
                        ['label' => 'Contacts', 'url' => ['/contact-lens/index']],
                        ['label' => 'EOMS', 'url' => ['/eoms/index']],
                        ['label' => 'Glass designs', 'url' => ['/design/index']],
                        ['label' => 'Instructions', 'url' => ['/instruction/index']],
                        ['label' => 'Insurance', 'url' => ['/insurance/index']],
                        ['label' => 'Solutions', 'url' => ['/solutions/index']],
                        ['label' => 'Wear modes', 'url' => ['/wear-mode/index']],
                
                    ]
                     ];
                        $menuItems[] = [ 'label' => 'User Management', 'items' =>[
                        ['label' => 'Users', 'url' => ['/user/index']],
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')','url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']],
                        ]];


                    }if(Yii::$app->user->identity->role === 30){//ADMIN
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'Employee', 'url' => ['/site/index']],
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')','url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']],
                     ];
                    }if(Yii::$app->user->identity->role === 10){//ADMIN
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'Patient', 'url' => ['/site/index']],
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')','url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']],
                     ];
                    }
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
