<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BeritaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_berita') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'isi_berita') ?>

    <?= $form->field($model, 'penulis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
