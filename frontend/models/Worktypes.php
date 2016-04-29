<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "worktypes".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $dateCreated
 * @property string $dateModified
 * @property integer $workCategoryID
 *
 * @property Businessworktypes[] $businessworktypes
 * @property Workcategories $workCategory
 */
class Worktypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'worktypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'workCategoryID'], 'required'],
            [['description'], 'string'],
            [['dateCreated', 'dateModified'], 'safe'],
            [['workCategoryID'], 'integer'],
            [['name'], 'string', 'max' => 200],
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
            'name' => 'Name',
            'description' => 'Description',
            'dateCreated' => 'Date Created',
            'dateModified' => 'Date Modified',
            'workCategoryID' => 'Work Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessworktypes()
    {
        return $this->hasMany(Businessworktypes::className(), ['workTypeID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkCategory()
    {
        return $this->hasOne(Workcategories::className(), ['id' => 'workCategoryID']);
    }
}
