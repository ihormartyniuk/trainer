<?php

use yii\db\Migration;

class m160819_111705_message extends Migration
{
    public function up()
    {
        $this->createTable('messages', [
            'id'=>$this->primaryKey(),
            'date' => $this->date(),
            'time' => $this->time(),
            'message' => $this->text(),
            'author' => $this->string(),
            'sender_id' => $this->integer(),
            'receiver_id' => $this->integer(),
            'delivered' => $this->boolean(),
            'readed' => $this->boolean(),
        ]);
    }

    public function down()
    {
        echo "m160819_111705_message cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
