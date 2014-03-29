<?php
/* @var $this DemoNewsController */
/* @var $model DemoNews */

$this->breadcrumbs=array(
	'Demo News'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DemoNews', 'url'=>array('index')),
	array('label'=>'Create DemoNews', 'url'=>array('create')),
	array('label'=>'View DemoNews', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DemoNews', 'url'=>array('admin')),
);
?>

<h1>Update DemoNews <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>