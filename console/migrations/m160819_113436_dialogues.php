<?php

use yii\db\Migration;

class m160819_113436_dialogues extends Migration
{
    public function up()
    {
        $this->createTable('dialogues', [
           'id' => $this->primaryKey(),
            'start_date' => $this->date(),
            'companion1_id' => $this->integer(),
            'companion2_id' => $this->integer(),
            'title' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m160819_113436_dialogues cannot be reverted.\n";

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
