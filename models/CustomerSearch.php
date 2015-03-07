<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `app\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
	 
	public $color; 
	 
	 
    public function rules()
    {
		
	    return [
            [['color'], 'safe'],
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
        $query = Customer::find()->joinWith('color');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		
       // $this->load($params);

	   // Important: here is how we set up the sorting

		$dataProvider->sort->attributes['color'] = [
			// The tables are the ones our relation are configured to
			// in my case they are prefixed with "tbl_"
			'asc' => ['color.color_name' => SORT_ASC],
			'desc' => ['color.color_name' => SORT_DESC],
		];

		// No search? Then return data Provider
		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}		
		
		


        $query->andFilterWhere(['like', 'color.color_name', $this->color]);

        return $dataProvider;
    }
}
