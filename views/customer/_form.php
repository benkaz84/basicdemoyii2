<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
use yii\helpers\ArrayHelper; // load classes
use app\models\Color;
?>



<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

	

		
		
		
	<?php	
		$dataList=ArrayHelper::map(Color::find()->asArray()->all(), 'id', 'color_name');
	?>
		<?=$form->field($model, 'color_id')->dropDownList($dataList, 
				 ['prompt'=>'']) 
				 ->label('Color')
				 ?>
		
		
		

    <?= $form->field($model, 'name')->textInput(['maxlength' => 250]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
