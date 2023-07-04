
<?php

/** @var yii\web\View $this */

use frontend\models\Berita;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

$query = Berita::find();
$datax = $query
    ->all();

?>

<div class="row">

            <div class="col-12 cc">
              <div class="homemain bs swiper-container">
                
                <div class="swiper-wrapper">
                    <?php foreach ($datax as $itemx):  ?>
                  <div class="swiper-slide">
                
                    <div class="bs-slide overlay back-img three colmn lozad "
                      data-background-image="<?= Url::to('@backend/'.$itemx->gambar); ?>">
                      <a class="link-div"
                        href="https://demos.projectyai.com/ProjectYai/standard/where-to-chill-with-an-integrated-trainer-on-running/">
                      </a>
                      <div class="inner overlay">
                        <div class="bs-blog-category">
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/lifestyle/"
                            style="background-color:#49dfd4">
                            Lifestyle </a>
                          <a href="https://demos.projectyai.com/ProjectYai/standard/category/travel/"
                            style="background-color:#7171e2">
                            Travel </a>
                        </div>
                        <h4 class="title"> <a
                            href="https://demos.projectyai.com/ProjectYai/standard/where-to-chill-with-an-integrated-trainer-on-running/"> <?= $itemx->judul?>  </a></h4>
                      </div>
                    </div>
                  </div>

                 
                  <?php endforeach?>
                </div>
              
           
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
          
              </div>
            </div>
        
            <!--==/ Home Slider ==-->
            <!-- end slider-section -->

          </div><!--/row-->
        

