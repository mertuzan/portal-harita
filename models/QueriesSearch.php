<?php

namespace vendor\kouosl\harita\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\harita\models\Queries;

/**
 * QueriesSearch represents the model behind the search form of `vendor\kouosl\harita\models\Queries`.
 */
class QueriesSearch extends Queries
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num'], 'integer'],
            [['query', 'username'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Queries::find();

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
            'num' => $this->num,
        ]);

        $query->andFilterWhere(['like', 'query', $this->query])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }
}
