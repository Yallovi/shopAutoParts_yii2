<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%test}}`.
 */
class m210525_113624_drop_title_column_from_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%test}}', 'title');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%test}}', 'title', $this->text());
    }
}
