<?php
/* @var $this DemoNewsController */
/* @var $model DemoNews */

$this->breadcrumbs=array(
	'Demo News'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List DemoNews', 'url'=>array('index')),
	array('label'=>'Create DemoNews', 'url'=>array('create')),
	array('label'=>'Update DemoNews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DemoNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DemoNews', 'url'=>array('admin')),
);
?>

<h1>View DemoNews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'image',
		'create',
		'update',
	),
)); ?>
