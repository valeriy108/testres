<?php

/**
 * This is the model class for table "comand_result".
 *
 * The followings are the available columns in table 'comand_result':
 * @property integer $id
 * @property integer $id_particp
 * @property string $team
 * @property string $besttime
 * @property integer $model_class
 */
class ComandResult extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ComandResult the static model class
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
		return 'comand_result';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_particp, team, besttime, model_class', 'required'),
			array('id_particp, model_class', 'numerical', 'integerOnly'=>true),
			array('team, besttime', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_particp, team, besttime, model_class', 'safe', 'on'=>'search'),
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
			'id_particp' => 'Id Particp',
			'team' => 'Team',
			'besttime' => 'Besttime',
			'model_class' => 'Model Class',
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
		$criteria->compare('id_particp',$this->id_particp);
		$criteria->compare('team',$this->team,true);
		$criteria->compare('besttime',$this->besttime,true);
		$criteria->compare('model_class',$this->model_class);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}