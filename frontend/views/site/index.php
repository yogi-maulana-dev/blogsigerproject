<?php

/** @var yii\web\View $this */

use frontend\models\Berita;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
$this->title = 'Project Yai';

?>
 <div class="mainfeatured ">
        <!--container-->
        <div class="container inner">
          <!--row-->
       
        </div><!--/container-->
      </div>
      <!--mainfeatured end-->
      <main id="content">
        <!--container-->
        <div class="container">
          <!--row-->
          <div class="row">
            <!--col-lg-8-->
            <div class="col-lg-8 content-right">
              <div class="row">
                <div id="post-80 align"
                  class="align_cls post-80 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle category-travel">

<?php foreach ($data as $item):  ?>
    <div class="col-md-12 fadeInDown wow" data-wow-delay="0.1s">
        <!-- bs-posts-sec-inner -->
                        <div class="bs-blog-post bshre">

                    <div class="bs-blog-thumb lg back-img  lozad" data-background-image="<?= Url::to('@backend/'.$item->gambar); ?>" >
        <a href="https://projectyai.com/projectyai/standard/where-to-chill-with-an-integrated-trainer-on-running/" class="link-div"></a>
    </div> 
                <article class="small">
                                        <div class="bs-blog-category">
                                            <a href="https://projectyai.com/projectyai/standard/category/lifestyle/" style="background-color:#49dfd4">
                            Lifestyle                        </a>
                                             <a href="https://projectyai.com/projectyai/standard/category/travel/" style="background-color:#7171e2">
                            Travel                        </a>
                                      </div>
                                    <h4 class="title"><a href="https://projectyai.com/projectyai/standard/where-to-chill-with-an-integrated-trainer-on-running/"><?= $item->judul?></a></h4>
                     <div class="bs-blog-meta">  
        <span class="bs-author"><a class="auth" href="https://projectyai.com/projectyai/standard/author/pro_projectyai/"> <img alt='' src='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=150&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=300&#038;d=mm&#038;r=g 2x' class='avatar avatar-150 photo' height='150' width='150' loading='lazy' decoding='async'/>Admin</a> </span>
        <span class="bs-blog-date"><a href="https://projectyai.com/projectyai/standard/2022/10/">
                   <?= $item->created_at?>              
    </a></span>

        <span class="comments-link"> <a href="https://projectyai.com/projectyai/standard/where-to-chill-with-an-integrated-trainer-on-running/">0 Comments</a> </span>
            </div>                         <p><?= $item->isi?></p>
                                <!-- <a href="" class="more-link">Read More</a> -->
                     
                                <a href="index.php?r=berita&id=<?=Html::encode($item->id) ?>" class="more-link">Read More</a>
                                            </article>
                <!-- // bs-posts-sec-inner -->


        </div>
        <!-- // bs-posts-sec block_6 -->
    </div>                    <!--col-md-12-->

<?php endforeach?>

</div>
              </div>
            </div>
<!--col-md-12 side-->

<aside class="col-lg-4 sidebar-right">

