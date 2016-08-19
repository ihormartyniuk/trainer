<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property string $date
 * @property string $time
 * @property string $message
 * @property string $author
 * @property integer $sender_id
 * @property integer $receiver_id
 * @property integer $delivered
 * @property integer $readed
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'time'], 'safe'],
            [['message'], 'string'],
            [['sender_id', 'receiver_id', 'delivered', 'readed'], 'integer'],
            [['author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'time' => 'Time',
            'message' => 'Message',
            'author' => 'Author',
            'sender_id' => 'Sender ID',
            'receiver_id' => 'Receiver ID',
            'delivered' => 'Delivered',
            'readed' => 'Readed',
        ];
    }
}
