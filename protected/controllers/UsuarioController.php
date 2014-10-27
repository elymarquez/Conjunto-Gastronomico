<?php

class UsuarioController extends Controller
{
	
	public $layout='//layouts/loginLayout';

	public function filters()
	{
		return array(
			array('CrugeAccessControlFilter'),  //se requiere que el usuario deba haber iniciado sesion exitosamente
			'postOnly + delete',  //puede crear en la base de datos y eiminar
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('login'),
				'users'=>array('*'),
			),
			array('allow', 
				'actions'=>array('index','eliminarUsuario','crearUsuario','editarUsuario', 'administrar'),
				'users'=>array('admin'),
			),
			array('allow',
				'actions'=>array('update','logout',''),
				'users'=>array('@'),
			),
			array('deny',
				'users'=>array('*'),
			),
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
		$this->render('login',array('model'=>$model)); //vista, array(modelo)
	}

	public function actionIndex()
	{

	$this->redirect('Usuario/login'); //redirecciona a carpeta usuario, vista login.
	}

	public function actionAdministrar()
	{
		$this->layout='restaurantLayout';

		//mostrará la lista de restaurantes
		//Vista Simple de Administracion dependiendo del Role de Usuario
		if(Yii::app()->user->name == 'admin')
		{//busca a todos los elementos de la Vista Usu_Todos
		$users=VistaUsuarios::model()->findAll();
		$this->render('administrar',array('users'=>$users));
		}
		
		//$this->render('administrar');
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
		$this->layout='restaurantLayout';
		
		$this->render('crearUsuario');
	}

	public function actionEditarUsuario()
	{
		$this->render('editarUsuario'); //render = carga una pagina
	}

}