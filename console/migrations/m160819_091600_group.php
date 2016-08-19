<?php

use yii\db\Migration;

class m160819_091600_group extends Migration
{
    public function up()
    {
        $this->createTable('groups', [
            'id' => $this->primaryKey(),
            'trainer_creator_id'=>$this->integer(),
            'title'=>$this->string(),
            'registration_date'=>$this->date(),
            'trainers_ids'=>$this->string(),
            'group_users_ids'=>$this->string(),
            'small_image' => $this->string(),
            'image' => $this->string(),
            'content'=>$this->text(),
            'share_buttons' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m160819_091600_group cannot be reverted.\n";

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
