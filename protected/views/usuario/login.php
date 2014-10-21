<?php
/* @var $this UsuarioController */

$this->breadcrumbs=array(
	'Usuario'=>array('/usuario'),
	'Login',
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

<?php echo $form->textFieldControlGroup($model, 'username');?>
<?php echo $form->passwordFieldControlGroup($model, 'password');?>
<?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY));?>

<?php $this->endWidget(); ?>