<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Opera;

/**
 * OperaSearch represents the model behind the search form about `app\models\Opera`.
 */
class OperaSearch extends Opera
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_opera', 'id_museo'], 'integer'],
            [['titolo', 'categoria', 'autore', 'descrizione', 'proprietario', 'materiali', 'tecnica', 'periodo_storico', 'dimensioni', 'movimento_artistico', 'restaurato', 'pubblico', 'immagine', 'video'], 'safe'],
            [['peso', 'valore'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Opera::find($this->id_museo = Yii::$app->getUser()->identity->id_museo);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_opera' => $this->id_opera,
            'peso' => $this->peso,
            'valore' => $this->valore,
            'id_museo' => $this->id_museo,
        ]);

        $query->andFilterWhere(['like', 'titolo', $this->titolo])
            ->andFilterWhere(['like', 'categoria', $this->categoria])
            ->andFilterWhere(['like', 'autore', $this->autore])
            ->andFilterWhere(['like', 'descrizione', $this->descrizione])
            ->andFilterWhere(['like', 'proprietario', $this->proprietario])
            ->andFilterWhere(['like', 'materiali', $this->materiali])
            ->andFilterWhere(['like', 'tecnica', $this->tecnica])
            ->andFilterWhere(['like', 'periodo_storico', $this->periodo_storico])
            ->andFilterWhere(['like', 'dimensioni', $this->dimensioni])
            ->andFilterWhere(['like', 'movimento_artistico', $this->movimento_artistico])
            ->andFilterWhere(['like', 'restaurato', $this->restaurato])
            ->andFilterWhere(['like', 'pubblico', $this->pubblico])
            ->andFilterWhere(['like', 'immagine', $this->immagine])
            ->andFilterWhere(['like', 'video', $this->video]);

        return $dataProvider;
    }
}
