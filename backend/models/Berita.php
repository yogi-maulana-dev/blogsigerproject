<?php

namespace backend\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\web\Controller;
use Ramsey\Uuid\Uuid;
use backend\models\Categori;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $id
 * @property string $judul
 * @property string $isi
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    public function generateUuid()
    {
        $uuid = Uuid::uuid4()->toString();
        return $uuid;
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'isi'], 'required'],
            // [['name', 'judul'], 'string', 'max' => 255],
            // [['gambar'], 'file' , 'extensions' => 'jpg,png,jpeg'],
            [['gambar'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png'],
            [['categori'], 'string'],
            [['status'], 'integer'],
            [['judul'], 'string', 'max' => 255],
            [['isi'], 'string'],
        ];
    }

    public function getCategori()
{
    return $this->hasOne(Categori::className(), ['id' => 'categori']);
}

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}
