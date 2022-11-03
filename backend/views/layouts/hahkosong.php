<?php

/** @var yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
          "simple-line-icons"
        ],
        urls: ['css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <?php $this->head() ?>
  </head>

  <body class="login">


    <?php $this->beginBody() ?>
    <div class="wrapper wrapper-login wrapper-login-full p-0">
      <div
        class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
        <h1 class="title fw-bold text-white mb-3">Wuy 1 tahun target 100 juta</h1>
        <p class="subtitle text-white op-7">Bismillah Allahusoliala saidina Muhammad</p>
      </div>

      <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
        <div class="container container-login container-transparent animated fadeIn">
          <h3 class="text-center">Silakan masuk Admin</h3>
          <div class="login-form">

            <?= $content ?>

          </div>
        </div>
      </div>
    </div>

    <?php $this->endBody() ?>
  </body>
  <script src=""></script>
  <script src=""></script>
  <script src=""></script>
  <script src=""></script>
  <script src=""></script>

</html>
<?php $this->endPage();
