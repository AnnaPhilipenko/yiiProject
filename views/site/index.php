<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--main content start-->


<div class="main-content">







    <div class="container">
        <?= $this->render('/partials/Sidebar2', [

            'categories'=>$categories
        ]);?>
        <div class="row">

            <div class="col-md-5">

                <?php foreach($articles as $article):?>
                    <article class="post col-lg-5 col-lg-offset-1" >
                        <div class = "row" style="height: 700px;">

                        <div class="post-thumb ">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">Просмотреть</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center ">


                                <h1 class="entry-title" style="padding-right: 20px" ><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?> </a></h1>
                              <h6>  <i>Категория статьи:</i><a style = "padding-left: 5px;" href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title; ?></a></h6>


                            </header>
                            <div class="entry-content" style="  border-top: 1px solid #422121;">
                                <p><?= $article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="more-link">Читать дальше</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize"> <?= $article->author->name; ?><?= $article->getDate();?></span>
                                <ul class="text-center pull-right" ">
                                    <li><a class="s-facebook" href="#"><i style="color:#422121" class="fa fa-eye"></i></a></li><?= (int) $article->viewed?>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </article>
                <?php endforeach; ?>


                        <?php
                        echo LinkPager::widget([
                            'pagination' => $pagination,
                        ]);
                        ?>

            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
               // 'categories'=>$categories
            ]);?>
        </div>

    </div>
</div>



<!-- end main content-->
<!--footer start-->