<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property string $waktu_transaksi
 * @property int $id_member
 * @property int $id_petugas
 *
 * @property TransaksiObat[] $transaksiObats
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['waktu_transaksi', 'id_member', 'id_petugas'], 'required'],
            [['waktu_transaksi'], 'safe'],
            [['id_member', 'id_petugas'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'waktu_transaksi' => 'Waktu Transaksi',
            'id_member' => 'Id Member',
            'id_petugas' => 'Id Petugas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiObats()
    {
        return $this->hasMany(TransaksiObat::className(), ['id_transaksi' => 'id_transaksi']);
    }
}
