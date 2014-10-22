<?php
/* @var $this UsuarioController */

$this->breadcrumbs=array(
	'Usuario'=>array('/usuario'), //controlador/carpeta
	'Login', //accion
);
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'login-form',
    'layout' => BsHtml::FORM_LAYOUT_INLINE,
    'enableAjaxValidation' => true,
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

<label>Rut:</label><?php echo $form->textFieldControlGroup($model, 'username');?>
<label>Contraseña:</label><?php echo $form->passwordFieldControlGroup($model, 'password');?>

<br></br><?php echo BsHtml::submitButton('Enviar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY));?>

<?php $this->endWidget(); ?>