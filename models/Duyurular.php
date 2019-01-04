<?php

namespace kouosl\duyuru\models;

use Yii;

/**
 * This is the model class for table "duyurular".
 *
 * @property int $id
 * @property string $ad
 * @property string $soyad
 * @property string $tarih
 * @property string $konu
 * @property string $duyuru
 */
class Duyurular extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'duyurular';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad', 'soyad', 'tarih', 'konu', 'duyuru'], 'required'],
            [['tarih'], 'safe'],
            [['ad', 'soyad'], 'string', 'max' => 128],
            [['konu'], 'string', 'max' => 50],
            [['duyuru'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad',
            'soyad' => 'Soyad',
            'tarih' => 'Tarih',
            'konu' => 'Konu',
            'duyuru' => 'Duyuru',
        ];
    }
}
