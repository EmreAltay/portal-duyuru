<?php

namespace kouosl\duyuru\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Duyurular;

/**
 * DuyurularSearch represents the model behind the search form of `frontend\models\Duyurular`.
 */
class DuyurularSearch extends Duyurular
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ad', 'soyad', 'tarih', 'konu', 'duyuru'], 'safe'],
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
        $query = Duyurular::find();

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
            'tarih' => $this->tarih,
        ]);

        $query->andFilterWhere(['like', 'ad', $this->ad])
            ->andFilterWhere(['like', 'soyad', $this->soyad])
            ->andFilterWhere(['like', 'konu', $this->konu])
            ->andFilterWhere(['like', 'duyuru', $this->duyuru]);

        return $dataProvider;
    }
}
