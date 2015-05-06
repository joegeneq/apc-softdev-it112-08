<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Console;

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
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                if(Yii::$app->user->identity->role == 20){//ADMIN
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'Account', 'url' => ['/user/view', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Profile', 'url' => ['/patient-profile/update', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Medical History', 'url' => ['/medical-history/update', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Patients', 'url' => ['/patient/index']],
                        ['label' => 'Patient\'s Medical History', 'url' => ['/medical-history/index']],
                    ];
                }
                if(Yii::$app->user->identity->role == 30){//EMPLOYEE
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'Account', 'url' => ['/user/view', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Profile', 'url' => ['/patient-profile/update', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Medical History', 'url' => ['/medical-history/update', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Patients', 'url' => ['/patient-profile/index']],
                        ['label' => 'Diagnose', 'url' => ['/diagnose/create']],
                        ['label' => 'Records', 'url' => ['/record/index']],
                        ['label' => 'Evaluation', 'url' => ['/evaluation/index']],
                        ['label' => 'Prescription', 'url' => ['/prescription/index']],
                        ['label' => 'Accounting', 'url' => ['/accounting/index']],

                    ];
                }
                if(Yii::$app->user->identity->role == 10){//PATIENT
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'Account', 'url' => ['/user/view', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Profile', 'url' => ['/patient-profile/update', 'id' => Yii::$app->user->identity->id]],
                        ['label' => 'Medical History', 'url' => ['/medical-history/update', 'id' => Yii::$app->user->identity->id]],
                        //['label' => 'Records', 'url' => ['RecordSearch[patient_id%3D']],
                        //['label' => 'Records', 'url' => ['/record/index/patient', 'id' => Yii::$app->user->identity->id]],
                        //['label' => 'Records', 'url' => ['/record/index']],
                        ['label' => 'Records', 'url' => ['/record/index', 'RecordSearch[record_id]=',
                                                                        'RecordSearch[patient_id]' => Yii::$app->user->identity->id,
                                                                        'RecordSearch[employee_id]=',
                                                                        'RecordSearch[agreed_date]=' ]],
                    ];
                }
 

                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
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
        <?= Alert::widget() ?>
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
