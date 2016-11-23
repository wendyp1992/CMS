<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />

        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---- animated-css ---->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery.corner.js"></script> 
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <div class="top-nav">
        <div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
            <div class="top-header">
                <div class="logo">
                    <a href="www.mundogya.com">MUNDOGYA</a>
                </div>
                <!----start-top-nav---->
                <nav class="top-nav">
                    <ul class="top-nav">
                        <li class="page-scroll">
                            <?php
                            $menuItems = [
                                ['label' => 'Inicio', 'url' => ['/']],
                                ['label' => 'Blog', 'url' => ['/site/blog']],
                            ];

                            if (Yii::$app->user->isGuest) {
                                $menuItems[] = ['label' => 'Registrarse', 'url' => ['/user/registration/register']];
                                $menuItems[] = ['label' => 'Entrar', 'url' => ['/user/security/login']];
                            } else {
                                $menuItems[] = [
                                    'label' => Yii::$app->user->identity->username,
                                    'items' => [
                                        [
                                            'label' => 'Perfil de Usuario',
                                            'url' => ['/user/settings/profile'],
                                        ],
                                        [
                                            'label' => 'Ir a Escritorio',
                                            'url' => ['/../../backend/web/blog/index'],
                                        ],
                                        [
                                            'label' => 'Salir del Sistema',
                                            'url' => ['/user/security/logout'],
                                            'linkOptions' => ['data-method' => 'post']
                                        ],
                                    ],
                                ];
                            }
                            echo Nav::widget([
                                'options' => ['class' => ''],
                                'items' => $menuItems,
                            ]);

                            ?>
                        </li>
                    
                    </ul>
                    <a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
                </nav>
                <div class="clearfix"> </div>
            </div>
        </div>


        <div>
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
<!--                <h4><span>MUNDOGYA</span></h4>
                <p><div class="map-icon1"> </div>Eugenio Espejo, Santa Cruz</p>
                <p><span class="map-icon2"> </span>wendy.paola.estupinan@gmail.com</p>
                <p><span class="map-icon3"> </span>223-323-232-3232</p>-->
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
