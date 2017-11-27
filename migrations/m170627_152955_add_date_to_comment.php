<?php

use yii\db\Migration;

class m170627_152955_add_date_to_comment extends Migration
{
    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    public function down()
    {
        $this->dropColumn('comment','date');
    }
//    public function safeUp()
//    {
//
//    }
//
//    public function safeDown()
//    {
//        echo "m170627_152955_add_date_to_comment cannot be reverted.\n";
//
//        return false;
//    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170627_152955_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
