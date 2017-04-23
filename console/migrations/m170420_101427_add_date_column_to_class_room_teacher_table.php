<?php

use yii\db\Migration;

/**
 * Handles adding date to table `class_room_teacher`.
 */
class m170420_101427_add_date_column_to_class_room_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('class_room_teacher', 'date', $this->date());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('class_room_teacher', 'date');
    }
}
