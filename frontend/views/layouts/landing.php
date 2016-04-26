<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

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
                'brandLabel' => 'My Kazi',
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
        </div>
        <?= $content ?>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Kazi <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    
    <script type="text/javascript">
	$(function () {
        var $trade_wrapper = $('#service_carousel');
        var services = ['Electricians', 'Plumbers', 'Painter', 'Appliance Repairers', 'Gardner', 'Removalists'].sort(function () {
            return 0.5 - Math.random()
        });

        function changeService() {
            // Get the next service to display
            var next = services.shift();
            // Push it back on the end of the queue for infinite looping
            services.push(next);
            // Update the services text
            $trade_wrapper.animate({
                opacity: 0,
                top: 30
            }, 250, function () {
                $trade_wrapper.html(next).css({
                    top: -10
                }).animate({
                    opacity: 1,
                    top: 0
                }, 60);
            });
            // Queue up the next change
            setTimeout(changeService, 2200);
        }

        // Start the animation...
        setTimeout(changeService, 2200);
	});
	
	</script>
    
</body>
</html>
<?php $this->endPage() ?>