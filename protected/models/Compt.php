<?php

/**
 * This is the model class for table "compt".
 *
 * The followings are the available columns in table 'compt':
 * @property integer $id
 * @property integer $id_particp_model
 * @property integer $numb
 * @property string $result
 */
class Compt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Compt the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'compt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			/*array('id_particp_model, numb, result', 'required'),*/
			array('id_particp_model', 'numerical', 'integerOnly'=>true),
			//array('result', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_particp_model, numb, time_laps, class_model, tehosmotr', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_particp_model' => 'Id Particp Model',
			'numb' => 'Numb',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_particp_model',$this->id_particp_model);
		$criteria->compare('numb',$this->numb);
		
		$criteria->compare('time_laps',$this->time_laps,true);
		$criteria->compare('class_model',$this->class_model,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}