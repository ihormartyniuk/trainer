<?php

use yii\db\Migration;

class m160817_130639_add extends Migration
{
    public function up()
    {
        $this->addColumn('trainer', 'name', $this->string());
        $this->addColumn('trainer', 'surname', $this->string());
        $this->addColumn('trainer', 'about_info', $this->text());
        $this->addColumn('trainer', 'age', $this->integer());
        $this->addColumn('trainer', 'sex', $this->string());
        $this->addColumn('trainer', 'phone', $this->string());
        $this->addColumn('trainer', 'time_for_training', $this->string());
        $this->addColumn('trainer', 'registration_date', $this->date());

        $this->addColumn('trainer', 'avatar', $this->string());
    }

    public function down()
    {
        echo "m160817_130639_add cannot be reverted.\n";

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
