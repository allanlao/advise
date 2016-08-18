<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "checklist".
 *
 * @property string $StudID
 * @property string $SubjectID
 * @property string $Description
 * @property string $UnitsEarned
 * @property string $SchoolYear
 * @property string $TermTaken
 * @property string $Grade
 * @property string $CreditedAs
 * @property string $School
 * @property string $Course
 * @property string $YearLevel
 * @property string $DateOfEntry
 * @property string $UserName
 * @property string $Remarks
 * @property string $CodeNumber
 * @property string $ReviewedBy
 * @property string $ReviewedDate
 * @property string $ModifiedDate
 * @property string $ModifiedBy
 * @property integer $CheckID
 */
class Checklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'checklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DateOfEntry', 'ReviewedDate', 'ModifiedDate'], 'safe'],
            [['Remarks'], 'required'],
            [['Remarks'], 'string'],
            [['StudID'], 'string', 'max' => 7],
            [['SubjectID', 'Grade', 'YearLevel'], 'string', 'max' => 20],
            [['Description'], 'string', 'max' => 300],
            [['UnitsEarned'], 'string', 'max' => 10],
            [['SchoolYear'], 'string', 'max' => 9],
            [['TermTaken'], 'string', 'max' => 64],
            [['CreditedAs'], 'string', 'max' => 25],
            [['School', 'Course'], 'string', 'max' => 255],
            [['UserName', 'ReviewedBy', 'ModifiedBy'], 'string', 'max' => 32],
            [['CodeNumber'], 'string', 'max' => 8],
            [['StudID', 'SubjectID', 'SchoolYear', 'TermTaken'], 'unique', 'targetAttribute' => ['StudID', 'SubjectID', 'SchoolYear', 'TermTaken'], 'message' => 'The combination of Stud ID, Subject ID, School Year and Term Taken has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'StudID' => 'Stud ID',
            'SubjectID' => 'Subject ID',
            'Description' => 'Description',
            'UnitsEarned' => 'Units Earned',
            'SchoolYear' => 'School Year',
            'TermTaken' => 'Term Taken',
            'Grade' => 'Grade',
            'CreditedAs' => 'Credited As',
            'School' => 'School',
            'Course' => 'Course',
            'YearLevel' => 'Year Level',
            'DateOfEntry' => 'Date Of Entry',
            'UserName' => 'User Name',
            'Remarks' => 'Remarks',
            'CodeNumber' => 'Code Number',
            'ReviewedBy' => 'Reviewed By',
            'ReviewedDate' => 'Reviewed Date',
            'ModifiedDate' => 'Modified Date',
            'ModifiedBy' => 'Modified By',
            'CheckID' => 'Check ID',
        ];
    }
}
