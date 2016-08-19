<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dialogues".
 *
 * @property integer $id
 * @property string $start_date
 * @property integer $companion1_id
 * @property integer $companion2_id
 * @property string $title
 */
class Dialogues extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dialogues';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date'], 'safe'],
            [['companion1_id', 'companion2_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'start_date' => 'Start Date',
            'companion1_id' => 'Companion1 ID',
            'companion2_id' => 'Companion2 ID',
            'title' => 'Title',
        ];
    }
}
