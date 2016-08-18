<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property string $SubjectID
 * @property string $Description
 * @property string $Units
 * @property string $SubjectType
 * @property string $DeptID
 * @property integer $CategoryID
 * @property integer $Enabled
 * @property string $Hours
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SubjectID'], 'required'],
            [['Units', 'Hours'], 'number'],
            [['CategoryID', 'Enabled'], 'integer'],
            [['SubjectID'], 'string', 'max' => 12],
            [['Description'], 'string', 'max' => 255],
            [['SubjectType'], 'string', 'max' => 10],
            [['DeptID'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SubjectID' => 'Subject ID',
            'Description' => 'Description',
            'Units' => 'Units',
            'SubjectType' => 'Subject Type',
            'DeptID' => 'Dept ID',
            'CategoryID' => 'Category ID',
            'Enabled' => 'Enabled',
            'Hours' => 'Hours',
        ];
    }
}
