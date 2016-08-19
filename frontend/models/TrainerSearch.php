<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Trainer;

/**
 * TrainerSearch represents the model behind the search form about `frontend\models\Trainer`.
 */
class TrainerSearch extends Trainer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'age', 'rating', 'price', 'price_per_group_training'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'name', 'surname', 'about_info', 'sex', 'phone', 'time_for_training', 'registration_date', 'avatar', 'city', 'type_of_sport', 'competitions', 'training_sex', 'group_training', 'achievements', 'place_of_training', 'gym_location', 'years_experience', 'previous_jobs', 'recommendations', 'ip'], 'safe'],
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
        $query = Trainer::find();

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'age' => $this->age,
            'registration_date' => $this->registration_date,
            'rating' => $this->rating,
            'price' => $this->price,
            'price_per_group_training' => $this->price_per_group_training,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'about_info', $this->about_info])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'time_for_training', $this->time_for_training])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'type_of_sport', $this->type_of_sport])
            ->andFilterWhere(['like', 'competitions', $this->competitions])
            ->andFilterWhere(['like', 'training_sex', $this->training_sex])
            ->andFilterWhere(['like', 'group_training', $this->group_training])
            ->andFilterWhere(['like', 'achievements', $this->achievements])
            ->andFilterWhere(['like', 'place_of_training', $this->place_of_training])
            ->andFilterWhere(['like', 'gym_location', $this->gym_location])
            ->andFilterWhere(['like', 'years_experience', $this->years_experience])
            ->andFilterWhere(['like', 'previous_jobs', $this->previous_jobs])
            ->andFilterWhere(['like', 'recommendations', $this->recommendations])
            ->andFilterWhere(['like', 'ip', $this->ip]);

        return $dataProvider;
    }
}
