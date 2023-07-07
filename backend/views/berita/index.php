<?php

use backend\models\Berita;
use backend\models\Categori;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BeritaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var yii\web\View $this */
/** @var app\models\Berita $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
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
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <?= Html::a('Tambah Berita <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-primary btn-round ml-auto']) ?>
                            <!-- <h4 class="card-title">Add Row</h4> -->
                            <!-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Row
										</button> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">
                                                New</span>
                                            <span class="fw-light">
                                                Row
                                            </span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="small">Create a new row using this form, make sure you fill them all
                                        </p>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Dibuat</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($data as $item): ?>
                                    <tr>
                                        <td> <?= $item->judul ?></td>
                                        <td>
                                            <img width='104px' src='img/<?= $item->gambar ?>'>

                                        </td>
                                        <td><?= $item->categori?></td>
                                        <td><?= $item->created_at ?></td>
                                        <td>
                                            <div class="form-button-action">
                                                <div class="form-button-action">
                                                    <?= Html::a('<i class="fa fa-edit"></i>', ['update', 'id' => $item->id], ['class' => 'btn btn-link btn-primary btn-lg']) ?>
                                                    <!-- <button type="button" data-toggle="tooltip" title="" class="" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button> -->
                                                    <!-- <?= Html::a('<i class="fa fa-times"></i>', ['delete', 'id' => $item->id], ['class' => 'btn btn-link btn-danger']) ?> -->
                                                    <?= Html::a('<i class="fa fa-times"></i>', ['delete', 'id' => $item->id], [
    'class' => 'btn btn-link btn-danger',
    'data' => [
        'confirm' => 'Apakah Anda yakin ingin menghapus data ini?',
        'method' => 'post',
    ],
]); ?>
                                                    <!-- <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button> -->
                                                </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>