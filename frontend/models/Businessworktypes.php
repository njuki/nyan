<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "businessworktypes".
 *
 * @property integer $id
 * @property integer $workTypeID
 * @property integer $businessID
 * @property string $dateCreated
 * @property string $dateModified
 *
 * @property Businesses $business
 * @property Worktypes $workType
 */
class Businessworktypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'businessworktypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['workTypeID', 'businessID'], 'required'],
            [['workTypeID', 'businessID'], 'integer'],
            [['dateCreated', 'dateModified'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'workTypeID' => 'Work Type',
            'businessID' => 'Business ID',
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
     * @return \yii\db\ActiveQuery
     */
    public function getWorkType()
    {
        return $this->hasOne(Worktypes::className(), ['id' => 'workTypeID']);
    }
}