<div id="sidebar-right" class="bs-sidebar is_sticky ">
  <div id="block-2" class="bs-widget widget_block widget_search">
    <form role="search" method="get" action="https://demos.projectyai.com/ProjectYai/standard/"
      class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label
        for="wp-block-search__input-1" class="wp-block-search__label">Search</label>
      <div class="wp-block-search__inside-wrapper "><input type="search" id="wp-block-search__input-1"
          class="wp-block-search__input" name="s" value="" placeholder="" required /><button type="submit"
          class="wp-block-search__button wp-element-button">Search</button></div>
    </form>
  </div>
  <div id="block-3" class="bs-widget widget_block">
    <div class="wp-block-group is-layout-flow">
      <div class="wp-block-group__inner-container">
        <h2 class="wp-block-heading">Recent Posts</h2>
        <ul class="wp-block-latest-posts__list wp-block-latest-posts">
          <li><a class="wp-block-latest-posts__post-title"
              href="https://demos.projectyai.com/ProjectYai/standard/where-to-chill-with-an-integrated-trainer-on-running/">Where
              to chill with an integrated trainer on running</a></li>
          <li><a class="wp-block-latest-posts__post-title"
              href="https://demos.projectyai.com/ProjectYai/standard/harbor-amid-a-slowed-down-in-singer/">Harbor
              amid a Slowed down in singer</a></li>
          <li><a class="wp-block-latest-posts__post-title"
              href="https://demos.projectyai.com/ProjectYai/standard/blessed-fowl-greater-kind-fill-him-bring/">blessed
              fowl greater kind fill him bring</a></li>
          <li><a class="wp-block-latest-posts__post-title"
              href="https://demos.projectyai.com/ProjectYai/standard/sea-bearing-from-in-thing-fruit-spirit/">Sea
              Bearing From In Thing Fruit Spirit</a></li>
          <li><a class="wp-block-latest-posts__post-title"
              href="https://demos.projectyai.com/ProjectYai/standard/seasons-in-youll-them-meat-earth-for-hath/">seasons
              in you&#8217;ll them meat earth for hath</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="block-4" class="bs-widget widget_block">
    <div class="wp-block-group is-layout-flow">
      <div class="wp-block-group__inner-container">
        <h2 class="wp-block-heading">Recent Comments</h2>
        <div class="no-comments wp-block-latest-comments">No comments to show.</div>
      </div>
    </div>
  </div>
  <div id="block-5" class="bs-widget widget_block">
    <div class="wp-block-group is-layout-flow">
      <div class="wp-block-group__inner-container">
        <h2 class="wp-block-heading">Archives</h2>
        <ul class="wp-block-archives-list wp-block-archives">
          <li><a href='https://demos.projectyai.com/ProjectYai/standard/2022/10/'>October 2022</a></li>
          <li><a href='https://demos.projectyai.com/ProjectYai/standard/2022/09/'>September 2022</a></li>
          <li><a href='https://demos.projectyai.com/ProjectYai/standard/2022/08/'>August 2022</a></li>
          <li><a href='https://demos.projectyai.com/ProjectYai/standard/2022/07/'>July 2022</a></li>
          <li><a href='https://demos.projectyai.com/ProjectYai/standard/2021/01/'>January 2021</a></li>
          <li><a href='https://demos.projectyai.com/ProjectYai/standard/2020/02/'>February 2020</a></li>
          <li><a href='https://demos.projectyai.com/ProjectYai/standard/2020/01/'>January 2020</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="block-6" class="bs-widget widget_block">
    <div class="wp-block-group is-layout-flow">
      <div class="wp-block-group__inner-container">
        <h2 class="wp-block-heading">Categories</h2>
        <ul class="wp-block-categories-list wp-block-categories">
          <li class="cat-item cat-item-2"><a
              href="https://demos.projectyai.com/ProjectYai/standard/category/fashion/">Fashion</a>
            <!-- </li>
<li class="cat-item cat-item-3"><a href="https://demos.projectyai.com/ProjectYai/standard/category/food/">Food</a>
</li>
<li class="cat-item cat-item-4"><a href="https://demos.projectyai.com/ProjectYai/standard/category/lifestyle/">Lifestyle</a>
</li>
<li class="cat-item cat-item-5"><a href="https://demos.projectyai.com/ProjectYai/standard/category/travel/">Travel</a>
</li> -->
          <li class="cat-item cat-item-1"><a
              href="https://demos.projectyai.com/ProjectYai/standard/category/uncategorized/">Uncategorized</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</aside>

<div class="col-md-12 text-center d-md-flex justify-content-between flex-row">

                      <h2 class="screen-reader-text">Posts navigation</h2>
                      <?= LinkPager::widget([
    'pagination' => $pagination ,
    'options' => ['class' => 'navigation pagination'], // Menambahkan kelas CSS ke elemen wrapper pagination
    'prevPageLabel' => 'Previous', // Label tautan halaman sebelumnya
    'nextPageLabel' => 'Next', // Label tautan halaman berikutnya
    'prevPageCssClass' => 'prev', // Kelas CSS untuk tautan halaman sebelumnya
    'nextPageCssClass' => 'next', // Kelas CSS untuk tautan halaman berikutnya
    'activePageCssClass' => 'active', // Kelas CSS untuk tautan halaman saat ini
    'disabledPageCssClass' => 'disabled', // Kelas CSS untuk tautan halaman nonaktif
    'maxButtonCount' => 5, // Jumlah tautan halaman yang ditampilkan
]) ?>
</div>

<!-- <div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="<?= Yii::$app->urlManager->createUrl(['your-controller/action', 'page' => $currentPage - 1]) ?>">Previous</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $pagination->getPageCount(); $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="current-page"><?= $i ?></span>
        <?php else: ?>
            <a href="<?= Yii::$app->urlManager->createUrl(['your-controller/action', 'page' => $i]) ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($currentPage < $pagination->getPageCount()): ?>
        <a href="<?= Yii::$app->urlManager->createUrl(['your-controller/action', 'page' => $currentPage + 1]) ?>">Next</a>
    <?php endif; ?>
</div> -->

<!-- <div class="col-md-12 text-center d-md-flex justify-content-between flex-row">

                    <nav class="navigation pagination" aria-label="Posts">
                      <h2 class="screen-reader-text">Posts navigation</h2>
                      <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="https://demos.projectyai.com/ProjectYai/standard/page/2/">2</a>
                        <a class="next page-numbers" href="https://demos.projectyai.com/ProjectYai/standard/page/2/"><i
                            class="fa fa-angle-right"></i></a>
                      </div>
                    </nav>
                    <div class="navigation">
                      <p><a href="https://demos.projectyai.com/ProjectYai/standard/page/2/">Next Page &raquo;</a></p>
                    </div>
                  </div> -->