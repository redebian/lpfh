<?php
/* @var $this DemoNewsController */
/* @var $model DemoNews */

$this->breadcrumbs=array(
	'Demo News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DemoNews', 'url'=>array('index')),
	array('label'=>'Manage DemoNews', 'url'=>array('admin')),
);
?>

<h1>Create DemoNews</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>