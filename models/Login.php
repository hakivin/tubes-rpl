<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property string $username
 * @property string $password
 * @property int $id_petugas
 *
 * @property Petugas $petugas
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'id_petugas'], 'required'],
            [['id_petugas'], 'integer'],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 144],
            [['username'], 'unique'],
            [['id_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['id_petugas' => 'id_petugas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'id_petugas' => 'Id Petugas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasOne(Petugas::className(), ['id_petugas' => 'id_petugas']);
    }
}
