<?php

namespace backend\controllers;

use backend\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

use yii\web\UploadedFile;
use yii\helpers\Json;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'hello-world'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'upload' => [
                'class' => 'yii\imagine\actions\UploadAction',
                'savePath' => '@webroot/uploads',
                'webPath' => '@web/uploads',
            ],
    
        ];

        return [
            'browse' => [
                'class' => 'mihaildev\elfinder\PathController',
                'root' => '@webroot/uploads',
                'URL' => '@web/uploads',
                'access' => ['read' => '*', 'write' => '*'],
            ],
            'upload' => [
                'class' => 'mihaildev\elfinder\UploadController',
                'url' => '@web/uploads',
                'path' => '@webroot/uploads',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHelloWorld()
    {
        $hello ="<h1>SELAMAT DATANG coy</h1>";

        return $this->render('hello-world',[
            'hello'=>$hello,
        ]);
    }


    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'hahkosong';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionCkeditor_image_upload()
    {       
        $funcNum = $_REQUEST['CKEditorFuncNum'];
    
        if($_FILES['upload']) {
    
          if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name']))) {
          $message = Yii::t('app', "Please Upload an image.");
          }
    
          else if ($_FILES['upload']["size"] == 0 OR $_FILES['upload']["size"] > 5*1024*1024)
          {
          $message = Yii::t('app', "The image should not exceed 5MB.");
          }
    
          else if ( ($_FILES['upload']["type"] != "image/jpg") 
                    AND ($_FILES['upload']["type"] != "image/jpeg") 
                    AND ($_FILES['upload']["type"] != "image/png"))
          {
          $message = Yii::t('app', "The image type should be JPG , JPEG Or PNG.");
          }
    
          else if (!is_uploaded_file($_FILES['upload']["tmp_name"])){
    
          $message = Yii::t('app', "Upload Error, Please try again.");
          }
    
          else {
            //you need this (use yii\db\Expression;) for RAND() method 
            $random = 'aku';
    
            $extension = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
    
            //Rename the image here the way you want
            $name = date("m-d-Y-h-i-s", time())."-".$random.'.'.$extension; 
    
            // Here is the folder where you will save the images
            $folder = 'uploads/ckeditor_images/';  
    
            $url = Yii::$app->urlManager->createAbsoluteUrl($folder.$name);
    
            move_uploaded_file( $_FILES['upload']['tmp_name'], $folder.$name );
    
          }
    
          echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'
               .$funcNum.'", "'.$url.'", "'.$message.'" );</script>';
    
        }
    
    
    }

}