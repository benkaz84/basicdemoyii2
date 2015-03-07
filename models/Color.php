<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "color".
 *
 * @property integer $id
 * @property string $color_name
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['color_name'], 'required'],
            [['color_name'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'color_name' => 'ColorName',
        ];
    }
	
	
	public function getCustomers(){
		return $this->hasMany(Customer::className(), ['color_id' => 'id']);
	}
	
	
	
}
