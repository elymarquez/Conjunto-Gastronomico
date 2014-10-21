<?php

class RegVentaController extends Controller
{
	public function actionAgregarRegventa()
	{
		$this->render('agregarRegventa');
	}

	public function actionEditarRegventa()
	{
		$this->render('editarRegventa');
	}

	public function actionEliminarRegventa()
	{
		$this->render('eliminarRegventa');
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