<?php

namespace vendor\kouosl\harita\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\harita\models\Useropts;

/**
 * UseroptsSearch represents the model behind the search form of `vendor\kouosl\harita\models\Useropts`.
 */
class UseroptsSearch extends Useropts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'map_height', 'map_width'], 'integer'],
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
        $query = Useropts::find();

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
            'id' => $this->id,
            'map_height' => $this->map_height,
            'map_width' => $this->map_width,
        ]);

        return $dataProvider;
    }
}
