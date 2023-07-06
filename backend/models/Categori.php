<?php

namespace backend\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\web\Controller;
use Ramsey\Uuid\Uuid;

use Yii;

/**
 * This is the model class for table "categori".
 *
 * @property int $id
 * @property string $judul
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Categori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categori';
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
            [['judul'], 'required'],
            [['status'], 'integer'],
            [['judul'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
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
