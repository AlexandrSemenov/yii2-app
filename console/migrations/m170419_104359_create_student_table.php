<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 */
class m170419_104359_create_student_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(100),
            'last_name' => $this->string(100),
            'email' => $this->string(100),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('student');
    }
}
