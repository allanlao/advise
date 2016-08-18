<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculumsubject".
 *
 * @property string $ID
 * @property integer $CurrID
 * @property string $SubjectID
 * @property string $YearLevel
 * @property string $Semester
 * @property integer $SubCatID
 */
class Curriculumsubject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curriculumsubject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CurrID', 'SubCatID'], 'integer'],
            [['SubjectID'], 'string', 'max' => 12],
            [['YearLevel'], 'string', 'max' => 20],
            [['Semester'], 'string', 'max' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'CurrID' => 'Curr ID',
            'SubjectID' => 'Subject ID',
            'YearLevel' => 'Year Level',
            'Semester' => 'Semester',
            'SubCatID' => 'Sub Cat ID',
        ];
    }
}
