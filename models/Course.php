<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property string $CourseID
 * @property string $CourseName
 * @property string $DeptID
 * @property string $CourseLongName
 * @property string $MinFullScholar
 * @property string $MinHalfScholar
 * @property string $MinDeansList
 * @property double $MinUnitLoad
 * @property string $MinAveGrade
 * @property double $MinDeansLoad
 * @property string $PassingGrade
 * @property string $GradingPeriod
 * @property string $Regulation
 * @property integer $CurrentlyOffered
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CourseID'], 'required'],
            [['MinUnitLoad', 'MinDeansLoad'], 'number'],
            [['CurrentlyOffered'], 'integer'],
            [['CourseID', 'DeptID'], 'string', 'max' => 5],
            [['CourseName'], 'string', 'max' => 64],
            [['CourseLongName'], 'string', 'max' => 255],
            [['MinFullScholar', 'MinHalfScholar', 'MinDeansList', 'MinAveGrade', 'PassingGrade'], 'string', 'max' => 8],
            [['GradingPeriod'], 'string', 'max' => 4],
            [['Regulation'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CourseID' => 'Course ID',
            'CourseName' => 'Course Name',
            'DeptID' => 'Dept ID',
            'CourseLongName' => 'Course Long Name',
            'MinFullScholar' => 'Min Full Scholar',
            'MinHalfScholar' => 'Min Half Scholar',
            'MinDeansList' => 'Min Deans List',
            'MinUnitLoad' => 'Min Unit Load',
            'MinAveGrade' => 'Min Ave Grade',
            'MinDeansLoad' => 'Min Deans Load',
            'PassingGrade' => 'Passing Grade',
            'GradingPeriod' => 'Grading Period',
            'Regulation' => 'Regulation',
            'CurrentlyOffered' => 'Currently Offered',
        ];
    }
}
