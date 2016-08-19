<?php

use yii\db\Migration;

class m160819_085534_blog_add extends Migration
{
    public function up()
    {
        $this->addColumn('blog_articles', 'shares', $this->integer());
        $this->addColumn('blog_articles', 'likes', $this->integer());
        $this->addColumn('blog_articles', 'isActive', $this->boolean());
    }

    public function down()
    {
        echo "m160819_085534_blog_add cannot be reverted.\n";

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
