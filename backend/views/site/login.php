<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<h1><?= Html::encode($this->title) ?></h1>



<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<?= $form->field($model, 'username',['options' =>[
'tag' => 'div',
'class'=> 'form-group'],
'template' => "{label}{input}",
])->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'password',
            ['options' =>[
'tag' => 'div',
'class'=> 'form-group'],
'template' => "{label}{input}",]
            )->passwordInput() ?>

<!-- <?= $form->field($model, 'rememberMe')->checkbox() ?> -->

<div class="form-group">
  <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
</div>

<?php ActiveForm::end(); ?>
