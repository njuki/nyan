<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $giveName
 * @property string $familyName
 * @property string $email
 * @property string $mobile
 * @property string $alternativeMobile
 * @property string $userType
 * @property integer $businessID
 * @property string $password
 * @property integer $isActive
 * @property integer $isStaff
 * @property integer $isSuperAdmin
 * @property string $lastLogin
 * @property string $dateCreated
 * @property string $dateModified
 *
 * @property Businesses $business
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['giveName', 'familyName', 'email', 'mobile', 'isActive'], 'required'],
            [['userType'], 'string'],
            [['businessID', 'isActive', 'isStaff', 'isSuperAdmin'], 'integer'],
            [['lastLogin', 'dateCreated', 'dateModified'], 'safe'],
            [['giveName', 'familyName'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
            [['mobile', 'alternativeMobile'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'giveName' => 'Give Name',
            'familyName' => 'Family Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'alternativeMobile' => 'Alternative Mobile',
            'userType' => 'User Type',
            'businessID' => 'Business ID',
            'password' => 'Password',
            'isActive' => 'Is Active',
            'isStaff' => 'Is Staff',
            'isSuperAdmin' => 'Is Super Admin',
            'lastLogin' => 'Last Login',
            'dateCreated' => 'Date Created',
            'dateModified' => 'Date Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusiness()
    {
        return $this->hasOne(Businesses::className(), ['id' => 'businessID']);
    }
}
