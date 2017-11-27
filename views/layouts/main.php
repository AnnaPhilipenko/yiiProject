<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
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

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="/">Главная</a></li>
<!--                   <li><a data-toggle="dropdown" class="dropdown-toggle" href="/views/site/contact">О нас</a></li>-->

                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="<?= Url::toRoute(['site/contact'])?>">Обратная связь</a></li>
                   <li class = "search_box pull_right col-md-4">
<!--                    <div class = "col-md-6">-->
<!--                        <div class="search_box pull-right">-->
                            <form action = "<?= Url::to('/site/search');?>" method="get">
                                <input type = "text" placeholder="Найдите статью" name = "q" style="margin-top:12%; font-weight:lighter;border:1px solid #422121; font-family: 'Open Sans'; text-align: center; font-size: 12px;">
                            </form>
<!--                        </div>-->
<!--                    </div>-->
            </li>

              </ul>

                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">

                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Войти</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Регистрация</a></li>

                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Выйти (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


<?= $content ?>


<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <aside class="footer-widget">
                    <div class="about-content" style = "text-align: center;">Не знаю, что писать в футере
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">Контакты</h4>

                        <p> Адрес: г. Минск, ул. Асаналиева, 4-38</p>

                        <p> +375333562421</p>

                    </div>
                </aside>
            </div>





        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">


                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
