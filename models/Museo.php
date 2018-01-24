<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "museo".
 *
 * @property integer $id_museo
 * @property string $nome
 * @property string $indirizzo
 * @property string $apertura
 * @property string $chiusura
 * @property string $descrizione
 * @property string $immagine
 *
 * @property Opera[] $operas
 * @property Utente[] $utentes
 */
class Museo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'museo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'indirizzo', 'apertura', 'chiusura'], 'required'],
            [['apertura', 'chiusura'], 'safe'],
            [['nome', 'indirizzo', 'immagine'], 'string', 'max' => 255],
            [['descrizione'], 'string', 'max' => 2048],
            [['nome'], 'unique'],
            [['indirizzo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_museo' => 'Id Museo',
            'nome' => 'Nome',
            'indirizzo' => 'Indirizzo',
            'apertura' => 'Apertura',
            'chiusura' => 'Chiusura',
            'descrizione' => 'Descrizione',
            'immagine' => 'Immagine',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperas()
    {
        return $this->hasMany(Opera::className(), ['id_museo' => 'id_museo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtentes()
    {
        return $this->hasMany(Utente::className(), ['id_museo' => 'id_museo']);
    }
}
