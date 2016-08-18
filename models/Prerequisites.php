<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prerequisites".
 *
 * @property string $CurrID
 * @property string $SubjectID
 * @property string $ISubjectID
 */
class Prerequisites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prerequisites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CurrID', 'SubjectID', 'ISubjectID'], 'required'],
            [['CurrID'], 'string', 'max' => 5],
            [['SubjectID', 'ISubjectID'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CurrID' => 'Curr ID',
            'SubjectID' => 'Subject ID',
            'ISubjectID' => 'Isubject ID',
        ];
    }
}
