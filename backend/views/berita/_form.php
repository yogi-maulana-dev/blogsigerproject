<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use summernote\SummernoteWidget;
use marqu3s\summernote\Summernote;
use yii\web\JsExpression;
use yii\helpers\Json;

use yii\web\View;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */
/** @var yii\widgets\ActiveForm $form */
?>



<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= Html::encode($this->title) ?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<!-- <li class="nav-item">
								<a href="#">Basic Form</a>
							</li> -->
						</ul>
					</div>
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Form Elements</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-4">
											<div class="form-group">
                                            <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'isi')
         ->widget(CKEditor::className(), 
            [
              'options' => [], 
              'preset' => 'custom',
              'clientOptions' => [
                  'extraPlugins' => '',
                  'height' => 500,

                  //Here you give the action who will handle the image upload 
                  'filebrowserUploadUrl' => '/site/actionCkeditor_image_upload',

                  'toolbarGroups' => [
                      ['name' => 'undo'],
                      ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
                      ['name' => 'paragraph', 'groups' => ['list', 'indent', 'blocks', 'align', 'bidi' ]],
                      ['name' => 'styles'],
                      ['name' => 'links', 'groups' => ['links', 'insert']]
                  ]

              ]

            ]) 

?>

<?= $form->field($model, 'status')->textInput() ?>

<?= $form->field($model, 'created_at')->textInput() ?>

<?= $form->field($model, 'updated_at')->textInput() ?>


											</div>
											
										</div>


                                        <div class="card-action">
                                        <div class="form-group">
    <?= Html::submitButton('Save', ['button','class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
									<!-- <button class="btn btn-success">Submit</button> -->
									<button class="btn btn-danger">Cancel</button>
								</div>
							</div>
						</div>
					</div>
                    <!--- box -->
                    		</div>
							</div>
						</div>
					</div>
