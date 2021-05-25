<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%test}}`.
 */
class m210525_113302_add_title_column_to_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%test}}', 'title', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%test}}', 'title');
    }
}
