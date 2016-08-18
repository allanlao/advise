<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "block".
 *
 * @property string $BlockId
 * @property string $CodeNumber
 * @property string $Sem
 * @property string $SchoolYear
 * @property string $CourseID
 * @property string $YearLevel
 * @property integer $ID
 * @property string $Adviser
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BlockId'], 'required'],
            [['BlockId'], 'string', 'max' => 50],
            [['CodeNumber'], 'string', 'max' => 8],
            [['Sem'], 'string', 'max' => 6],
            [['SchoolYear'], 'string', 'max' => 9],
            [['CourseID'], 'string', 'max' => 5],
            [['YearLevel'], 'string', 'max' => 20],
            [['Adviser'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BlockId' => 'Block ID',
            'CodeNumber' => 'Code Number',
            'Sem' => 'Sem',
            'SchoolYear' => 'School Year',
            'CourseID' => 'Course ID',
            'YearLevel' => 'Year Level',
            'ID' => 'ID',
            'Adviser' => 'Adviser',
        ];
    }
}
