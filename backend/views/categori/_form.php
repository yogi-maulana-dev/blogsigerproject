<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Categori $model */
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
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
                                        <div class="form-group form-group-default">
                                            <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
                                        </div>
                                      
                                        <div class="form-group form-group-default">
                                            <?=
					$form->field($model, 'status')->dropDownList([ '1' => 'Active', '0' => 'Inactive', ], ['prompt' => 'Status']) ?>
                                      </div>
                                
                                    </div>
                                </div>

                                <div class="card-action">
                                        <?= Html::submitButton('Save', ['button','class' => 'btn btn-success']) ?>
                                   

                                    <?php ActiveForm::end(); ?>
                                    <!-- <button class="btn btn-success">Submit</button> -->
                                    <a href="index.php?r=categori"><button class="btn btn-primary">Kembali</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--- box -->
                </div>
            </div>
        </div>
    </div>