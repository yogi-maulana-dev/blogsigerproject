<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_berita')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penulis')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
