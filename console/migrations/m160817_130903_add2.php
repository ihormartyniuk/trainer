<?php

use yii\db\Migration;

class m160817_130903_add2 extends Migration
{
    public function up()
    {
        $this->addColumn('trainer', 'rating', $this->integer());
        $this->addColumn('trainer', 'city', $this->string());
        $this->addColumn('trainer', 'type_of_sport', $this->string());
        $this->addColumn('trainer', 'competitions', $this->text());
        $this->addColumn('trainer', 'price', $this->integer());
        $this->addColumn('trainer', 'training_sex', $this->string());
        
        $this->addColumn('trainer', 'group_training', $this->string());
        $this->addColumn('trainer', 'price_per_group_training', $this->integer());
        
        $this->addColumn('trainer', 'achievements', $this->text());
        $this->addColumn('trainer', 'place_of_training', $this->string());
        $this->addColumn('trainer', 'gym_location', $this->string());
        $this->addColumn('trainer', 'years_experience', $this->string());
        $this->addColumn('trainer', 'previous_jobs', $this->text());
        $this->addColumn('trainer', 'recommendations', $this->text());
        
        $this->addColumn('trainer', 'ip', $this->string());


    }

    public function down()
    {
        echo "m160817_130903_add2 cannot be reverted.\n";

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
