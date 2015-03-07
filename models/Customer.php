<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property integer $color_id
 * @property string $name
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['color_id', 'name'], 'required'],
            [['color_id'], 'integer'],
            [['name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'color_id' => 'Color ID',
            'name' => 'Name',
        ];
    }
	
	
	
    public function getColor()
    {
        // Customer has_one Order via Color.id -> id
        return $this->hasOne(Color::className(), ['id' => 'color_id']);
		
		
    }	
	
	
	
	
	
}
