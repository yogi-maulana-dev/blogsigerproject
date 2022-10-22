<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */

$this->title = $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="berita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_berita' => $model->id_berita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_berita' => $model->id_berita], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_berita',
            'judul',
            'slug',
            'isi_berita:ntext',
            'penulis',
        ],
    ]) ?>

</div>
