<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Categori $model */

$this->title = 'Update Categori: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
