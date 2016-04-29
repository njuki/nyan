<?php

namespace frontend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

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
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
	const STATUS_DELETED = 0;
	const STATUS_ACTIVE = 1;
	
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
            [['giveName', 'familyName', 'email', 'mobile', 'isActive', 'password'], 'required'],
            [['userType'], 'string'],
        	[['email'], 'unique'],
            [['businessID', 'isActive', 'isStaff', 'isSuperAdmin'], 'integer'],
            [['lastLogin', 'dateCreated', 'dateModified'], 'safe'],
            [['giveName', 'familyName'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
            [['mobile', 'alternativeMobile'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'giveName' => 'First Name',
            'familyName' => 'Surname',
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
    

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
    	return static::findOne(['id' => $id, 'isActive' => self::STATUS_ACTIVE]);
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
    	throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
    
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
    	return static::findOne(['email' => $username, 'isActive' => self::STATUS_ACTIVE]);
    }
    
    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
    	if (!static::isPasswordResetTokenValid($token)) {
    		return null;
    	}
    
    	return static::findOne([
    			'password_reset_token' => $token,
    			'status' => self::STATUS_ACTIVE,
    	]);
    }
    
    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
    	if (empty($token)) {
    		return false;
    	}
    	$expire = Yii::$app->params['user.passwordResetTokenExpire'];
    	$parts = explode('_', $token);
    	$timestamp = (int) end($parts);
    	return $timestamp + $expire >= time();
    }
    
    /**
     * @inheritdoc
     */
    public function getId()
    {
    	return $this->getPrimaryKey();
    }
    
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
    	return $this->auth_key;
    }
    
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
    	return $this->getAuthKey() === $authKey;
    }
    
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
    	return Yii::$app->security->validatePassword($password, $this->password);
    }
    
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
    	$this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
    	$this->auth_key = Yii::$app->security->generateRandomString();
    }
    
    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
    	$this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    
    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
    	$this->password_reset_token = null;
    }
}
