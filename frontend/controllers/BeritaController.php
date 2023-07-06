<?php

namespace frontend\controllers;

use frontend\models\Berita;
use frontend\models\BeritaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use yii\web\UploadedFile;
use yii\data\Pagination;
use Yii;
use yii\base\Security;
use yii\helpers\Html;

class BeritaController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        // $query = Berita::find();
        // $data = $query
        //     ->all();

        // return $this->render('index', [
        //     'data' => $data,
        //     // 'pagination' => $pagination,
        // ]);

        $berita = Berita::findOne($id);
        if ($berita === null) {
            throw new NotFoundHttpException('Berita tidak ditemukan.');
        }
        
        return $this->render('index', [
            'berita' => $berita,
              
        ]);
    }

    public function actionView($id)
{
    $berita = Berita::findOne($id);
    if ($berita === null) {
        throw new NotFoundHttpException('Berita tidak ditemukan.');
    }

    return $this->render('index', [
        'berita' => $berita,
    ]);
}

}

    

