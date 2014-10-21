<?php

class UsuarioController extends Controller
{
	
	public $layout='//layouts/loginLayout';

	public function accessRules()
	{
		return array(
			array('allow',
				'action'=>array('login'),
				'users'=>array('*'),
				),
			array('allow',
				'action'=>array('index'),
				'users'=>array('@'),
				),
			array('deny',
				'users'=>array('*'),
			)
			);
	}

	//Login
	public function actionLogin()
	{
		$model=new LoginForm;//lamada al modelo LoginForm
		//Validacion Mediante Ajax
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		//Ingreso de Datos via Post
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			//Se valida que los datos cumplan con las reglas exigidas y carga la variables de session puestas en useridentity
			if($model->validate() && $model->login())
					$this->redirect(Yii::app()->user->returnUrl);
		}
		//Carga Su propia Layout
		//$this->layout='loginLayout';
		$this->render('login',array('model'=>$model)); //vista, array(modelo)
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionEliminarUsuario()
	{
		$this->render('EliminarUsuario');
	}

	public function actionCrearUsuario()
	{
		$this->render('crearUsuario');
	}

	public function actionEditarUsuario()
	{
		$this->render('editarUsuario'); //render = carga una pagina
	}

	public function actionIndex()
	{

	$this->redirect('Usuario/login'); //redirecciona
	}

}