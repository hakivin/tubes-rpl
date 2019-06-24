<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property string $kode_obat
 * @property string $nama_obat
 * @property string $produsen_obat
 * @property int $stok
 * @property int $harga
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'nama_obat', 'produsen_obat', 'stok', 'harga'], 'required'],
            [['stok', 'harga'], 'integer'],
            [['kode_obat'], 'string', 'max' => 10],
            [['nama_obat'], 'string', 'max' => 35],
            [['produsen_obat'], 'string', 'max' => 50],
            [['kode_obat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_obat' => 'Kode Obat',
            'nama_obat' => 'Nama Obat',
            'produsen_obat' => 'Produsen Obat',
            'stok' => 'Stok',
            'harga' => 'Harga',
        ];
    }
}
