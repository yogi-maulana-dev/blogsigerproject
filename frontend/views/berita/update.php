<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */

$this->title = 'Update Berita: ' . $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_berita, 'url' => ['view', 'id_berita' => $model->id_berita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
