<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum".
 *
 * @property integer $CurrID
 * @property string $Yr
 * @property string $Description
 * @property string $CourseID
 * @property string $Major
 * @property integer $Enabled
 */
class Curriculum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curriculum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Enabled'], 'integer'],
            [['Yr'], 'string', 'max' => 20],
            [['Description', 'Major'], 'string', 'max' => 50],
            [['CourseID'], 'string', 'max' => 5],
        ];
    }

    public function getFullDescription(){
        return $this->Yr . ' - '. $this->Description; 
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CurrID' => 'Curr ID',
            'Yr' => 'Yr',
            'Description' => 'Description',
            'CourseID' => 'Course ID',
            'Major' => 'Major',
            'Enabled' => 'Enabled',
        ];
    }
}
