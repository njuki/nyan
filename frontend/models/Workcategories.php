<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workcategories".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $dateCreated
 * @property string $dateModified
 *
 * @property Worktypes[] $worktypes
 */
class Workcategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workcategories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['dateCreated', 'dateModified'], 'safe'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorktypes()
    {
        return $this->hasMany(Worktypes::className(), ['workCategoryID' => 'id']);
    }
}
