<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentdata".
 *
 * @property string $StudID
 * @property string $Email
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property integer $DegreeID
 * @property string $Degree
 * @property integer $CurriculumID
 * @property string $CourseID
 * @property string $YearLevel
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['StudID', 'YearLevel'], 'required'],
            [['DegreeID', 'CurriculumID'], 'integer'],
            [['StudID'], 'string', 'max' => 7],
            [['Email'], 'string', 'max' => 100],
            [['FirstName', 'MiddleName', 'LastName', 'Degree'], 'string', 'max' => 50],
            [['CourseID'], 'string', 'max' => 5],
            [['YearLevel'], 'string', 'max' => 20],
            [['StudID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'StudID' => 'Stud ID',
            'Email' => 'Email',
            'FirstName' => 'First Name',
            'MiddleName' => 'Middle Name',
            'LastName' => 'Last Name',
            'DegreeID' => 'Degree ID',
            'Degree' => 'Degree',
            'CurriculumID' => 'Curriculum ID',
            'CourseID' => 'Course ID',
            'YearLevel' => 'Year Level',
        ];
    }

    public function getFullname(){

        return ucwords(strtolower($this->LastName . ', ' . $this->FirstName));
    }
}
