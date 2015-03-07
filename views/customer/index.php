<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	

	
	
<?php

if(isset($searchModel)){
?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
			'id',	
			'name',
			 [
			    'attribute' => 'color',
				'value' => 'color.color_name'
			 ],
			 


            ['class' => 'yii\grid\ActionColumn'],
			
        ],
		

		

    ]); ?>

<?php
}else{
?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
			'id',	
			'name',
			 [
			    'attribute' => 'color',
				'value' => 'color.color_name'
			 ],
			 


            ['class' => 'yii\grid\ActionColumn'],
			
        ],	

    ]); ?>

<?php

}

?>
	


</div>
