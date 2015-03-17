<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notes".
 *
 * @property integer $id
 * @property integer $id_user
 * @property string $tanggal
 * @property string $instansi
 * @property string $project
 * @property string $isi
 * @property string $keterangan
 * @property string $created
 * @property string $finished
 * @property string $canceled
 *
 * @property User $idUser
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user'], 'integer'],
            [['tanggal', 'created', 'finished', 'canceled'], 'safe'],
            [['isi', 'created'], 'required'],
            [['instansi', 'project'], 'string', 'max' => 60],
            [['isi', 'keterangan'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'tanggal' => 'Tanggal',
            'instansi' => 'Instansi',
            'project' => 'Project',
            'isi' => 'Isi',
            'keterangan' => 'Keterangan',
            'created' => 'Created',
            'finished' => 'Finished',
            'canceled' => 'Canceled',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
