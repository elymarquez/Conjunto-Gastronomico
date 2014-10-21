<?php

class ComandaController extends Controller
{
	public function actionAgregarComanda()
	{
		$this->render('agregarComanda');
	}

	public function actionEditarComanda()
	{
		$this->render('editarComanda');
	}

	public function actionEliminarEliminar()
	{
		$this->render('eliminarEliminar');
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