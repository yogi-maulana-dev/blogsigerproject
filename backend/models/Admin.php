<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property int $status
 * @property string $role
 * @property int $id_pegawai
 * @property string $time_create
 * @property string $time_update
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'authKey', 'accessToken', 'status', 'role', 'id_pegawai', 'time_create', 'time_update'], 'required'],
            [['status', 'id_pegawai'], 'integer'],
            [['time_create', 'time_update'], 'safe'],
            [['username', 'role'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 200],
            [['authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'status' => 'Status',
            'role' => 'Role',
            'id_pegawai' => 'Id Pegawai',
            'time_create' => 'Time Create',
            'time_update' => 'Time Update',
        ];
    }
}
