<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opera".
 *
 * @property integer $id_opera
 * @property string $titolo
 * @property string $categoria
 * @property string $autore
 * @property string $descrizione
 * @property integer $pubblico
 * @property integer $id_museo
 * @property string $immagine
 * @property string $video
 *
 * @property Museo $idMuseo
 */
class Opera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'opera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titolo', 'categoria', 'autore', 'id_museo'], 'required'],
            [['pubblico', 'id_museo'], 'integer'],
            [['titolo', 'categoria', 'immagine', 'video'], 'string', 'max' => 255],
            [['autore'], 'string', 'max' => 511],
            [['descrizione'], 'string', 'max' => 2048],
            [['titolo'], 'unique'],
            [['id_museo'], 'exist', 'skipOnError' => true, 'targetClass' => Museo::className(), 'targetAttribute' => ['id_museo' => 'id_museo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_opera' => 'Id Opera',
            'titolo' => 'Titolo',
            'categoria' => 'Categoria',
            'autore' => 'Autore',
            'descrizione' => 'Descrizione',
            'pubblico' => 'Pubblico',
            'id_museo' => 'Id Museo',
            'immagine' => 'Immagine',
            'video' => 'Video',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMuseo()
    {
        return $this->hasOne(Museo::className(), ['id_museo' => 'id_museo']);
    }
}
