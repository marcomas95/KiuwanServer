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
            [['id_opera', 'pubblico', 'id_museo'], 'integer'],
            [['titolo', 'categoria', 'autore', 'descrizione', 'immagine', 'video'], 'safe'],
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
        $query = Opera::find();

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
            'pubblico' => $this->pubblico,
            'id_museo' => $this->id_museo,
        ]);

        $query->andFilterWhere(['like', 'titolo', $this->titolo])
            ->andFilterWhere(['like', 'categoria', $this->categoria])
            ->andFilterWhere(['like', 'autore', $this->autore])
            ->andFilterWhere(['like', 'descrizione', $this->descrizione])
            ->andFilterWhere(['like', 'immagine', $this->immagine])
            ->andFilterWhere(['like', 'video', $this->video]);

        return $dataProvider;
    }
}
