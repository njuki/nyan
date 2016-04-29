<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jobs".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $streetAddress
 * @property string $dateCreated
 * @property string $dateModified
 * @property integer $status
 * @property integer $workTypeID
 * @property integer $userID
 *
 * @property Users $user
 * @property Worktypes $workType
 */
class Jobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'streetAddress', 'status', 'workTypeID', 'userID'], 'required'],
            [['description'], 'string'],
            [['dateCreated', 'dateModified'], 'safe'],
            [['status', 'workTypeID', 'userID'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['streetAddress'], 'string', 'max' => 300],
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
            'name' => 'What do you need done?',
            'description' => 'Full Job Description',
            'streetAddress' => 'Where is the job taking place?',
            'dateCreated' => 'Date Created',
            'dateModified' => 'Date Modified',
            'status' => 'Status',
            'workTypeID' => 'What service do you need?
        		',
            'userID' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'userID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkType()
    {
        return $this->hasOne(Worktypes::className(), ['id' => 'workTypeID']);
    }
}
