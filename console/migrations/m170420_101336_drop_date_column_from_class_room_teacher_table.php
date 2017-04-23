<?php

use yii\db\Migration;

/**
 * Handles dropping date from table `class_room_teacher`.
 */
class m170420_101336_drop_date_column_from_class_room_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('class_room_teacher', 'date');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('class_room_teacher', 'date', $this->dateTime());
    }
}
