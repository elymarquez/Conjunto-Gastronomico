<?php

class PersonaController extends Controller
{
	public function actionAgregarPersona()
	{
		$this->render('agregarPersona');
	}

	public function actionEditarPersona()
	{
		$this->render('editarPersona');
	}

	public function actionEliminarPersona()
	{
		$this->render('eliminarPersona');
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