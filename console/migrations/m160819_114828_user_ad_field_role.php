<?php

use yii\db\Migration;

class m160819_114828_user_ad_field_role extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'role', $this->string());
    }

    public function down()
    {
        echo "m160819_114828_user_ad_field_role cannot be reverted.\n";

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
