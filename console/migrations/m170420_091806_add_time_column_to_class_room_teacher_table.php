<?php

use yii\db\Migration;

/**
 * Handles adding time to table `class_room_teacher`.
 */
class m170420_091806_add_time_column_to_class_room_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('class_room_teacher', 'time', $this->time());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('class_room_teacher', 'time');
    }
}
