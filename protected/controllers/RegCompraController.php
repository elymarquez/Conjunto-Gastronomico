<?php

class RegCompraController extends Controller
{
	public function actionAgregarRegcompra()
	{
		$this->render('agregarRegcompra');
	}

	public function actionEditarRegcompra()
	{
		$this->render('editarRegcompra');
	}

	public function actionEliminarRegcompra()
	{
		$this->render('eliminarRegcompra');
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