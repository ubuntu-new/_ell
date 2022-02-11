<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Studyabroadincome;

/**
 * StudyabroadincomeSearch represents the model behind the search form of `app\modules\admin\models\Studyabroadincome`.
 */
class StudyabroadincomeSearch extends Studyabroadincome
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'bday', 'phone', 'email', 'uk', 'usa', 'canada', 'europe', 'asia', 'schoolpropgrams', 'bachelormasters', 'phd', 'lsnguageprograms', 'professionalcourses', 'summerschgoolforjuniors', 'visible', 'seen'], 'safe'],
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
        $query = Studyabroadincome::find();

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
            ->andFilterWhere(['like', 'uk', $this->uk])
            ->andFilterWhere(['like', 'usa', $this->usa])
            ->andFilterWhere(['like', 'canada', $this->canada])
            ->andFilterWhere(['like', 'europe', $this->europe])
            ->andFilterWhere(['like', 'asia', $this->asia])
            ->andFilterWhere(['like', 'schoolpropgrams', $this->schoolpropgrams])
            ->andFilterWhere(['like', 'bachelormasters', $this->bachelormasters])
            ->andFilterWhere(['like', 'phd', $this->phd])
            ->andFilterWhere(['like', 'lsnguageprograms', $this->lsnguageprograms])
            ->andFilterWhere(['like', 'professionalcourses', $this->professionalcourses])
            ->andFilterWhere(['like', 'summerschgoolforjuniors', $this->summerschgoolforjuniors])
            ->andFilterWhere(['like', 'visible', $this->visible])
            ->andFilterWhere(['like', 'seen', $this->seen]);

        return $dataProvider;
    }
}
