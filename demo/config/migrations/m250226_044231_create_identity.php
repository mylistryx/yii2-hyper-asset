<?php

use yii\db\Migration;

class m250226_044231_create_identity extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250226_044231_create_identity cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250226_044231_create_identity cannot be reverted.\n";

        return false;
    }
    */
}
