<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "businesses".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $streetAddress
 * @property string $postalCode
 * @property string $noOfEmployees
 * @property string $dateCreated
 * @property string $dateModified
 * @property string $KRA_PIN
 * @property integer $status
 *
 * @property Businessworktypes[] $businessworktypes
 * @property Users[] $users
 */
class Businesses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

	public static $INVITED = 1;
	public static $ACTIVE = 2;
	
	public $STATUS = array(
			'1' => 'INVITED',
			'2' => 'ACTIVE'
	);
	
	public static $NO_OF_EMPLOYEES = array(
			'0' => '0',
			'1-5' => '1-5',
			'6-10' => '6-10',
			'11-15' => '11-15',
			'15-19' => '15-19',
			'20+' => '20+',
			'30+' => '30+'
	);
	
    public static function tableName()
    {
        return 'businesses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'streetAddress', 'KRA_PIN', 'status'], 'required'],
            [['description'], 'string'],
            [['dateCreated', 'dateModified'], 'safe'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['streetAddress'], 'string', 'max' => 300],
            [['postalCode'], 'string', 'max' => 200],
            [['noOfEmployees', 'KRA_PIN'], 'string', 'max' => 45],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Business Name',
            'description' => 'Description',
            'streetAddress' => 'Street Address',
            'postalCode' => 'Postal Code',
            'noOfEmployees' => 'No Of Employees',
            'dateCreated' => 'Date Created',
            'dateModified' => 'Date Modified',
            'KRA_PIN' => 'KRA PIN',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessworktypes()
    {
        return $this->hasMany(Businessworktypes::className(), ['businessID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['businessID' => 'id']);
    }
}
