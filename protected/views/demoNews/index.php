<?php
/* @var $this DemoNewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Demo News',
);

$this->menu=array(
	array('label'=>'Create DemoNews', 'url'=>array('create')),
	array('label'=>'Manage DemoNews', 'url'=>array('admin')),
);
?>

<h1>Demo News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
