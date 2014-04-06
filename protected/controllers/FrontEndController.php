<?php

class FrontEndController extends Controller
{


	public $layout='//layouts/index';

	public function actionIndex()
	{

		$order = new CDbCriteria(array('order'=>'id DESC'));
		$data = DemoNews::model()->findAll($order);

		$this->render('index', array('data'=>$data));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}