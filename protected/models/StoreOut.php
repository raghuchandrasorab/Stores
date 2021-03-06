<?php

/**
 * This is the model class for table "tbl_store_out".
 *
 * The followings are the available columns in table 'tbl_store_out':
 * @property integer $sout_id
 * @property integer $iid
 * @property integer $quantity
 * @property string $date
 * @property string $vehicle
 * @property string $issued_to
 * @property integer $rate
 * @property string $date_created
 * @property string $created_by
 *
 * The followings are the available model relations:
 * @property ClientUsers $createdBy
 * @property Items $i
 */
class StoreOut extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StoreOut the static model class
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
		return 'tbl_store_out';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iid, quantity, date, vehicle, issued_to, rate, date_created, created_by', 'required'),
			array('iid, quantity, rate', 'numerical', 'integerOnly'=>true, 'min'=>0),
			array('vehicle, created_by', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sout_id, iid, quantity, date, vehicle, issued_to, rate, date_created, created_by', 'safe', 'on'=>'search'),
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
			'createdBy' => array(self::BELONGS_TO, 'ClientUsers', 'created_by'),
			'item' => array(self::BELONGS_TO, 'Items', 'iid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sout_id' => 'Sout',
			'iid' => 'Item Name',
			'quantity' => 'Quantity',
			'date' => 'Date',
			'vehicle' => 'Vehicle',
			'issued_to' => 'Issued To',
			'rate' => 'Rate',
			'date_created' => 'Date Created',
			'created_by' => 'Created By',
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

		$criteria->compare('sout_id',$this->sout_id);
		$criteria->compare('iid',$this->iid);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('vehicle',$this->vehicle,true);
		$criteria->compare('issued_to',$this->issued_to,true);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}