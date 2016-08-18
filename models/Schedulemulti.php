<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedulemulti".
 *
 * @property string $MultiID
 * @property string $SchedID
 * @property string $StartTime
 * @property string $EndTime
 * @property string $Days
 * @property string $Room
 * @property integer $RoomID
 */
class Schedulemulti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedulemulti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SchedID', 'RoomID'], 'integer'],
            [['StartTime', 'EndTime'], 'string', 'max' => 50],
            [['Days', 'Room'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MultiID' => 'Multi ID',
            'SchedID' => 'Sched ID',
            'StartTime' => 'Start Time',
            'EndTime' => 'End Time',
            'Days' => 'Days',
            'Room' => 'Room',
            'RoomID' => 'Room ID',
        ];
    }
}
