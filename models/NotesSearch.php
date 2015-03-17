<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Notes;

/**
 * NotesSearch represents the model behind the search form about `app\models\Notes`.
 */
class NotesSearch extends Notes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_user'], 'integer'],
            [['tanggal', 'instansi', 'project', 'isi', 'keterangan', 'created', 'finished', 'canceled'], 'safe'],
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
        $query = Notes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_user' => $this->id_user,
            'tanggal' => $this->tanggal,
            'created' => $this->created,
            'finished' => $this->finished,
            'canceled' => $this->canceled,
        ]);

        $query->andFilterWhere(['like', 'instansi', $this->instansi])
            ->andFilterWhere(['like', 'project', $this->project])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
