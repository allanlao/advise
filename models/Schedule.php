<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property string $CodeNumber
 * @property string $SubjectID
 * @property string $Sem
 * @property string $SchoolYear
 * @property string $TeacherID
 * @property string $Type
 * @property string $WithLab
 * @property integer $Slots
 * @property string $SchedID
 * @property string $CourseID
 * @property string $GroupID
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Slots', 'GroupID'], 'integer'],
            [['CodeNumber'], 'string', 'max' => 8],
            [['SubjectID'], 'string', 'max' => 12],
            [['Sem'], 'string', 'max' => 6],
            [['SchoolYear'], 'string', 'max' => 9],
            [['TeacherID'], 'string', 'max' => 32],
            [['Type'], 'string', 'max' => 3],
            [['WithLab'], 'string', 'max' => 1],
            [['CourseID'], 'string', 'max' => 5],
            [['CodeNumber', 'Sem', 'SchoolYear'], 'unique', 'targetAttribute' => ['CodeNumber', 'Sem', 'SchoolYear'], 'message' => 'The combination of Code Number, Sem and School Year has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CodeNumber' => 'Code Number',
            'SubjectID' => 'Subject ID',
            'Sem' => 'Sem',
            'SchoolYear' => 'School Year',
            'TeacherID' => 'Teacher ID',
            'Type' => 'Type',
            'WithLab' => 'With Lab',
            'Slots' => 'Slots',
            'SchedID' => 'Sched ID',
            'CourseID' => 'Course ID',
            'GroupID' => 'Group ID',
        ];
    }
}
