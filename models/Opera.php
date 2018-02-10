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
 * @property string $proprietario
 * @property string $materiali
 * @property string $tecnica
 * @property string $periodo_storico
 * @property string $dimensioni
 * @property double $peso
 * @property string $movimento_artistico
 * @property double $valore
 * @property string $restaurato
 * @property string $pubblico
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
            [['titolo', 'categoria', 'autore', 'descrizione', 'id_museo'], 'required'],
            [['peso', 'valore'], 'number'],
            [['restaurato', 'pubblico'], 'string'],
            [['id_museo'], 'integer'],
            [['titolo', 'categoria', 'proprietario', 'materiali', 'tecnica', 'periodo_storico', 'dimensioni', 'movimento_artistico', 'immagine', 'video'], 'string', 'max' => 255],
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
            'proprietario' => 'Proprietario',
            'materiali' => 'Materiali',
            'tecnica' => 'Tecnica',
            'periodo_storico' => 'Periodo Storico',
            'dimensioni' => 'Dimensioni',
            'peso' => 'Peso',
            'movimento_artistico' => 'Movimento Artistico',
            'valore' => 'Valore',
            'restaurato' => 'Restaurato',
            'pubblico' => 'Pubblico',
            'id_museo' => 'Id Museo',
            'immagine' => 'url Immagine',
            'video' => 'YouTube url Video',
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
