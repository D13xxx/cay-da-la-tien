<?php

namespace common\models\query;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Articles;

/**
 * ArticlesQuery represents the model behind the search form of `common\models\Articles`.
 */
class ArticlesQuery extends Articles
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cat_articles_id', 'created_at', 'status', 'author', 'views', 'is_del', 'is_hot_new'], 'integer'],
            [['title', 'description', 'content', 'tags', 'avatar'], 'safe'],
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
        $query = Articles::find();

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
            'cat_articles_id' => $this->cat_articles_id,
            'created_at' => $this->created_at,
            'status' => $this->status,
            'author' => $this->author,
            'views' => $this->views,
            'is_del' => $this->is_del,
            'is_hot_new' => $this->is_hot_new,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
