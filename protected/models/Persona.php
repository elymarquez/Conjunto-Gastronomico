<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $PER_ID
 * @property integer $RESTO_ID
 * @property integer $ROL_ID
 * @property string $PERNOMBRES
 * @property string $PERAPELLIDOS
 * @property string $PERRUT
 * @property integer $PERTELEFONO
 *
 * The followings are the available model relations:
 * @property Comanda[] $comandas
 * @property Comanda[] $comandas1
 * @property Restaurant $rESTO
 * @property TipoRol $rOL
 * @property Usuario[] $usuarios
 * @property Venta[] $ventas
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RESTO_ID, ROL_ID, PERTELEFONO', 'numerical', 'integerOnly'=>true),
			array('PERNOMBRES, PERAPELLIDOS', 'length', 'max'=>25),
			array('PERRUT', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_ID, RESTO_ID, ROL_ID, PERNOMBRES, PERAPELLIDOS, PERRUT, PERTELEFONO', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'comandas' => array(self::HAS_MANY, 'Comanda', 'PER_PER_ID'),
			'comandas1' => array(self::HAS_MANY, 'Comanda', 'PER_ID'),
			'rESTO' => array(self::BELONGS_TO, 'Restaurant', 'RESTO_ID'),
			'rOL' => array(self::BELONGS_TO, 'TipoRol', 'ROL_ID'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'PER_ID'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'PER_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_ID' => 'Per',
			'RESTO_ID' => 'Resto',
			'ROL_ID' => 'Rol',
			'PERNOMBRES' => 'Pernombres',
			'PERAPELLIDOS' => 'Perapellidos',
			'PERRUT' => 'Perrut',
			'PERTELEFONO' => 'Pertelefono',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PER_ID',$this->PER_ID);
		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('ROL_ID',$this->ROL_ID);
		$criteria->compare('PERNOMBRES',$this->PERNOMBRES,true);
		$criteria->compare('PERAPELLIDOS',$this->PERAPELLIDOS,true);
		$criteria->compare('PERRUT',$this->PERRUT,true);
		$criteria->compare('PERTELEFONO',$this->PERTELEFONO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
