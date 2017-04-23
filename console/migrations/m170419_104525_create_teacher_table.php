<?php

use yii\db\Migration;

/**
 * Handles the creation of table `teacher`.
 */
class m170419_104525_create_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('teacher', [
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
        $this->dropTable('teacher');
    }
}
