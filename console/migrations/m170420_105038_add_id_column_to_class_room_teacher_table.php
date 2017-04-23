<?php

use yii\db\Migration;

/**
 * Handles adding id to table `class_room_teacher`.
 */
class m170420_105038_add_id_column_to_class_room_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('class_room_teacher', 'id', $this->primaryKey());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('class_room_teacher', 'id');
    }
}
