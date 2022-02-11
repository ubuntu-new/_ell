<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Englishcenter;

/**
 * EnglishcenterSearch represents the model behind the search form of `app\models\Englishcenter`.
 */
class EnglishcenterSearch extends Englishcenter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'bday', 'phone', 'email', 'generalenglish', 'esol', 'ielts', 'toefl', 'sat', 'gmat', 'gre', 'visible'], 'safe'],
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
        $query = Englishcenter::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'bday', $this->bday])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'generalenglish', $this->generalenglish])
            ->andFilterWhere(['like', 'esol', $this->esol])
            ->andFilterWhere(['like', 'ielts', $this->ielts])
            ->andFilterWhere(['like', 'toefl', $this->toefl])
            ->andFilterWhere(['like', 'sat', $this->sat])
            ->andFilterWhere(['like', 'gmat', $this->gmat])
            ->andFilterWhere(['like', 'gre', $this->gre])
            ->andFilterWhere(['like', 'visible', $this->visible]);

        return $dataProvider;
    }
}
