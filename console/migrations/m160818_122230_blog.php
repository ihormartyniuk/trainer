<?php

use yii\db\Migration;

class m160818_122230_blog extends Migration
{
    public function up()
    {
        $this->createTable('blog_articles', [
            'id' => $this->primaryKey(),
            'author_id'=>$this->integer(),
            'title'=>$this->string(),
            'date'=>$this->date(),
            'author'=>$this->string(),
            'image'=>$this->string(),
            'small_image' => $this->string(),
            'content'=>$this->text(),
            'share_buttons' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m160818_122230_blog cannot be reverted.\n";

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
