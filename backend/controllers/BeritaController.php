<?php

namespace backend\controllers;

use backend\models\Berita;
use backend\models\BeritaSearch;
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



/**
 * BeritaController implements the CRUD actions for Berita model.
 */
class BeritaController extends Controller
{
    public $gambar;
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );

        
    }

    /**
     * Lists all Berita models.
     *
     * @return string
     */
    public function actionIndex()
    {
        // $searchModel = new BeritaSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);
        // $data = $searchModel::find()->all();

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);

  

    //     $data = Berita::find()->all(); 
    //    return $this->render('index', [
    //         'data' => $data,
    //     ]);

        // $dataProvider = new ActiveDataProvider([
        //     'query' => Berita::find(),
        //     'pagination' => [
        //         'pageSize' => 20,
        //     ],
        // ]);
      
        //   return $this->render('index', [
        //     'data' => Berita::find()->all(),
        // ]);

        $query = Berita::find();

        // $pagination = new Pagination([
        //     'defaultPageSize' => 5,
        //     'totalCount' => $query->count(),
        // ]);

        $data = $query
            ->all();

        return $this->render('index', [
            'data' => $data,
            // 'pagination' => $pagination,
        ]);

       
    }

    /**
     * Displays a single Berita model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Berita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Berita();
        // if (Yii::$app->request->isPost) {
        //     // ambil foto
        //     $model->gambar = UploadedFile::getInstance($model, 'gambar');
             
        //     if ($model->validate()) {
        //         // upload gambar
        //         $model->gambar->saveAs('uploads/' . $model->gambar->baseName . '.' . $model->gambar->extension);
                 
        //         return 'berhasil mengupload ' . $model->gambar->name;
        //     }else {
        //         return 'gagal mengupload ' . $model->gambar->name;
        //     }
                       
    // }
    
        // if ($this->request->isPost) {
        //    if ($model->load(Yii::$app->request->post())){
            
        //    $gambar = UploadedFile::getInstance($model,'gambar');
        //    $model->gambar = $gambar->judul;
        //    $model->save();
        //    $image->saveAs(Yii::$app->basePath. '/web/upload/'. $image->judul);
        //         return $this->redirect(['view', 'id' => $model->id]);
        //     // }
        // }
        // else {
        //     $model->loadDefaultValues();
        // }
     

        if ($model->load(Yii::$app->request->post())) {
            
            $gambar = UploadedFile::getInstance($model, 'gambar');

            if($model->validate()){
                $model->save();
                if (!empty($gambar)) {
                    $imageName = Yii::$app->security->generateRandomString() . '.' . $gambar->getExtension();
                 $model->gambar = $imageName;
                 $gambar->saveAs(Yii::getAlias('@webroot/img/') . $imageName);
                    $model->save(FALSE);
                }
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Berita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $image = UploadedFile::getInstance($model, 'gambar');
        $ifgambar = $model->gambar;
           echo $lama=$model->gambar;
           if ($model->load(Yii::$app->request->post())) {
            if ($image == null && $ifgambar == null ) {

                $model = $this->findModel($id);
                unlink(Yii::getAlias('@webroot/img/').$model->gambar);
                $model->gambar = NULL; 
            }
            elseif($ifgambar == null ){
                    $model = $this->findModel($id);
                    $imageName = Yii::$app->security->generateRandomString() . '.' . $image->getExtension();
                    $image->saveAs(Yii::getAlias('@webroot/img/') . $imageName);
                    $model->gambar = $imageName; 
              
        }else {
            echo"kosong";
        }
       
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
    
        return $this->render('update', [
            'model' => $model,
        ]);
  
    }

    /**
     * Deletes an existing Berita model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Berita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Berita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Berita::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUpload()
    {
        $uploadPath = Yii::getAlias('@webroot/uploads/');
    
        $uploadedFile = \yii\web\UploadedFile::getInstanceByName('upload');
    
        $fileName = time() . '.' . $uploadedFile->getExtension();
        $uploadedFile->saveAs($uploadPath . $fileName);
    
        $url = Yii::getAlias('@web/uploads/') . $fileName;
    
        // Kirim respons dengan URL gambar yang diunggah
        echo \yii\helpers\Json::encode(['uploaded' => true, 'url' => $url]);
        Yii::$app->end();
    }

    public function actionViewGambar($nama){
        $file = Yii::getAlias('@bacnkend/web/uploads/' . $nama);
        return Yii::$app->response->sendFile($file, NULL, ['inline' => TRUE]);
    }


}