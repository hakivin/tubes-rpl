<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

<<<<<<< HEAD
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                Yii::$app->user->can('admin') ? (
                    ['label' => 'Petugas', 'url' => ['/petugas/index']]
                ) : (['label' => 'Petugas', 'url' => ['/bad-privilege/index']]),
                Yii::$app->user->can('admin') ? (
                    ['label' => 'Obat', 'url' => ['/obat/index']]
                ) : (['label' => 'Obat', 'url' => ['/bad-privilege/index']]),       
                Yii::$app->user->can('admin') ? (
                    ['label' => 'Keuangan', 'url' => ['/keuangan/index']]
                ) : (['label' => 'Keuangan', 'url' => ['/bad-privilege/index']]),
                Yii::$app->user->can('admin') ? (
                    ['label' => 'Transaksi', 'url' => ['/transaksi/index']]
                ) : (['label' => 'Transaksi', 'url' => ['/bad-privilege/index']]),       
                ['label' => 'Kasir', 'url' => ['/kasir/index']],
                ['label' => 'Gudang', 'url' => ['/gudang/index']],
                Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
=======
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            Yii::$app->user->can('admin') ? (
                ['label' => 'Petugas', 'url' => ['/petugas/index']]
            ) : (['label' => 'Petugas', 'url' => ['/bad-privilege/index']]),
            Yii::$app->user->can('admin') ? (
                ['label' => 'Obat', 'url' => ['/obat/index']]
            ) : (['label' => 'Obat', 'url' => ['/bad-privilege/index']]),       
            Yii::$app->user->can('admin') ? (
                ['label' => 'Keuangan', 'url' => ['/keuangan/index']]
            ) : (['label' => 'Keuangan', 'url' => ['/bad-privilege/index']]),
            Yii::$app->user->can('admin') ? (
                ['label' => 'Transaksi', 'url' => ['/transaksi/index']]
            ) : (['label' => 'Transaksi', 'url' => ['/bad-privilege/index']]),    
            Yii::$app->user->can('kasir') ? (
                ['label' => 'Kasir', 'url' => ['/kasir/index']]
            ) : (['label' => 'Kasir', 'url' => ['/bad-privilege/index']]),   
            Yii::$app->user->can('gudang') ? (
                ['label' => 'Gudang', 'url' => ['/gudang/index']]
            ) : (['label' => 'Gudang', 'url' => ['/bad-privilege/index']]),
            
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
>>>>>>> b75c905ae42760511c557609936f60eb5e473d60
                )
            ],
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
            <p class="pull-left">&copy; Apotek Pajang <?= date('Y') ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>