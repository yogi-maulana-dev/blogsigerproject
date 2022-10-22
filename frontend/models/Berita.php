<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $id_berita
 * @property string $judul
 * @property string $slug
 * @property string $isi_berita
 * @property int $penulis
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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'slug', 'isi_berita', 'penulis'], 'required'],
            [['isi_berita'], 'string'],
            [['penulis'], 'integer'],
            [['judul', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul' => 'Judul',
            'slug' => 'Slug',
            'isi_berita' => 'Isi Berita',
            'penulis' => 'Penulis',
        ];
    }
}
