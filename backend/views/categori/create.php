<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Categori $model */

$this->title = 'Create Categori';
$this->params['breadcrumbs'][] = ['label' => 'Categoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
