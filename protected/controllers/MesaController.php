<?php

class MesaController extends Controller
{
	public function actionAgregarMesa()
	{
		$this->render('agregarMesa');
	}

	public function actionEditarMesa()
	{
		$this->render('editarMesa');
	}

	public function actionEliminarMesa()
	{
		$this->render('eliminarMesa');
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